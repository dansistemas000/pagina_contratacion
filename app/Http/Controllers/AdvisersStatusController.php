<?php

namespace App\Http\Controllers;

use App\Advisers_Status;
// controlador para obtener los estados que esten activos
class AdvisersStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = Advisers_Status::where("active","=",1)
                        ->get(['id', 'name']);
                    
        return $data;
    }

}