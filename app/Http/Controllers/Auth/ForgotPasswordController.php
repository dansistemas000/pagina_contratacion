<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\SendEmailController as SendEmail;

class ForgotPasswordController extends Controller
{
    public function index(){

    }
    public function store(Request $request){


        $data = Users::where("username","=",$request["user-name"])
                            ->where("active","=",1)
                            ->first();
        if($data){
            $response = $this->get_password($data);

            if($response["status"]){

                $data = ["name"=>$data["first_name"].' '.$data["last_name"], 
                        "user" => $data["username"],
                        "password" => $response["message"],
                        "subject" => '¿Olvidaste tu contraseña? - Fuerza Maestra',
                        "email" => $data["username"],
                        "view"=>"emails.forgot_password_email",
                        "type"=>$response["type"],
                        "root"=>$request->root()];

                $send = new SendEmail($data);

                if($send){
                   return array('status' => 'success', 'type'=>'result',
                                'message' => "Se envío la contraseña en un correo electrónico al usuario: ".$request["user-name"]); 
                }
            }else{
                return array('status' => 'error', 'message' => $response["message"]);
            }
        }else{
            return array("status"=>"error","message" =>"El usuario: ".$request["user-name"]." no existe verifique que este capturando correctamente su usuario"); 
        }
        
    }

    public function get_password($data){
        $pass = $data["password"];
        $char_pass = strlen($pass);
        if($char_pass <= 40){
            $type = "reset";
            $password = $this->create_password($data["first_name"],$data["last_name"],$data["town"]);
            $user = Users::find($data["id"]);
            $user->password = Crypt::encryptString($password);
            $result = $user->save();
            if($result){
                $status = true;
                $message = $password;
            }else{
                $status = false;
                $message = "Error al guardar nueva contraseña";
            }
        }else{
            $type = "remember";
            $status = true;
            $message = Crypt::decryptString($pass);
            
        }
        return array('status' => $status, 'message' =>$message, 'type' => $type);
    }

}
