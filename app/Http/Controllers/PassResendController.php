<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\SendEmailController as SendEmail;
// controlador para resetear contraseña de los asesores
class PassResendController extends Controller
{	

	public function index($user_id)
    {   
        // validacion si la session sigue activa
    	if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }

        $user = Users::where('id', $user_id)->first();
        $name = $user->first_name." ".$user->last_name;
        $email = $user->email;
        $pass = Crypt::decryptString($user->password);

        $data = ["name"=>$name, 
                "user" => $email,
                "pass" => $pass,
                "subject" => 'Correo de Bienvenida - Fuerza Maestra',
                "email" => $email,
                "view"=>"emails.welcome",
                "root"=>"https://fuerzamaestra.com"];
        // funcion para enviar correo electronico
        $send = new SendEmail($data);

        if($send){
            $message = "Se envio un correo electrónico al candidato con su usuario y contraseña. La contraseña del candidato ".$name." es: ".$pass;
                return array('status' => 'success','message' =>$message);
        }else{
            $message = "Error al enviar correo electrónico. La contraseña del candidato ".$name." es: ".$pass;
            return array('status' => 'error','message' =>$message);
        }

        
    }
}