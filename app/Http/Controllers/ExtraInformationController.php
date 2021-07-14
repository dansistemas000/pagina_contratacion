<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Advisers;
use App\Users;
use App\Branch_Offices;
use App\Work_Experiences;
use DB;
use App\Http\Controllers\SendEmailController as SendEmail;
// controlador para almacenar la informacion extra del asesor
class ExtraInformationController extends Controller
{	
	function __construct(){
		// funcion para validar session activa
		$this->middleware(function ($request, $next) {
			if(!\Session::get('fuerza_maestra_session_user')){
				return redirect("advisers");
			}
		    return $next($request);
		});
	}

	public function index(){

	}

	public function store(Request $request){

		$response = $this->transaction($request);

		if($response["status"]){

			$branch_office = Branch_Offices::where("id","=",$request["branch-office"])
							->first();

			$data = ["name"=>$request["first-name"]." ".$request["last-name"], 
                    "subject" => 'Proceso de selección - Fuerza Maestra',
                    "email" => $request["email"],
                    "branch_office" => $branch_office["name"],
                    "branch_office_address" => $request["branch-office-address"],
                    "view"=>"emails.selection_process"];
            // controlador para enviar correo electronico
            $send = new SendEmail($data);

            if($send){
            	$message = "Te enviamos un correo electrónico con el siguiente paso para tu proceso de selección.";
				return view("groups.advisers.index",["message" => $message]);
			}else{
				$message = "Error al enviar correo electrónico.";
				return view("groups.advisers.index",["error_message" => $message]);
			}
		}else{
			return view("groups.advisers.index",["error_message" => $response["message"]]);
		}
	}

	public function transaction($request){
        $error = null;
        DB::beginTransaction();
        try {

        	$user = Users::where('id', $request["user-id"])->first();
        	$user->gender = $request["gender"];
        	$user->save();

            $extra = Advisers::where('user_id', $request["user-id"])->first();
			$extra->street = $request["street"];
			$extra->outside_number = $request["outside-number"];
			$extra->inside_number = $request["inside-number"];
			$extra->marital_status = $request["marital-status"];
			$extra->birth_date = $request["birth-date"];
			$extra->birth_place = $request["birth-place"];
			$extra->rfc = $request["rfc"];
			$extra->curp = $request["curp"];
			$extra->nationality = $request["nationality"];
			$extra->size = $request["size"];
			$extra->contact = $request["contact"];
			$extra->status_id = 6;
			$extra->save();

			

			// if($request["work-experience"] == "on"){
			$experience = Work_Experiences::where('user_id', $request["user-id"])->first();

			// $experience->experience = 1;
			$experience->company_name = $request["company-name"];
			$experience->company_tel = $request["company-tel"];
			$experience->company_job = $request["company-job"];
			$experience->company_job_time = $request["company-job-time"];
			if($request["request-reports"] == "on"){
				$experience->request_reports = 1;
			}else{
				$experience->request_reports = 0;
			}
			$experience->parting_reason = $request["parting-reason"];
			if($request["company-name-2"] != ""){
				$experience->company_name_2 = $request["company-name-2"];
				$experience->company_tel_2 = $request["company-tel-2"];
				$experience->company_job_2 = $request["company-job-2"];
				$experience->company_job_time_2 = $request["company-job-time-2"];
				if($request["request-reports-2"] == "on"){
					$experience->request_reports_2 = 1;
				}else{
					$experience->request_reports_2 = 0;
				}
				$experience->parting_reason_2 = $request["parting-reason-2"];
			}

			$experience->save();
				
			// }

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