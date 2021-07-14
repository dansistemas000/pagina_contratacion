<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;
use App\Advisers;
use App\Branch_Offices;
use App\Advisers_Expenses;
use App\Advisers_Documents;
use App\Work_Experiences;
use Illuminate\Support\Facades\Crypt;
use DB;
use App\ES_MX;
use App\Http\Controllers\SendEmailController as SendEmail;
// controlador para registrar asesor
class UserRegisterController extends Controller
{
    private $TOKEN = "IahNIcWPHptdkFjEO0jXTZuHQx45tRAsgyQnfO3Wou0=";
    public $pass;
    public $email;
    public $name;
    private $arrayContact = array('organic_search'=>'Buscadores','paid_search'=>'Buscadores por pago','email_marketing'=>'Marketing por correo electrónico','scial_media'=>'Medios de comunicación social','referrals'=>'Referencias','other_campaigns'=>'Otras campañas','direct_traffic'=>'Tráfico directo','offline'=>'Desconectado','paid_social'=>'Comunicación social pagado');
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($token,$fist_name,$last_name,$phone,$email,$code,$contact = "",$campaign_id = ""){

        if($token != $this->TOKEN){
            $response = array('status' => false, 'message'=>'Token incorrecto');
            return response()->json($response);
        }

        $data_address = ES_MX::get_address($code);

        if(!$data_address){
            $response = array('status' => false, 'message'=>'No existe código postal');
            return response()->json($response);
        }

        if(isset($this->arrayContact[strtolower($contact)])){
            $contact = $this->arrayContact[strtolower($contact)];
        }

        $this->email = trim($email);
        $request["email"]= $this->email;
        $request["branch-offices"] = 106;
        $request["first-name"] = trim($fist_name);
        $request["last-name"] = trim($last_name);
        $request["phone"] = trim($phone);
        $request["colony"] = "";
        $request["postal-code"] = $code;
        $request["state"] = $data_address[0]->state;
        $request["town"] = $data_address[0]->town;
        $state_id["state_id"] = 0;
        $request["sons"] = 0;
        $request["contact"] = trim(strtolower($contact));
        $request["campaign_id"] = trim($campaign_id);
        $request["scholarship"] = "";
        $request["experience"] = "";


        $ccArray= array('berenice.rico@creditomaestro.com','leonardo.cavazos@creditomaestro.com','eric.luna@creditomaestro.com','emmeline.barbosa@creditomaestro.com','francisco.gonzalez@creditomaestro.com','ilse.cordero@creditomaestro.com','hector.garibaldi@creditomaestro.com','jorgeluis.constantino@creditomaestro.com','ericka.montiel@creditomaestro.com');

        $this->pass = $this->create_password($request["first-name"],$request["last-name"],$request["town"]);

        $result = $this->transaction($request);



        if($result["status"]){
            $mainEmail = "Silvia.benitez@creditomaestro.com";
 
            $data = ["name"=>$fist_name." ".$last_name, 
                    "phone" => $phone,
                    "adviserEmail" => $email,
                    "campaign_id" => $campaign_id,
                    "cc" => $ccArray,
                    "subject" => 'Correo de Reclutamiento - Fuerza Maestra',
                    "email" => $mainEmail,
                    "view"=>"emails.adviser_contact"];
            // controlador para enviar correo electronico
            $send_adviser = new SendEmail($data);
        }


        if($result["status"]){
            $response = array('status' => true, 'message'=>'Datos almacenados exitosamente');
        }else{
            $response = array('status' => false, 'message'=>$result["message"]);
        }
        
        return response()->json($response);
    }

     public function store(Request $request)
    {   

        // funcion para generar nueva contraseña
        $this->pass = $this->create_password($request["first-name"],$request["last-name"],$request["town"]);

        $this->email = $request["email"];
        $this->name = $request['first-name'].' '.$request['last-name'];
          
        $response = $this->transaction($request);

        if($response["status"]){

            $data = ["name"=>$this->name, 
                    "user" => $this->email,
                    "pass" => $this->pass,
                    "subject" => 'Correo de Bienvenida - Fuerza Maestra',
                    "email" => $this->email,
                    "view"=>"emails.welcome",
                    "root"=>$request->root()];
            // controlador para enviar correo electronico
            $send_adviser = new SendEmail($data);

            if($send_adviser){

                $branch_office = Branch_Offices::branch_office_email($request["branch-offices"]);

                if($branch_office){

                    $data = ["branch_office"=>$branch_office->branch_office_name, 
                            "name" => $this->name,
                            "phone" => $request["phone"],
                            "adviser_email"=>$this->email,
                            "postal-code"=>$request["postal-code"],
                            "town"=>$request["town"],
                            "state"=>$request["state"],
                            "colony"=>$request["colony"],
                            "experience"=>$request["experience"],
                            "subject" => 'Nuevo candidato registrado - Fuerza Maestra',
                            "email" => $branch_office->email,
                            "view"=>"emails.branch_office_email"
                        ];

                    $send_branch_office = new SendEmail($data); 
                }

                $message ="<p class='congratulations'>¡Felicidades!</p>".
                            "<p>Has iniciado tu proceso para incorporarte ".
                            "a esta gran FUERZA MAESTRA.</p>".
                            "<p>Tu solicitud está en proceso, se enviará a tu ".
                            "correo electrónico el seguimiento de tu ingreso.</p>";

                return array('status' => "success",'type'=>'result', 'message' => $message);
            }else{
                return array('status' => "error", 'message' => "Error al enviar correo al candidato");
            }

        }else{
            return array('status' => "error", 'message' => $response["message"]);
        }
    }

    public function transaction($request){
        $error = null;
        DB::beginTransaction();
        try {
            $response = $this->save_user($request);

            if($response["status"]){
                $user_id = $response["value"];
                $this->save_adviser($request,$user_id);
                DB::commit();
                $status = true;
                $message ="transaction complete"; 
            }else{
                $message = $response["message"];
                $status = false;
            }
            return array('status' => $status, 'message' => $message);
        } catch (\Exception $e) {
            $status = false;
            $message = $e->getMessage();
            DB::rollback();
            return array('status' => $status, 'message' => $message);
        }
    }

    
    public function save_user($request){

        $user = Users::where("username","=",$request["email"])->first();
        
        if($user){
            return array('status' => false, 'message' => 'El usuario: '.
                $request["email"].' ya existe ingrese otro correo electrónico.');
        }

        $state_id = Branch_Offices::where("id","=",$request["branch-offices"])
                                    ->get(['state_id'])->first();
       
        $user = new Users;
        $user->ip_address_register = request()->ip();
        $user->username = $this->email;
        $user->password = Crypt::encryptString($this->pass);
        $user->email = $this->email;
        $user->first_name = $this->str_to_upper($request["first-name"]);
        $user->last_name = $this->str_to_upper($request["last-name"]);
        $user->phone = $request["phone"];
        $user->group_id = 3;
        $user->colony = $request["colony"];
        $user->postal_code = $request["postal-code"];
        $user->state = $request["state"];
        $user->town = $request["town"];
        $user->branch_office_id = $request["branch-offices"];
        $user->state_id = $state_id["state_id"];
        $user->sons = $request["sons"];
        $user->scholarship = $request["scholarship"];
        $user->save();
        return array('status' => true, 'value' => $user->id);  
  
    }

    public function save_adviser($request,$user_id){
        $adviser = new Advisers;
        $adviser->user_id = $user_id;
        $adviser->status_id = 1;
        $adviser->experience = $request["experience"];

        if(isset($request["contact"])){
            $adviser->contact = $request["contact"];
        }
        if(isset($request["campaign_id"])){
            $adviser->campaign_id = $request["campaign_id"];
        }

        $adviser->save();

        $adviser_expenses = new Advisers_Expenses;
        $adviser_expenses->user_id = $user_id;
        $adviser_expenses->save();

        $adviser_documents = new Advisers_Documents;
        $adviser_documents->user_id = $user_id;
        $adviser_documents->save();

        $work_experiences = new Work_Experiences;
        $work_experiences->user_id = $user_id;
        $work_experiences->save();
    }
}