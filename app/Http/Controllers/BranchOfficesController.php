<?php

namespace App\Http\Controllers;

use App\Branch_Offices;
use App\ES_MX;
use App\States;

// controlador para obtener las sucursales que pertenecen al codigo postal ingresado
class BranchOfficesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($postal_code = null)
    {   
        if($postal_code == ""){
            $data = Branch_Offices::where("active","=",1)->get(['id', 'name']);
            return $data;
        }else{
            $array_ids = [];

            $code = ES_MX::where("postal_code","=",$postal_code)
                        ->get(['code'])
                        ->first();

            $ids = States::where("code","=",$code["code"])
                        ->where("active","=",1)
                        ->get(['id'])->toArray();


            foreach ($ids as $key => $value) {
                array_push($array_ids, $value["id"]);
            }


            $data = Branch_Offices::whereIn("state_id",$array_ids)
                        ->where("active","=",1)
                        ->get(['id', 'name']);

            return $data;
        }

    }

}