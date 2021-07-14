<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ES_MX extends Model
{
    protected $table = 'es_mx';
    protected $primaryKey = 'id';

    protected $guarded = ['active','created_at','updated_at'];

    // funcion para mandar llamar las direcciones por medio del codigo postal
    static function get_address($code){
     	$address = DB::table('es_mx')
		            ->select('id','colony','state','town','country','code','postal_code')
                    ->where('postal_code','=',$code)->get()->toArray();

	    return $address;
   }

   static function get_colony($id){
   		$data = DB::table('es_mx')
		            ->select('id','colony','state','town','country','code','postal_code')
                    ->where('id','=',$id)->first();

	    return $data;
   }
    
}