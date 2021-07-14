<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Advisers extends Model
{
    protected $table = "advisers";
    protected $primaryKey = "id";
    // funcion para obtener todos los datos del asesor por medio de su id
    static function information_advisers($id){
	    $data = DB::table("users as u")
	            ->join("advisers as a", "a.user_id", "=", "u.id")
	            ->join("advisers_expenses as ae", "ae.user_id", "=", "u.id")
	            ->join("branch_offices as bo", "u.branch_office_id", "=", "bo.id")
	            ->join("work_experiences as we", "we.user_id", "=", "u.id")
	            ->leftjoin("states as s", "s.id", "=", "bo.state_id")
	            ->leftjoin("districts as d", "d.id", "=", "s.district_id")
	            ->join("advisers_status as as", "as.id", "=", "a.status_id")
	            ->select("a.status_id","as.name as status","u.first_name","u.last_name",
	            		"u.phone","a.promotions",DB::raw("CASE a.promotions
    						WHEN 'Automovil' THEN 'car_promotion.jpg'
    						WHEN 'Seguro médico' THEN 'health_promotion.jpg'
    						WHEN 'Vivienda' THEN 'home_promotion.jpg'
    						WHEN 'Dinero' THEN 'money_promotion.jpg'
    						WHEN 'Ahorro' THEN 'saving_promotion.jpg'
    						WHEN 'Educación' THEN 'education_promotion.jpg'
							END as 'promotion_img'"),"a.agreement_num",
	            		"u.postal_code", "u.state","u.town","u.colony","a.experience","u.sons","u.scholarship",
	            		"u.email","ae.monthly_spouse","ae.monthly_mortgage",
	            		"ae.children_college","ae.inhabitants_home","ae.monthly_children",
	            		"ae.monthly_maintenance","ae.monthly_parents",
	            		"ae.monthly_home_extra","ae.monthly_dependents_other",
	            		"ae.monthly_foods","ae.monthly_gas","ae.monthly_water",
	            		"ae.monthly_light","ae.monthly_phone","ae.monthly_predial",
	            		"ae.monthly_gasoline","ae.monthly_transport", 
						"ae.monthly_tv","ae.monthly_extra","ae.monthly_savings", 
						"bo.name as branch_office","s.name as branch_office_state",
						"d.name as district","we.experience as work_experience","we.company_name",
						"we.company_tel","we.company_job","we.company_job_time",
						"we.request_reports","we.parting_reason","we.company_name_2",
						"we.company_tel_2","we.company_job_2",
						"we.company_job_time_2","we.request_reports_2",
						"we.parting_reason_2",
						"bo.address as branch_office_address",
						"a.street","a.outside_number","a.inside_number","u.gender",
						"a.marital_status","a.birth_date","a.birth_place","a.rfc","a.curp",
						"a.nationality","a.size","a.contact")
	            ->where("u.id","=",$id)->first();

	    return $data;
    }
    // funcion para obtener a los asesores que pertenecen a alguna sucursal por medio del id de sucursal
    static function branch_offices_advisers($branch_office_id,$year){
	    $data = DB::table("users as u")
	            ->join("advisers as a", "a.user_id", "=", "u.id")
	            ->join("branch_offices as bo", "u.branch_office_id", "=", "bo.id")
	            ->join("advisers_status as as", "as.id", "=", "a.status_id")
	           ->select("u.id as user_id",
	           			DB::raw("DATE_FORMAT(u.created_at, '%d-%m-%Y %H:%i') as 'Fecha Registro'"),
	            	    DB::raw("CONCAT(u.first_name,' ',u.last_name) as Candidato"),
	            		"u.phone as Teléfono",
	            		"as.name as Estatus","a.agreement_num as No. Asesor")
	           	->orderby("u.id","desc")
	            ->where("u.group_id","=","3")
	            ->where("u.branch_office_id","=",$branch_office_id)->whereYear("u.created_at","=",$year)
	            ->get()->toArray();

	    return $data;
    }
    // funcion para obtener a los asesores que pertenecen a algun estado por medio del id de estado
    static function states_advisers($state_id,$year){
	    $data = DB::table("users as u")
	            ->join("advisers as a", "a.user_id", "=", "u.id")
	            ->join("branch_offices as bo", "u.branch_office_id", "=", "bo.id")
	            ->join("advisers_status as as", "as.id", "=", "a.status_id")
	            ->leftjoin("states as st", "st.id", "=", "bo.state_id")
	           	->select("u.id as user_id",
	           			DB::raw("DATE_FORMAT(u.created_at, '%d-%m-%Y %H:%i') as 'Fecha Registro'"),
	            	    DB::raw("CONCAT(u.first_name,' ',u.last_name) as Candidato"),
	            		"u.phone as Teléfono","st.name as Estado","bo.name as Sucursal",
	            		"as.name as Estatus",
	            		"a.agreement_num as No. Asesor")
	           	->orderby("u.id","desc")
	           	->where("u.group_id","=","3")
	            ->where("bo.state_id","=",$state_id)->whereYear("u.created_at","=",$year)
	            ->get()->toArray();

	    return $data;
    }
    // funcion para obtener a los asesores que pertenecen a algun distrito por medio del id del distrito
    static function districts_advisers($district_id,$year){
    	if(!is_array($district_id)){
    		$district_id = array($district_id);
    	}
	    $data = DB::table("users as u")
	            ->join("advisers as a", "a.user_id", "=", "u.id")
	            ->join("branch_offices as bo", "u.branch_office_id", "=", "bo.id")
	            ->join("advisers_status as as", "as.id", "=", "a.status_id")
	            ->leftjoin("states as st", "st.id", "=", "bo.state_id")
	            ->leftjoin("districts as d", "d.id", "=", "st.district_id")
	           	->select("u.id as user_id",
	           			DB::raw("DATE_FORMAT(u.created_at, '%d-%m-%Y %H:%i') as 'Fecha Registro'"),
	            	    DB::raw("CONCAT(u.first_name,' ',u.last_name) as Candidato"),
	            		"u.phone as Teléfono","d.name as Distrito","st.name as Estado",
	            		"bo.name as Sucursal",
	            		"as.name as Estatus","a.agreement_num as No. Asesor",DB::raw("CONCAT(a.campaign_id,' - ',a.contact) as Campaña"))
	           	->orderby("u.id","desc")
	           	->where("u.group_id","=","3")
	           	->whereIn("st.district_id", $district_id)->whereYear("u.created_at","=",$year)
	            ->get()->toArray();

	    return $data;
    }
    // funcion para obtener a los asesores que pertenecen a alguna subdireccion por medio del id de subdireccion
    static function sub_management_advisers($sub_management_id,$year){
	    $data = DB::table("users as u")
	            ->join("advisers as a", "a.user_id", "=", "u.id")
	            ->join("branch_offices as bo", "u.branch_office_id", "=", "bo.id")
	            ->join("advisers_status as as", "as.id", "=", "a.status_id")
	            ->leftjoin("states as st", "st.id", "=", "bo.state_id")
	            ->leftjoin("districts as d", "d.id", "=", "st.district_id")
	            ->join("sub_managements as sm", "sm.id", "=", "d.sub_management_id")
	           ->select("u.id as user_id",
	           			DB::raw("DATE_FORMAT(u.created_at, '%d-%m-%Y %H:%i') as 'Fecha Registro'"),
	            	    DB::raw("CONCAT(u.first_name,' ',u.last_name) as Candidato"),
	            		"u.phone as Teléfono",
	            		"d.name as Distrito","st.name as Estado","bo.name as Sucursal",
	            		"as.name as Estatus",
	            		"a.agreement_num as No. Asesor")
	           	->orderby("u.id","desc")
	           	->where("u.group_id","=","3")
	            ->where("d.sub_management_id","=",$sub_management_id)->whereYear("u.created_at","=",$year)
	            ->get()->toArray();

	    return $data;
    }
    // funcion para obtener a todos los asesores
    static function all_advisers($year){
	    $data = DB::table("users as u")
	            ->join("advisers as a", "a.user_id", "=", "u.id")
	            ->join("branch_offices as bo", "u.branch_office_id", "=", "bo.id")
	            ->join("advisers_status as as", "as.id", "=", "a.status_id")
	            ->leftjoin("states as st", "st.id", "=", "bo.state_id")
	            ->leftjoin("districts as d", "d.id", "=", "st.district_id")
	           ->select("u.id as user_id",
	           			DB::raw("DATE_FORMAT(u.created_at, '%d-%m-%Y %H:%i') as 'Fecha Registro'"),
	            	    DB::raw("CONCAT(u.first_name,' ',u.last_name) as Candidato"),
	            		"u.phone as Teléfono",
	            		"d.name as Distrito","st.name as Estado","bo.name as Sucursal",
	            		"as.name as Estatus",
	            		"a.agreement_num as No. Asesor",DB::raw("CONCAT(a.campaign_id,' - ',a.contact) as Campaña"))
	           	->orderby("u.id","desc")
	           	->where("u.group_id","=","3")->whereYear("u.created_at","=",$year)
	            ->get()->toArray();

	    return $data;
    }
    // funcion para obtener a los asesores dependiendo el tipo de grupo para llenar la filla que se modifique de la tabla
    static function row_adviser($user_id,$group_id){
    	switch ($group_id) {
    		case 16: // Sub-Director
    		$select = "DATE_FORMAT(u.created_at, '%d-%m-%Y %H:%i') as 'Fecha Registro',".
	    	"CONCAT(u.first_name,' ',u.last_name) as Candidato,u.phone as Teléfono,".
	    	"d.name as Distrito,st.name as Estado,".
	    	"bo.name as Sucursal,as.name as Estatus,".
	    	"a.agreement_num as 'No. Asesor'";
    		break;
    		case 17: // administrador
    		$select = "DATE_FORMAT(u.created_at, '%d-%m-%Y %H:%i') as 'Fecha Registro',".
	    	"CONCAT(u.first_name,' ',u.last_name) as Candidato,u.phone as Teléfono,".
	    	"d.name as Distrito,st.name as Estado,".
	    	"bo.name as Sucursal,as.name as Estatus,".
	    	"a.agreement_num as 'No. Asesor',CONCAT(a.campaign_id,' - ',a.contact) as Campaña";
    		break;
    		case 4: // Dirección
    		$select = "DATE_FORMAT(u.created_at, '%d-%m-%Y %H:%i') as 'Fecha Registro',".
	    	"CONCAT(u.first_name,' ',u.last_name) as Candidato,u.phone as Teléfono,".
	    	"d.name as Distrito,st.name as Estado,".
	    	"bo.name as Sucursal,as.name as Estatus,".
	    	"a.agreement_num as 'No. Asesor'";
    		break;
    		case 2: // cordinador movil
    		$select = "DATE_FORMAT(u.created_at, '%d-%m-%Y %H:%i') as 'Fecha Registro',".
	    	"CONCAT(u.first_name,' ',u.last_name) as Candidato,u.phone as Teléfono,".
	    	"d.name as Distrito,st.name as Estado,".
	    	"bo.name as Sucursal,as.name as Estatus,".
	    	"a.agreement_num as 'No. Asesor'";
    		break;
    		case 19: // coordinador
    		$select = "DATE_FORMAT(u.created_at, '%d-%m-%Y %H:%i') as 'Fecha Registro',".
	    	"CONCAT(u.first_name,' ',u.last_name) as Candidato,u.phone as Teléfono,".
	    	"as.name as Estatus,".
	    	"a.agreement_num as 'No. Asesor'";
    		break;
    		case 20: // supervisor estatal
    		$select = "DATE_FORMAT(u.created_at, '%d-%m-%Y %H:%i') as 'Fecha Registro',".
	    	"CONCAT(u.first_name,' ',u.last_name) as Candidato,u.phone as Teléfono,".
	    	"st.name as Estado,bo.name as Sucursal,".
	    	"as.name as Estatus,".
	    	"a.agreement_num as 'No. Asesor'";
    		break;
    		case 21: //supervisor distrital
    		$select = "DATE_FORMAT(u.created_at, '%d-%m-%Y %H:%i') as 'Fecha Registro',".
	    	"CONCAT(u.first_name,' ',u.last_name) as Candidato,u.phone as Teléfono,".
	    	"d.name as Distrito,st.name as Estado,".
	    	"bo.name as Sucursal,as.name as Estatus,".
	    	"a.agreement_num as 'No. Asesor',CONCAT(a.campaign_id,' - ',a.contact) as Campaña";
    		break;
    		case 1: //administrador de documentos
    		$select = "DATE_FORMAT(u.created_at, '%d-%m-%Y %H:%i') as 'Fecha Registro',".
	    	"CONCAT(u.first_name,' ',u.last_name) as Candidato,u.phone as Teléfono,".
	    	"d.name as Distrito,st.name as Estado,".
	    	"bo.name as Sucursal,as.name as Estatus,".
	    	"a.agreement_num as 'No. Asesor'";
    		break;
    	}
	    $data = DB::table("users as u")
	            ->join("advisers as a", "a.user_id", "=", "u.id")
	            ->join("branch_offices as bo", "u.branch_office_id", "=", "bo.id")
	            ->join("advisers_status as as", "as.id", "=", "a.status_id")
	            ->leftjoin("states as st", "st.id", "=", "bo.state_id")
	            ->leftjoin("districts as d", "d.id", "=", "st.district_id")
	            ->select(DB::raw($select))
	           	->where("u.id","=",$user_id)
	            ->first();
	    return $data;
    }
}