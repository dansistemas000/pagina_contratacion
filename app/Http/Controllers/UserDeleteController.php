<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;
use DB;
// controlador para eliminar usuario
class UserDeleteController extends Controller
{   

    public function index($user_id)
    {   
        if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }

        $response = $this->transaction($user_id);

        if($response["status"]){
            return array('status' => 'success','message' =>"Se elimino usuario exitosamente.");
        }else{
            $message = $response["message"];
            return array('status' => 'error','message' =>$message);
        }
    }

    public function transaction($user_id){
        $error = null;
        DB::beginTransaction();
        try {

            $user = Users::where('id', $user_id)->first();
            $user->delete();
        
            
            DB::commit();   
            return array('status' => true, 'message' => "Datos Almacenados exitosamente");

        } catch (\Exception $e) {
            $status = false;
            $message = $e->getMessage();
            DB::rollback();
            return array('status' => $status, 'message' => $message);
        }
    }
}