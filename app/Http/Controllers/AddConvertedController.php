<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Advisers;
// controlador para agregar al asesor conversion
class AddConvertedController extends Controller
{	

	public function index($user_id)
    {   
    	if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }

    	$adviser = Advisers::where('user_id', $user_id)->first();

        if($adviser->status_id != 7){
            return array('status' => 'error','message' =>"No se pudo agregar conversión, el candidato debe tener estatus de Contratado.");
        }

        $adviser->converted = 1;
        $response = $adviser->save();

        if($response){
        	return array('status' => 'success','message' =>"Se agrego conversión exitosamente.");
        }else{
            return array('status' => 'error','message' =>"No se pudo agregar conversión a candidato intete mas tarde o reportelo.");
        }
    }
}