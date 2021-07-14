<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    // funcion para obtener a todos los usuario expeto el perfil administrador y asesor
    static function users_groups(){
	    $data = DB::table("users as u")
	    				->join("groups as gr","gr.id","=","u.group_id")
	            		->whereNotIn("u.group_id",array(17,3))
						->select("u.id as user_id","u.first_name as Nombre","u.last_name as Apellidos",
								"u.email as Correo Electrónico","gr.name as Grupo",
								"u.active as Estatus")->get()->toArray();

	    return $data;
    }
    // funcion para obtener los datos del usuario por medio de id de usuario
    static function users_data($user_id){
    	$data = DB::table("users as u")
    			->leftjoin("districts as d","d.id","=","u.district_id")
				->leftjoin("states as st","st.id","=","u.state_id")
				->leftjoin("sub_managements as sm","sm.id","=","u.sub_management_id")
				->leftjoin("branch_offices as bo","bo.id","=","u.branch_office_id")
				->select("u.id as user_id","u.group_id","u.first_name","u.last_name",
					"u.phone","u.email","u.gender","d.name as district","st.name as state",
					"sm.name as sub_management","bo.name as branch_office")
				->where("u.id","=",$user_id)->first();

    	return $data;
    }
    // funcion para obtener los datos modificados para llenar la fila de la tabla de usuarios por medio del id de usuario
    static function row_user($user_id){
	    $data = DB::table("users as u")
	    				->join("groups as gr","gr.id","=","u.group_id")
	            		->where("u.id","=",$user_id)
						->select("u.first_name as Nombre","u.last_name as Apellidos",
								"u.email as Correo Electrónico","gr.name as Grupo",
								"u.active as Estatus")->first();

	    return $data;
    }
}