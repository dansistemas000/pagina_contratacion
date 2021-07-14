<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Crypt;
use App\Advisers;
use App\States;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{   

    public function index(){

    }

    public function store(Request $request){
        
        $data = Users::where("users.username","=",$request["user-name"])
                        ->where("users.active","=",1)
                        ->first();

        $remberber = Input::has('rembember') ? true : false;

        if(isset($_COOKIE['fuerza_maestra_cookie_user'])){
            $data_cookie = json_decode($_COOKIE['fuerza_maestra_cookie_user'], true);
            if($request["user-name"] == $data_cookie["username"] && $request["password"] == "xxxxxxxxxxxxxx"){
                $request["password"] = Crypt::decryptString($data_cookie["password"]);
            }
        }

        if($data){

            if($this->validate_password($data,$request)){

                if($data["group_id"] == 3){
                    $view = "advisers";
                }else{
                    $view = "admin";
                }

                $user_data = ["user_id" => $data["id"],
                                "user_name" => $data["username"],
                                "name" => $data["first_name"]. " ".$data["last_name"],
                                "group_id" => $data["group_id"],
                                "gender" => $data["gender"],
                                "branch_office_id" => $data["branch_office_id"],
                                "state_id" => $data["state_id"],
                                "district_id" =>  $data["district_id"],
                                "sub_management_id" => $data["sub_management_id"],
                            ];

                
                $name_session = 'fuerza_maestra_session_user';
                \Session::put($name_session,$user_data);

                if($remberber && !isset($_COOKIE['fuerza_maestra_cookie_user'])){
                    $cookie_data = [
                                "username" => $request["user-name"],
                                "password" => Crypt::encryptString($request["password"])   
                                   ];
                    $lifetime = time() + 60 * 60 * 24 * 365;
                    setcookie("fuerza_maestra_cookie_user",json_encode($cookie_data),$lifetime);
                }elseif($remberber && isset($_COOKIE['fuerza_maestra_cookie_user'])){
                    $data_cookie = json_decode($_COOKIE['fuerza_maestra_cookie_user'], true);
                    if($request["user-name"] != $data_cookie["username"]){
                        $cookie_data = [
                                "username" => $request["user-name"],
                                "password" => Crypt::encryptString($request["password"])   
                                   ];
                        $lifetime = time() + 60 * 60 * 24 * 365;
                        setcookie("fuerza_maestra_cookie_user",json_encode($cookie_data),$lifetime);
                    }elseif($request["password"] != $data_cookie["password"]){
                        $cookie_data = [
                                "username" => $request["user-name"],
                                "password" => Crypt::encryptString($request["password"])   
                                   ];
                        $lifetime = time() + 60 * 60 * 24 * 365;
                        setcookie("fuerza_maestra_cookie_user",json_encode($cookie_data),$lifetime);
                    }
                }elseif(!$remberber && isset($_COOKIE['fuerza_maestra_cookie_user'])){
                    unset($_COOKIE['fuerza_maestra_cookie_user']);
                    $res = setcookie('fuerza_maestra_cookie_user', '', time() - 3600);
                }

                $data->last_login = date("Y-m-d G:i:s"); 
                $data->save();

                return array('status' => 'success','type'=>'redirect','redirect' => $view);
                
            }else{
                return array('status' => 'error','message' => 'Error su contraseña es incorrecta');
            }
        }else{
           return array("status"=>"error","message" =>"El usuario: ".$request["user-name"]." no existe o esta desactivado, verifique que este capturando correctamente su usuario"); 
        }

    }

    public function validate_password($data,$request){
        $pass = $data["password"];
        $char_pass = strlen($pass);
        if($char_pass <= 40){
            $salt = substr($pass, 0, 10);
            $decrypted = $salt . substr(sha1($salt . $request["password"]), 0, -10);
            if($pass == $decrypted){
                return true;
            }else{
                return false;
            }
        }else{
            $decrypted = Crypt::decryptString($pass);
            if($request["password"] == $decrypted){
                return true;
            }else{
                return false;
            }
        }
    }

}
