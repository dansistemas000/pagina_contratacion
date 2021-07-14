<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Branch_Offices;
use DB;
// controlador para eliminar usuario
class BranchOfficeDeleteController extends Controller
{   

    public function index($branch_office_id)
    {   
        if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }

        $response = $this->transaction($branch_office_id);

        if($response["status"]){
            return array('status' => 'success','message' =>"Se elimino sucursal exitosamente.");
        }else{
            $message = $response["message"];
            return array('status' => 'error','message' =>$message);
        }
    }

    public function transaction($branch_office_id){
        $error = null;
        DB::beginTransaction();
        try {

            $branch_office = Branch_Offices::where('id', $branch_office_id)->first();
            $branch_office->delete();
        
            
            DB::commit();   
            return array('status' => true, 'message' => "Datos Almacenados exitosamente");

        } catch (\Exception $e) {
            $status = false;
            $message = $e->getMessage();
            DB::rollback();
            return array('status' => $status, 'message' => $message);
        }
    }
}