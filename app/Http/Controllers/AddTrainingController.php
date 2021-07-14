<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Advisers;
// controlador para agregar al asesor capacitado
class AddTrainingController extends Controller
{	

	public function index($user_id)
    {   
    	if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }

    	$adviser = Advisers::where('user_id', $user_id)->first();

        if($adviser->status_id != 7){
            return array('status' => 'error','message' =>"No se pudo agregar capacitación, el candidato debe tener estatus de Contratado.");
        }

        $adviser->trained = 1;
        $response = $adviser->save();

        if($response){
        	return array('status' => 'success','message' =>"Se agrego capacitación exitosamente.");
        }else{
            return array('status' => 'error','message' =>"No se pudo agregar capacitación a candidato intete mas tarde o reportelo.");
        }
    }
}