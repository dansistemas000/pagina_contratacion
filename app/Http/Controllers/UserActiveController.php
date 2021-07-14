<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;
// controlador para activar odesactivar usuarios
class UserActiveController extends Controller
{	

	public function index($id,$value,$text)
    {   
    	if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }

    	$user = Users::where('id', $id)->first();

        $user->active = $value;
        $response = $user->save();

        if($response){
        	return array('status' => 'success','message' =>"Usuario ".$text." exitosamente.");
        }else{
            return array('status' => 'error','message' =>"No se pudo ".$text." usuario.");
        }
    }
}