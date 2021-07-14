<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;
use App\Users_Districts;
use DB;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\SendEmailController as SendEmail;
use Illuminate\Support\Facades\Input;
// controlador para insertar nuevo usuario
class UserInsertController extends Controller
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
        // validacion de session
        if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }
     
        $response = $this->transaction($request);

        if($response["status"]){
            if($request["email-send"] == 1){
                $data = ["name"=>$request["first-name"]." ".$request["last-name"], 
                        "user" => $request["email"],
                        "pass" => $request["pass"],
                        "subject" => 'Correo de Bienvenida - Fuerza Maestra',
                        "email" => $request["email"],
                        "view"=>"emails.welcome_user",
                        "root"=>$request->root()];
                // controlador para enviar correo electronico
                $send = new SendEmail($data);
                if($send){
                    $message ="Usuario dado de alta exitosamente y correo electrónico enviado a nuevo usuario";
                        return array('status' => "success",'type'=>'result','message' => $message); 
                }else{
                    $message ="Usuario dado de alta exitosamente pero no se pudo enviar correo electrónico a nuevo usuario";
                        return array('status' => "success",'type'=>'result','message' => $message); 
                }
            }else{
              $message ="Usuario dado de alta exitosamente.";
                return array('status' => "success",'type'=>'result','message' => $message);  
            }
        }else{
            return array('status' => "error", 'message' => $response["message"]);
        }
    }

    public function transaction($request){
        $error = null;
        DB::beginTransaction();
        try {

            $user = Users::where("username","=",$request["email"])->first();
        
            if($user){
                return array('status' => false, 'message' => 'El usuario: '.
                    $request["email"].' ya existe ingrese otro correo electrónico.');
            }
            
            $user = new Users;
            $user->ip_address_register = request()->ip();
            $user->username = $request["email"];
            $user->email = $request["email"];
            $user->first_name = $this->str_to_upper($request["first-name"]);
            $user->last_name = $this->str_to_upper($request["last-name"]);
            $user->phone = $request["phone"];
            $user->gender = $request["gender"];
            $user->group_id = $request["group-id"];
            $user->password = Crypt::encryptString($request["pass"]);

            if($request["branch-office-id"] != 0) 
                $user->branch_office_id = $request["branch-office-id"];
            if($request["sub-management-id"] != 0) 
                $user->sub_management_id = $request["sub-management-id"];
            if($request["state-id"] != 0) 
                $user->state_id = $request["state-id"];
            if($request["district-id"] != 0) 
                $user->district_id = $request["district-id"];

            $user->save();

            if($request["group-id"] == 1){
                $user_id = $user->id;
                $districts = Input::has('districts') ? true : false;
                if($districts){
                    $array_districts = explode(" ", $request["districts"]);
                    foreach ($array_districts as $value) {
                        $user_district = new Users_Districts;
                        $user_district->user_id = $user_id;
                        $user_district->district_id = $value;
                        $user_district->save();
                    }
                }
            }
            DB::commit();

            $message ="transaction complete"; 
            return array('status' => true, 'message' => $message);
        } catch (\Exception $e) {
            $status = false;
            $message = $e->getMessage();
            DB::rollback();
            return array('status' => $status, 'message' => $message);
        }
    }

}