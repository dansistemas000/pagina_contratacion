<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Branch_Offices;
// controlador para insertar una nueva sucursal
class BranchOfficeInsertController extends Controller
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
                            ->first();
        // valida que no exista el nombre de la sucursal
        if($branch_office){
            return array('status' => "error", 'message' => 'Esta sucursal: '.
                    $request["branch-office-name"].' ya existe ingrese otro nombre.');
        }

        $branch_office = new Branch_Offices;
        $branch_office->name = $this->str_to_upper($request["branch-office-name"]);
        $branch_office->code = $request["code"];
        $branch_office->state_id = $request["state-id"];
        $branch_office->address = $request["address"];
        $response = $branch_office->save();


        if($response){
            $message ="Sucursal dada de alta exitosamente.";
                return array('status' => "success",'type'=>'result','message' => $message); 
        }else{
            return array('status' => "error", 'message' => "Error al dar de alta sucursal, intente de nuevo o reporte este error.");
        }
    }
}