<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Advisers;
use App\Users;
use App\Advisers_Expenses;
use App\Work_Experiences;
use DB;
use App\Http\Controllers\SendEmailController as SendEmail;
// controlador para actualizar todos los datos del asesor
class AdviserUpdateController extends Controller
{	


	public function store(Request $request){

		if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }

        $user = Users::where("username","=",$request["email"])
        		->where("id","!=",$request["user-id"])->first();
        // verifica que nombre de usuario no exista ya que debe de ser unico
        if($user){
        	return array('status' => "error","message" => 'El usuario: '.
              			$request["email"].' ya existe ingrese otro correo electrónico.');
        }

        $adviser_data = Advisers::select("agreement_num")->
        		where("user_id","=",$request["user-id"])->first();

		$response = $this->transaction($request);

		if($response["status"]){

			$message_email = "";
			
			if(($adviser_data->agreement_num == "" || $adviser_data->agreement_num == 0) && ($request["agreement-num"] != "" || $request["agreement-num"] != 0)){
				$data = ["name"=>$request["first-name"]." ".$request["last-name"], 
                    	"agreement_num" => $request["agreement-num"],
                    	"subject" => 'Bienvenido a Credito Maestro - Fuerza Maestra',
                    	"email" => $request["email"],
                    	"view"=>"emails.final_welcome"];
            	// controlador para enviar correo electronico
            	$send_adviser = new SendEmail($data);
            	if($send_adviser){
            		$message_email = "<br>Correo enviado al asesor exitosamente.";	
            	}else{
            		$message_email = "<br>Error al enviar correo al asesor. Reportelo al área de sistemas.";
            	}
			}
            $message = "Datos actualizados exitosamente.".$message_email;
			return array('status' => "success",'type'=>'result',
				'update'=>true, 'message' => $message);
		}else{
			return array('status' => "error","message" => $response["message"]);
		}
	
	}

	public function transaction($request){
        $error = null;
        DB::beginTransaction();
        try {

        	$user = Users::where('id', $request["user-id"])->first();
        	// si existe variable actualiza si no, no lo actualiza
        	if(isset($request["first-name"])) 
        		$user->first_name = $this->str_to_upper($request["first-name"]);
        	if(isset($request["last-name"])) 
        		$user->last_name = $this->str_to_upper($request["last-name"]);
        	if(isset($request["phone"])) $user->phone = $request["phone"];
        	if(isset($request["email"])) $user->email = $request["email"];
        	if(isset($request["email"])) $user->username = $request["email"];
        	if(isset($request["gender"])) $user->gender = $request["gender"];
        	if(isset($request["colony"])) $user->colony = $request["colony"];
        	if(isset($request["postal-code"])) $user->postal_code = $request["postal-code"];
        	if(isset($request["state"])) $user->state = $request["state"];
        	if(isset($request["town"])) $user->town = $request["town"];
        	if(isset($request["branch-office"])) 
        		$user->branch_office_id = $request["branch-office"];
        	if(isset($request["sons"])) $user->sons = $request["sons"];
        	if(isset($request["scholarship"])) $user->scholarship = $request["scholarship"];
        	$user->save();

        	$adviser = Advisers::where('user_id', $request["user-id"])->first();
			if(isset($request["street"])) $adviser->street = $request["street"];
			if(isset($request["outside-number"])) 
				$adviser->outside_number = $request["outside-number"];
			if(isset($request["inside-number"])) $adviser->inside_number = $request["inside-number"];
			if(isset($request["marital-status"])) 
				$adviser->marital_status = $request["marital-status"];
			if(isset($request["birth-date"])) $adviser->birth_date = $request["birth-date"];
			if(isset($request["birth-place"])) $adviser->birth_place = $request["birth-place"];
			if(isset($request["rfc"])) $adviser->rfc = $request["rfc"];
			if(isset($request["curp"])) $adviser->curp = $request["curp"];
			if(isset($request["nationality"])) $adviser->nationality = $request["nationality"];
			if(isset($request["size"])) $adviser->size = $request["size"];
			if(isset($request["contact"])) $adviser->contact = $request["contact"];
			if(isset($request["experience"])) $adviser->experience = $request["experience"];
			if(isset($request["status_id"])) $adviser->status_id = $request["status_id"];
			if(isset($request["agreement-num"])){
				$adviser->agreement_num = $request["agreement-num"];
				if($request["agreement-num"] != "" && $request["agreement-num"] != 0){
					$adviser->status_id = 7;
				}
			}
			$adviser->save();

			$expenses = Advisers_Expenses::where('user_id', $request["user-id"])->first();
          	if(isset($request["monthly-savings"])) 
          		$expenses->monthly_savings = $request["monthly-savings"];
		  	if(isset($request["monthly-mortgage"])) 
		  		$expenses->monthly_mortgage = $request["monthly-mortgage"];
		  	if(isset($request["monthly-dependents-other"])) 
		  		$expenses->monthly_dependents_other = $request["monthly-dependents-other"];
		  	if(isset($request["monthly-maintenance"])) 
		  		$expenses->monthly_maintenance = $request["monthly-maintenance"];
		  	if(isset($request["monthly-tv"])) $expenses->monthly_tv = $request["monthly-tv"];
		  	if(isset($request["inhabitants-home"])) 
		  		$expenses->inhabitants_home = $request["inhabitants-home"]; 
		  	if(isset($request["monthly-transport"])) 
		  		$expenses->monthly_transport = $request["monthly-transport"];
		  	if(isset($request["monthly-extra"])) 
		  		$expenses->monthly_extra = $request["monthly-extra"];
		  	if(isset($request["monthly-gasoline"])) 
		  		$expenses->monthly_gasoline = $request["monthly-gasoline"];
		  	if(isset($request["monthly-predial"])) 
		  		$expenses->monthly_predial = $request["monthly-predial"];
		  	if(isset($request["monthly-phone"])) 
		  		$expenses->monthly_phone = $request["monthly-phone"];
		  	if(isset($request["monthly-light"])) 
		  		$expenses->monthly_light = $request["monthly-light"];
		  	if(isset($request["monthly-parents"])) 
		  		$expenses->monthly_parents = $request["monthly-parents"];
		  	if(isset($request["monthly-water"])) 
		  		$expenses->monthly_water = $request["monthly-water"];
		  	if(isset($request["monthly-children"])) 
		  		$expenses->monthly_children = $request["monthly-children"];
		  	if(isset($request["monthly-gas"])) $expenses->monthly_gas = $request["monthly-gas"];
		  	if(isset($request["children-college"])) 
		  		$expenses->children_college = $request["children-college"];
		  	if(isset($request["monthly-foods"])) 
		  		$expenses->monthly_foods = $request["monthly-foods"];
		  	if(isset($request["monthly-spouse"])) 
		  		$expenses->monthly_spouse = $request["monthly-spouse"];
		  	if(isset($request["monthly-home-extra"])) 
		  		$expenses->monthly_home_extra = $request["monthly-home-extra"];
		  	$expenses->save();

		  	$experience = Work_Experiences::where('user_id', $request["user-id"])->first();

		  	// if(isset($request["work-experience"]) && $request["work-experience"] == "on") {
		  	// 	$experience->experience = 1;
		  	// }else{
		  	// 	$experience->experience = 0;
		  	// }
			if(isset($request["company-name"]))
				$experience->company_name = $request["company-name"];
			if(isset($request["company-tel"]))
				$experience->company_tel = $request["company-tel"];
			if(isset($request["company-job"]))
				$experience->company_job = $request["company-job"];
			if(isset($request["company-job-time"]))
			$experience->company_job_time = $request["company-job-time"];
			if(isset($request["request-reports"])){
				$experience->request_reports = 1;
			}else{
				$experience->request_reports = 0;
			}
			if(isset($request["parting-reason"]))
			$experience->parting_reason = $request["parting-reason"];
			if(isset($request["company-name-2"]))
				$experience->company_name_2 = $request["company-name-2"];
			if(isset($request["company-tel-2"]))
				$experience->company_tel_2 = $request["company-tel-2"];
			if(isset($request["company-job-2"]))
				$experience->company_job_2 = $request["company-job-2"];
			if(isset($request["company-job-time-2"]))
				$experience->company_job_time_2 = $request["company-job-time-2"];
			if(isset($request["request-reports-2"])){
				$experience->request_reports_2 = 1;
			}else{
				$experience->request_reports_2 = 0;
			}
			if(isset($request["parting-reason-2"]))
				$experience->parting_reason_2 = $request["parting-reason-2"];
			
			$experience->save();
        	
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