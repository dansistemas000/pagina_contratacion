<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Advisers;
use App\Permissions;
use App\Branch_Offices;
use App\Users;
use App\Sub_Managements;
use App\States;
use App\Districts;
use App\Groups;
use App\Users_Districts;
use App\ES_MX;
use Illuminate\Support\Facades\Crypt;


Route::get('/', function () {
    return view('index.index');

});

Route::get('ENCRIPT_PASS/{pass}/', function ($pass) {
	$data = Crypt::encryptString($pass);
	return $data;
});

Route::get('DECRIPT_PASS/{pass}/', function ($pass) {
	$data = Crypt::decryptString($pass);
	return $data;
});

Route::resource('address_search/{code}/', 'SearchAddressController');

Route::resource('get_branch_offices/{postal_code?}/', 'BranchOfficesController');

Route::get('branch_office_id/{branch_office_id}/', function ($branch_office_id) {
	$data = Branch_Offices::get_Branch_offices_data($branch_office_id);
	return (Array)$data;
});

Route::get('get_sub_managements', function () {
	$data = Sub_Managements::where("active","=",1)->select("id","name")->get()->toArray();
	return (Array)$data;
});

Route::get('get_states', function () {
	$data = States::where("active","=",1)->select("id","name")->get()->toArray();
	return (Array)$data;
});

Route::get('get_districts', function () {
	$data = Districts::where("active","=",1)->select("id","name")->get()->toArray();
	return (Array)$data;
});

Route::get('get_groups', function () {
	$data = Groups::where("active","=",1)->whereNotIn("id",array(3))->select("id","name")
	->get()->toArray();
	return (Array)$data;
});

Route::resource('get_status', 'AdvisersStatusController');

Route::resource('user_register', 'UserRegisterController');

Route::get('login', function () {
    return view('login.index');
});

Route::resource('auth_login', 'Auth\LoginController');

Route::get('view_forgot_password', function () {
    return view('login.forgot_password');
});

Route::get('view_login', function () {
    return view('login.login');
});

Route::resource('forgot_password', 'Auth\ForgotPasswordController');

Route::get('logout', function () {
	\Session::forget('fuerza_maestra_session_user');
    return view('index.index');
});


Route::get('advisers', function () {
	$session = \Session::get('fuerza_maestra_session_user');
	if(isset($session)){
		if($session["group_id"] == 3){
			return view('groups.advisers.index');
		}else{
			return view('index.index',["close_session" => true]);
		}
	}else{
		return view('index.index',["close_session" => true]);
	}
});

Route::post('advisers', function () {
	$session = \Session::get('fuerza_maestra_session_user');
	if(isset($session)){
		if($session["group_id"] == 3){
			return view('groups.advisers.index');
		}else{
			return view('index.index',["close_session" => true]);
		}
	}else{
		return view('index.index',["close_session" => true]);
	}
});

Route::resource('expenses_register', 'ExpensesRegisterController');

Route::resource('promotions_register', 'PromotionsRegisterController');

Route::resource('extra_info_register', 'ExtraInformationController');



Route::get('modal_view/{view}/{data}/{name?}/', function ($view,$id,$name = null) {
	$session = \Session::get('fuerza_maestra_session_user');

	if(isset($session)){
		switch ($view) {
			case 'show_request':
				$data_advisers = Advisers::information_advisers($id);
				$permissions = Permissions::where("group_id","=",$session["group_id"])->first();

				return view('groups.adviser_info',
					["data_advisers" => $data_advisers,
					 "user_id"=>$id,
					 "session"=>$session,
					 "permissions"=>$permissions]);
			break;
			case 'load_documents':
				$data_advisers = Advisers::information_advisers($id);
				if($data_advisers->status_id != 6 && $data_advisers->status_id != 7 && 
					$data_advisers->status_id != 8){
					$message = "No se pueden cargar los documentos ya que el candidato debe tener alguno de los siguientes estatus: (Pendiente de Documentación o Pendiente de Contratación o Contratado).";
					return view('groups.modal_error',
								["message"=>$message]);
				}else{
					return view('groups.advisers.documents',
					["user_id"=>$id,"name"=>$name,"session"=>$session]);
				}
			break;
			case 'print_kit':
				$data_advisers = Advisers::information_advisers($id);
				if($data_advisers->status_id != 8 && $data_advisers->status_id != 7){
					$message = "No se puede imprimir kit de contratación del candidato porque debe tener estatus Pendiente de contratación o Contratado.";
					return view('groups.modal_error',
								["message"=>$message]);
				}elseif($data_advisers->birth_date == "0000-00-00" || $data_advisers->birth_date == "" || $data_advisers->rfc == "" || 
						$data_advisers->curp == "" || $data_advisers->nationality == ""){
					$message = "No se puede imprimir kit de contratación del candidato porque debe llenar los datos: (Fecha de Nacimiento, RFC, CURP y Nacionalidad).";
					return view('groups.modal_error',
								["message"=>$message]);
				}else{
					return view('groups.advisers.kit',
								["user_id"=>$id,
					 			"name"=>$name,
					 			"session"=>$session]);
				}
			break;
			case 'user_update':
				$user_data = Users::users_data($id);
				$district_ids = "";
				if($user_data->group_id == 1){
					$users_districts = Users_Districts::get_users_districts($id);
					foreach ($users_districts as $value) {
						if($district_ids == ""){
							$district_ids.= $value->district_id;
						}else{
							$district_ids.= " ".$value->district_id;
						}
					}
					return view('groups.users.user_data',["user_data"=>$user_data,
										"district_ids"=>$district_ids]);
				}else{
					return view('groups.users.user_data',["user_data"=>$user_data,
										"district_ids"=>$district_ids]);
				}
			break;
			case 'branch_office_update':
				$branch_office_data = Branch_Offices::branch_office_data($id);
				return view('groups.branch_offices.branch_office_data',["branch_office_data"=>$branch_office_data]);
			break;
			case 'colony_update':
				$colony_data = ES_MX::get_colony($id);
				return view('colonies.colony_update',["colony_data"=>$colony_data]);
			break;
		}
	}else{
		return array('session_close' => true,'redirect'=>'admin');
	}
});


Route::resource('documents_update', 'DocumentsUpdateController');

Route::resource('adviser_update', 'AdviserUpdateController');

Route::resource('adviser_rejected/{user_id}/', 'AdviserRejectedController');

Route::resource('add_training/{user_id}/', 'AddTrainingController');

Route::resource('add_converted/{user_id}/', 'AddConvertedController');

Route::resource('adviser_delete/{user_id}/', 'AdviserDeleteController');

Route::resource('user_delete/{user_id}/', 'UserDeleteController');

Route::resource('branch_office_delete/{branch_office_id}/', 'BranchOfficeDeleteController');

Route::resource('pass_reset/{user_id}/', 'PassResetController');


Route::resource('pass_resend/{user_id}/', 'PassResendController');


Route::resource('print_kit/{type}/{user_id}/', 'PrintKitController');

Route::resource('download', 'DownloadController');

Route::get('admin/{advisers_table?}/{year?}', function ($advisers_table = null, $year = null) {
	if($year == null){
		$year = date('Y');
	}
	$session = \Session::get('fuerza_maestra_session_user');
	if(isset($session)){
		$permissions = Permissions::where("group_id","=",$session["group_id"])->first();

		switch($session["group_id"]){
			case 1:
				$district_ids = [];
				$users_districts = Users_Districts::get_users_districts($session["user_id"]);
				foreach ($users_districts as $value) {
					array_push($district_ids,$value->district_id);
				}
				$data_advisers = Advisers::districts_advisers($district_ids,$year);
        	break;
        	case 2:
        		$data_advisers = Advisers::all_advisers($year);
        	break;
	        case 17:
	            $data_advisers = Advisers::all_advisers($year);
	        break;
	        case 4:
	            $data_advisers = Advisers::all_advisers($year);
	        break;
	        case 19:
	            $data_advisers = Advisers::branch_offices_advisers($session["branch_office_id"],$year);
	        break;
	        case 16:
	            $data_advisers = Advisers::sub_management_advisers($session["sub_management_id"],$year);
	        break;
	        case 20:
	            $data_advisers = Advisers::states_advisers($session["state_id"],$year);
	        break;
	        case 21:
	            $data_advisers = Advisers::districts_advisers($session["district_id"],$year);
	        break;
	    }
	    if($advisers_table){
	    	return view('groups.advisers_table',
					["permissions"=>$permissions,"data_advisers"=>$data_advisers,"year"=>$year]);
	    }else{
	    	return view('groups.index',["permissions"=>$permissions,
			"data_advisers"=>$data_advisers,"session"=>$session]);
	    }
	}else{
		if($advisers_table){
			return array('session_close' => true,'redirect'=>'admin');
		}else{
			return view('index.index',["close_session" => true]);
		}
		
	}
});

Route::get('users_table', function () {

	$session = \Session::get('fuerza_maestra_session_user');

	if(isset($session)){
		$data_users = Users::users_groups();
		return view('groups.users.users_table',
					["data_users"=>$data_users]);
	}else{
		return array('session_close' => true,'redirect'=>'admin');
	}
});

Route::resource('user_active/{id}/{value}/{text}/', 'UserActiveController');

Route::resource('branch_office_active/{id}/{value}/{text}/', 'BranchOfficeActiveController');

Route::resource('user_update', 'UserUpdateController');

Route::resource('branch_office_update', 'BranchOfficeUpdateController');

Route::resource('change_pass', 'ChangePassController');

Route::get('user_add', function () {
	$session = \Session::get('fuerza_maestra_session_user');
	if(isset($session)){
		return view('groups.users.user_add');
	}else{
		return array('session_close' => true,'redirect'=>'admin');
	}
});

Route::get('branch_office_add', function () {
	$session = \Session::get('fuerza_maestra_session_user');
	if(isset($session)){
		return view('groups.branch_offices.branch_office_add');
	}else{
		return array('session_close' => true,'redirect'=>'admin');
	}
});

Route::resource('user_insert', 'UserInsertController');

Route::resource('branch_office_insert', 'BranchOfficeInsertController');

Route::get('permission_add', function () {
	$session = \Session::get('fuerza_maestra_session_user');
	if(isset($session)){
		$data = Groups::where("active","=",1)->whereNotIn("id",array(3))->select("id","name")
	->get();
		return view('groups.users.permission_add',["groups"=>$data]);
	}else{
		return array('session_close' => true,'redirect'=>'admin');
	}
});

Route::get('get_permission/{group_id}/', function ($group_id) {
	$session = \Session::get('fuerza_maestra_session_user');
	if(isset($session)){
		$data = Permissions::where("active","=",1)->where("group_id","=",$group_id)
				->first()->toArray();
		return view('groups.users.permission_form',["permissions"=>$data]);
	}else{
		return array('session_close' => true,'redirect'=>'admin');
	}
});

Route::resource('permissions_update', 'PermissionsUpdateController');

Route::get('branch_offices_table', function () {

	$session = \Session::get('fuerza_maestra_session_user');

	if(isset($session)){
		$data_branch_offices = Branch_Offices::branch_offices_all();
		return view('groups.branch_offices.branch_offices_table',
					["data_branch_offices"=>$data_branch_offices]);
	}else{
		return array('session_close' => true,'redirect'=>'admin');
	}
});

Route::resource('row_update/{type}/{id}/', 'RowUpdateTableController');

Route::resource('row_add/{type}/{id}/', 'RowAddTableController');

Route::get('stadistics_table', function () {

	$session = \Session::get('fuerza_maestra_session_user');

	if(isset($session)){
		$stadistics_data = Branch_Offices::branch_offices_stadistics($session);
		return view('groups.branch_offices.stadistics_table',
					["stadistics_data"=>$stadistics_data]);
	}else{
		return array('session_close' => true,'redirect'=>'admin');
	}
});

Route::get('organization_table', function () {

	$session = \Session::get('fuerza_maestra_session_user');

	if(isset($session)){
		$organization_data = Branch_Offices::branch_offices_organization();
		return view('groups.branch_offices.organization_table',
					["organization_data"=>$organization_data]);
	}else{
		return array('session_close' => true,'redirect'=>'admin');
	}
});

Route::get('colonies_admin', function () {

	$session = \Session::get('fuerza_maestra_session_user');
	if(isset($session)){
		return view('colonies.index');
	}else{
		return array('session_close' => true,'redirect'=>'admin');
	}
});

Route::get('get_colonies/{postal_code}/', function ($postal_code) {

	$session = \Session::get('fuerza_maestra_session_user');
	if(isset($session)){
		$colonies = ES_MX::get_address($postal_code);
		return view('colonies.colonies_table',["colonies"=>$colonies]);
	}else{
		return array('session_close' => true,'redirect'=>'admin');
	}
});

Route::post('add_colony', 'ColonyController@insert');

Route::get('colony_delete/{colony_id}/', 'ColonyController@delete');

Route::post('colony_update', 'ColonyController@update');

Route::get('api/{token}/{fist_name}/{last_name}/{phone}/{email}/{code}/{contact?}/{campaign_id?}', 'UserRegisterController@index');


