<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Advisers;
// controlador para rechazar a asesor
class AdviserRejectedController extends Controller
{	

	public function index($user_id)
    {   
    	if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }

    	$adviser = Advisers::where('user_id', $user_id)->first();

        $adviser->status_id = 9;
        $response = $adviser->save();

        if($response){
        	return array('status' => 'success','message' =>"Candidato rechazado exitosamente.");
        }else{
            return array('status' => 'error','message' =>"No se pudo rechazar a candidato intete mas tarde o reportelo.");
        }
    }
}