<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Users_Districts extends Model
{
    protected $table = 'users_districts';
    protected $primaryKey = 'id';

     static function get_users_districts($user_id){
	    $data = DB::table("users_districts as ud")
	    		->join("districts as d", "d.id", "=", "ud.district_id")
	            ->select("ud.district_id","d.name as district")
	            ->where("d.active","=",1)->where("user_id","=",$user_id)->get()->toArray();

	    return $data;
    }
}