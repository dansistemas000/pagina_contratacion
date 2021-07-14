<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Advisers;
use App\Advisers_Expenses;
use DB;
// controlador para registrar los gastos del asesor
class ExpensesRegisterController extends Controller
{	
	function __construct(){
		// funcion para validar que la session siga activa
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
			return redirect("advisers");
		}else{
			return view("groups.advisers.index",["error_message" => $response["message"]]);
		}

		
	}

	public function transaction($request){
        $error = null;
        DB::beginTransaction();
        try {
            
            $expenses = Advisers_Expenses::where('user_id', $request["user-id"])->first();

          	$expenses->monthly_savings = $request["monthly-savings"];
		  	$expenses->monthly_mortgage = $request["monthly-mortgage"];
		  	$expenses->monthly_dependents_other = $request["monthly-dependents-other"];
		  	$expenses->monthly_maintenance = $request["monthly-maintenance"];
		  	$expenses->monthly_tv = $request["monthly-tv"];
		  	$expenses->inhabitants_home = $request["inhabitants-home"]; 
		  	$expenses->monthly_transport = $request["monthly-transport"];
		  	$expenses->monthly_extra = $request["monthly-extra"];
		  	$expenses->monthly_gasoline = $request["monthly-gasoline"];
		  	$expenses->monthly_predial = $request["monthly-predial"];
		  	$expenses->monthly_phone = $request["monthly-phone"];
		  	$expenses->monthly_light = $request["monthly-light"];
		  	$expenses->monthly_parents = $request["monthly-parents"];
		  	$expenses->monthly_water = $request["monthly-water"];
		  	$expenses->monthly_children = $request["monthly-children"];
		  	$expenses->monthly_gas = $request["monthly-gas"];
		  	$expenses->children_college = $request["children-college"];
		  	$expenses->monthly_foods = $request["monthly-foods"];
		  	$expenses->monthly_spouse = $request["monthly-spouse"];
		  	$expenses->monthly_home_extra = $request["monthly-home-extra"];
		  	$expenses->save();

		  	$adviser = Advisers::where('user_id', $request["user-id"])->first();
		  	$adviser->status_id = 2;
		  	$adviser->save();

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