<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Permissions;

class PermissionsUpdateController extends Controller
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
        // funcion para validar session
        if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }
        
        $permissions = Permissions::where("group_id","=",$request["group-id"])->first();

        unset($request["_token"]);
        unset($request["group-id"]);

        $response = $permissions->update($request->all());

        if($response){
            $message ="Permisos actualizados correctamente.";
            return array('status' => "success",'type'=>'result', 'update'=>true,
                'message' => $message);
        }else{
            return array('status' => "error", 'message' => "Error al actualizar permisos intente de nuevo o reportelo");
        }
    }
}