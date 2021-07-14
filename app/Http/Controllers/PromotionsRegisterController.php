<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Advisers;
use DB;
// controlador para registrar la promocion del asesor
class PromotionsRegisterController extends Controller
{	
	function __construct(){
		// funcion para validar session
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
			return view("groups.advisers.index",["conventions" => true]);
		}else{
			return view("groups.advisers.index",["error_message" => $response["message"]]);
		}
	}

	public function transaction($request){
        $error = null;
        DB::beginTransaction();
        try {
            $promotion = Advisers::where('user_id', $request["user-id"])->first();
			$promotion->promotions = $request["promotions"];
			$promotion->status_id = 10;
			$promotion->save();

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