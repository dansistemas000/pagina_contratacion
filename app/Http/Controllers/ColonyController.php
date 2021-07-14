<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ES_MX;

// controlador para insertar nuevo usuario
class ColonyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){

    }

    public function insert(Request $request){
       // validacion de session
        if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }

        $colony = new ES_MX();

        $response = $colony->create($request->all());

        $id = $response->id;

        if($response){
            return array('status' => "success", 'message' => "Colonia agregada exitosamente","type"=>"result","return_id"=>$id);
        }else{
            return array('status' => "error", 'message' => "Error al agregar colonia, intente de nuevo o repórtelo en sistemas","type"=>"result");
        }
        
    }

    public function delete($id){

        if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }

        $response = ES_MX::destroy($id);

        if($response){
            return array('status' => "success", 'message' => "Colonia eliminada exitosamente");
        }else{
            return array('status' => "error", 'message' => "Error al eliminar colonia, intente de nuevo o repórtelo en sistemas");
        }
    }

    public function update(Request $request){

        if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }

        $colony = ES_MX::where("id","=",$request["id"])->first();

        $colony->colony = $request["colony"];

        $response = $colony->save();

        if($response){
            return array('status' => "success", 'message' => "Colonia modificada exitosamente","type"=>"result","update"=>true);
        }else{
            return array('status' => "error", 'message' => "Error al modificar colonia, intente de nuevo o repórtelo en sistemas","type"=>"result");
        }

    }
}