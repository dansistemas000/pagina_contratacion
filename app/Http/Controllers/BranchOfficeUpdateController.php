<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Branch_Offices;
use DB;
// controlador para actualizar los datos de la sucursal
class BranchOfficeUpdateController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){

    }

    public function store(Request $request)
    {   
        if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }

        $branch_office = Branch_Offices::where("name","=",$request["branch-office-name"])
                            ->where("id","!=",$request["branch-office-id"])->first();
        // valida que el nombre de la sucursal no exista
        if($branch_office){
            return array('status' => "error", 'message' => 'Esta sucursal: '.
                    $request["branch-office-name"].' ya existe ingrese otro nombre.');
        }

   
        $response = $this->transaction($request);

        if($response["status"]){
            $message ="Datos modificados exitosamente.";
            return array('status' => "success",'type'=>'result', 'update'=>true, 
                'message' => $message);
        }else{
            return array('status' => "error", 'message' => $response["message"]);
        }
    }

    public function transaction($request){
        $error = null;
        DB::beginTransaction();
        try {
            
            $branch_office = Branch_Offices::where("id","=",$request["branch-office-id"])->first();

            $branch_office->name = $this->str_to_upper($request["branch-office-name"]);
            $branch_office->code = $request["code"];
            $branch_office->state_id = $request["state-id"];
            $branch_office->address = $request["address"];

            $branch_office->save();
            DB::commit();

            $message ="transaction complete"; 
            return array('status' => true, 'message' => $message);
        } catch (\Exception $e) {
            $status = false;
            $message = $e->getMessage();
            DB::rollback();
            return array('status' => $status, 'message' => $message);
        }
    }

}