<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\SendEmailController as SendEmail;

// controlador para cambiar la contraseña de un usuario
class ChangePassController extends Controller
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
        
        $user = Users::where("id","=",$request["user-id"])->first();
        $name = $user["first-name"]." ".$user["last-name"];
        $email = $user["email"];
        $user->password = Crypt::encryptString($request["pass"]);
        $response = $user->save();

        if($response){

            $data = ["name"=>$name, 
                    "pass" => $request["pass"],
                    "subject" => 'Su clave ha sido reseteada - Fuerza Maestra',
                    "email" => $email,
                    "view"=>"emails.pass_reset"];
            // funcion para enviar correo electronico
            $send = new SendEmail($data);

            if($send){
               $message ="Contraseña actualizada correctamente.";
                        return array('status' => "success",'type'=>'result', 
                        'message' => $message); 
            }else{
                return array('status' => "error", 'message' => "Contraseña actualizada, pero error al enviar correo electrónico");
            }
        }else{
            return array('status' => "error", 'message' => "Error al cambiar contraseña, intente de nuevo o reportelo");
        }
    }
}