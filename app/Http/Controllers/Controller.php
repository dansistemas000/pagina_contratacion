<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // funcion para crear nueva contraseña con los 2 primeros caracteres de su nombre, apellido y municipio o delegacion y al final con 5 digitos aleatorios
    public function create_password($first_name,$last_name,$town){
        
        $first_name = ($first_name == "") ? "FN" : $first_name;

        $last_name = ($last_name == "") ? "LN" : $last_name;

        $town = ($town == "") ? "TW" : $town;

        $first_name = $this->accents_delete($first_name);

        $last_name = $this->accents_delete($last_name);

        $town = $this->accents_delete($town);

        $convert = strtolower(substr($first_name, 0, 2).substr($last_name,0, 2).
                            substr($town,0, 2));
        $random = rand(1000, 5000);

        $pass = $convert.$random;
        return $pass;

    }
    // convierte texto en mayusculas aun con acentos y Ñ
    public function str_to_upper($string){
        $string = strtoupper($string);
        $find = array('á','é','í','ó','ú','ñ');
        $repl = array('Á','É','Í','Ó','Ú','Ñ');
        $string = str_replace($find, $repl, $string);

        return $string;
    }

    public function accents_delete($String){
        $find = array('á','é','í','ó','ú','ñ','Á','É','Í','Ó','Ú','Ñ');
        $repl = array('a','e','i','o','u','n','a','e','i','o','u','n');
        $String = str_replace($find, $repl, $String);

        return $String;
    }
}
