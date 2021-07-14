<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Branch_Offices;
// controlador para activar o desactivar alguna sucursal
class BranchOfficeActiveController extends Controller
{	

	public function index($id,$value,$text)
    {   
    	if(!\Session::get('fuerza_maestra_session_user')){
            return array('status' => "session_close",'redirect'=>'admin');
        }

    	$branch_office = Branch_Offices::where('id', $id)->first();

        $branch_office->active = $value;
        $response = $branch_office->save();

        if($response){
        	return array('status' => 'success','message' =>"Sucursal ".$text." exitosamente.");
        }else{
            return array('status' => 'error','message' =>"No se pudo ".$text." sucursal.");
        }
    }
}