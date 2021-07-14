<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\SendEmailController as SendEmail;
// controlador para resetear contraseña de los asesores
class PassResetController extends Controller
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
        $pass_new = $this->create_password($user->first_name,$user->last_name,
                                        $user->town);

        // funcion para encriptar contraseña
    	$user->password = Crypt::encryptString($pass_new);

        $response = $user->save();

        if($response){
            $data = ["name"=>$name, 
                    "pass" => $pass_new,
                    "subject" => 'Su clave ha sido reseteada - Fuerza Maestra',
                    "email" => $email,
                    "view"=>"emails.pass_reset"];
            // funcion para enviar correo electronico
            $send = new SendEmail($data);

            if($send){
                $message = "Se envio un correo electrónico al candidato con su nueva contraseña. La nueva contraseña del candidato ".$name." es: ".$pass_new;
                    return array('status' => 'success','message' =>$message);
            }else{
                $message = "Error al enviar correo electrónico. La nueva contraseña del candidato ".$name." es: ".$pass_new;
                return array('status' => 'error','message' =>$message);
            }

        }else{
            return array('status' => 'error','message' =>"No se pudo resetear la contraseña intente de nuevo o reporte este error.");
        }
    }
}