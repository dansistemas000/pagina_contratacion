<?php

namespace App\Http\Controllers;

use App\ES_MX;
// controlador para buscar direcciones por medio del codigo postal
class SearchAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($code)
    {
    	$data = ES_MX::get_address($code);
    	
        if($data){
            foreach ($data as $key => $value) {
                $array[] = array('colony' => $value->colony, 'state'=>$value->state,'town' => $value->town);
            }  
        }else{
            $array = "No se encontro ninguna dirección con ese código postal."; 
        }
        
        return $array;

    }

}