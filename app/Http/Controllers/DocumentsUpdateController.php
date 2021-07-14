<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Advisers_Documents;
use App\Advisers;
use Illuminate\Support\Facades\Input;

// controlador para actualizar o cargar las imagenes de los asesores
class DocumentsUpdateController extends Controller
{	

	public function store(Request $request){

		if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }

		$user_id = $request["user-id"];

		$files = Input::file();
		$error = 0;
		$success = 0;

		foreach ($files as $name => $file) {
			$ext = explode(".", $file->getClientOriginalName());
			$ext = $ext[count($ext)-1];
			$name_value = str_replace("-", "_", $name);
			$file_name = $user_id."_".$name_value."_".date("Y_m_d").".".$ext;
			$load = $file->move("documents",$file_name);
			if($load){
				$documents = Advisers_Documents::where('user_id', $user_id)->first();
				$documents->$name_value = $file_name;
				$result = $documents->save();
				if($result){
					$success++;
				}else{
					$error++;
				}
			}else{
				$error++;
			}
		}
		if($error > $success){
			$message = $error." archivo(s) con error(es) al cargar.".
						"<p>".$success." archivo(s) cargado(s) exitosamente.</p>";
			return array('status' => "error",'type'=>'result', 
				'message' => $message);
		}else{
			$adviser = Advisers::where('user_id', $user_id)->first();
			if($adviser->agreement_num == "" || $adviser->agreement_num == 0){
				$adviser->status_id = 8;
				$result = $adviser->save();
			}else{
				$result = true;
			}
			
			if($result){
				if($success == 7){
					$message_result = $success.' Archivo(s) cargado(s) exitosamente.'.
						'<p>'.$error.' archivo(s) con error(es) al cargar.</p>';
					$message_alert = 'Ya puedes imprimir el KIT de contratación, no olvides subir el CONTRATO FIRMADO EN "ACTUALIZAR DOCUMENTOS"';
					return array('status' => 'success','type'=>'alert-result', 
					'message_result' => $message_result,'type_alert'=>'warning','title_alert'=>'!AVISO IMPORTANTE¡','message_alert'=>$message_alert);
				}else{
					$message = $success." archivo(s) cargado(s) exitosamente.".
						"<p>".$error." archivo(s) con error(es) al cargar.</p>";
					return array('status' => "success",'type'=>'result', 
					'message' => $message);
				}
				
			}else{
				$message = "Error al actualizar estatus de candidato.";
				return array('status' => "error",'message' => $message);
			}
			
		}
	}
}