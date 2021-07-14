<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;
use App\Users_Districts;
use DB;
use Illuminate\Support\Facades\Input;
// controlador para actualizar datos del usuario
class UserUpdateController extends Controller
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

        $user = Users::where("username","=",$request["email"])
                ->where("id","!=",$request["user-id"])->first();
        
        if($user){
            return array('status' => "error","message" => 'El usuario: '.
                        $request["email"].' ya existe ingrese otro correo electrónico.');
        }

          
        $response = $this->transaction($request);

        if($response["status"]){
            $message ="Datos modificados exitosamente.";
            return array('status' => "success",'type'=>'result', 'update'=>true, 
                'message' => $message);
        }else{
            return array('status' => "error", 'message' => $response["message"]);
        }
    }

    public function transaction($request){
        $error = null;
        DB::beginTransaction();
        try {
            
            $user = Users::where("id","=",$request["user-id"])->first();

            $user->username = $request["email"];
            $user->email = $request["email"];
            $user->first_name = $this->str_to_upper($request["first-name"]);
            $user->last_name = $this->str_to_upper($request["last-name"]);
            $user->phone = $request["phone"];
            $user->gender = $request["gender"];

            switch ($request["group-id"]) {
                case 1:
                    $districts = Input::has('districts') ? true : false;
                    if($districts){
                        $delete = Users_Districts::where("user_id","=",$request["user-id"]);
                        $delete->delete();
                        $array_districts = explode(" ", $request["districts"]);
                        foreach ($array_districts as $value) {
                            $user_district = new Users_Districts;
                            $user_district->user_id = $request["user-id"];
                            $user_district->district_id = $value;
                            $user_district->save();
                        }
                    }
                break;
                case 16:
                    $user->sub_management_id = $request["sub-management-id"];
                break;
                case 19:
                    $user->branch_office_id = $request["branch-office-id"];
                break;
                case 20:
                    $user->state_id = $request["state-id"];
                break;
                case 21:
                    $user->district_id = $request["district-id"];
                break;
            }

            $user->save();
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