<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Advisers;
use App\Advisers_Expenses;
use App\Advisers_Documents;
use App\Users;
use App\Work_Experiences;
use DB;
// controlador para eliminar asesor
class AdviserDeleteController extends Controller
{   

    public function index($user_id)
    {   
        if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }

        $response = $this->transaction($user_id);

        if($response["status"]){
            return array('status' => 'success','message' =>"Se elimino candidato exitosamente.");
        }else{
            $message = $response["message"];
            return array('status' => 'error','message' =>$message);
        }
    }

    public function transaction($user_id){
        $error = null;
        DB::beginTransaction();
        try {

            $experience = Work_Experiences::where('user_id', $user_id)->first();
            if($experience != ""){
                $experience->delete();
            }

            $expenses = Advisers_Expenses::where('user_id', $user_id)->first();
            if($expenses != ""){
                $expenses->delete();
            }
            

            $adviser_documents = Advisers_Documents::where('user_id', $user_id)->first();
            if($adviser_documents != ""){
                if(file_exists("documents/".$adviser_documents->birth_certificate) 
                && $adviser_documents->birth_certificate != "")
                    unlink("documents/".$adviser_documents->birth_certificate);
                if(file_exists("documents/".$adviser_documents->ine) 
                    && $adviser_documents->ine != "")
                        unlink("documents/".$adviser_documents->ine);
                if(file_exists("documents/".$adviser_documents->curp) 
                    && $adviser_documents->curp != "")
                        unlink("documents/".$adviser_documents->curp);
                if(file_exists("documents/".$adviser_documents->rfc) 
                    && $adviser_documents->rfc != "")
                        unlink("documents/".$adviser_documents->rfc);
                if(file_exists("documents/".$adviser_documents->proof_address) 
                    && $adviser_documents->proof_address != "")
                        unlink("documents/".$adviser_documents->proof_address);
                if(file_exists("documents/".$adviser_documents->account_status) 
                    && $adviser_documents->account_status != "")
                        unlink("documents/".$adviser_documents->account_status);
                if(file_exists("documents/".$adviser_documents->responsive) 
                    && $adviser_documents->responsive != "")
                        unlink("documents/".$adviser_documents->responsive);

                $adviser_documents->delete();
            }

            $adviser = Advisers::where('user_id', $user_id)->first();
            if($adviser != ""){
                $adviser->delete();
            }
            
            $user = Users::where('id', $user_id)->first();
            if($user != ""){
                $user->delete();
            }

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