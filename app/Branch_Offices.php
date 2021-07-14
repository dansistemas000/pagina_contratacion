<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Branch_Offices extends Model
{
    protected $table = 'branch_offices';
    protected $primaryKey = 'id';
    // funcion para obtener los datos de la sucursal por medio del id de sucursal
    static function get_Branch_offices_data($branch_office_id){
        $data = DB::table('branch_offices as bo')
                    ->join('states as st','st.id','=','bo.state_id')
                    ->join('districts as d','d.id','=','st.district_id')
                    ->select('st.name as state','d.name as district','bo.address as address')
                    ->where('bo.id','=',$branch_office_id)->first();

        return $data;
    }
    // funcion para obtener todas las sucursales
    static function branch_offices_all(){
        $data = DB::table('branch_offices as bo')
                    ->join('states as st','st.id','=','bo.state_id')
                    ->join('districts as d','d.id','=','st.district_id')
                    ->join('sub_managements as sm','sm.id','=','d.sub_management_id')
                    ->select('bo.id as branch_office_id','bo.name as Nombre',
                        'bo.code as Código','bo.address as Dirección Sucursal','st.name as Estado',
                        'd.name as Distrito','sm.name as Dirección',
                        'bo.active as Estatus')
                    ->get()->toArray();

        return $data;
    }
    // funcion para llenar la fila modificada de la tabla de las sucursales por medio del id de sucursal
    static function row_branch_office($branch_office_id){
        $data = DB::table('branch_offices as bo')
                    ->join('states as st','st.id','=','bo.state_id')
                    ->join('districts as d','d.id','=','st.district_id')
                    ->join('sub_managements as sm','sm.id','=','d.sub_management_id')
                    ->where("bo.id","=",$branch_office_id)
                    ->select('bo.name as Nombre','bo.code as Código',
                            'bo.address as Dirección Sucursal','st.name as Estado',
                            'd.name as Distrito','sm.name as Dirección',
                            'bo.active as Estatus')->first();

        return $data;
    }
    // funcion para obtener todos los datos de la sucursal por medio del id de sucursal
    static function branch_office_data($branch_office_id){
        $data = DB::table('branch_offices as bo')
                    ->join('states as st','st.id','=','bo.state_id')
                    ->join('districts as d','d.id','=','st.district_id')
                    ->join('sub_managements as sm','sm.id','=','d.sub_management_id')
                    ->where("bo.id","=",$branch_office_id)
                    ->select('bo.id as branch_office_id','bo.name as branch_office_name',
                            'bo.code','bo.address','st.name as state')->first();

        return $data;
    }

    static function branch_offices_stadistics($session){

        switch ($session["group_id"]) {
            case 2: // cordinador movil
            $select = "bo.name as Sucursal,SUM(IF(a.status_id = 7,1,0)) as Contratados,".
                    "SUM(IF(a.status_id = 8,1,0)) as 'Pendiantes de Contratación',".
                    "SUM(IF(a.status_id = 9,1,0)) as 'Rechazados',".
                    "SUM(a.trained) as Capacitados";
                    $where = "u.group_id = 3";
            break;
            case 16: // Director
            $select = "d.name as Distrito, st.name as Estado,". 
                    "bo.name as Sucursal,SUM(IF(a.status_id = 7,1,0)) as Contratados,".
                    "SUM(IF(a.status_id = 8,1,0)) as 'Pendiantes de Contratación',".
                    "SUM(IF(a.status_id = 9,1,0)) as 'Rechazados',".
                    "SUM(a.trained) as Capacitados";
                    $where = "sm.id=".$session["sub_management_id"];
            break;
            case 17: // administrador
            $select = "sm.name as 'Sub-dirección', d.name as Distrito, st.name as Estado,". 
                    "bo.name as Sucursal,SUM(IF(a.status_id = 7,1,0)) as Contratados,".
                    "SUM(IF(a.status_id = 8,1,0)) as 'Pendiantes de Contratación',".
                    "SUM(IF(a.status_id = 9,1,0)) as 'Rechazados',".
                    "SUM(a.trained) as Capacitados";
                    $where = "u.group_id = 3";
            break;
            case 4: // Direccion
            $select = "sm.name as 'Sub-dirección', d.name as Distrito, st.name as Estado,". 
                    "bo.name as Sucursal,SUM(IF(a.status_id = 7,1,0)) as Contratados,".
                    "SUM(IF(a.status_id = 8,1,0)) as 'Pendiantes de Contratación',".
                    "SUM(IF(a.status_id = 9,1,0)) as 'Rechazados',".
                    "SUM(a.trained) as Capacitados";
                    $where = "u.group_id = 3";
            break;
            case 19: // coordinador
            $select = "SUM(IF(a.status_id = 7,1,0)) as Contratados,".
                    "SUM(IF(a.status_id = 8,1,0)) as 'Pendiantes de Contratación',".
                    "SUM(IF(a.status_id = 9,1,0)) as 'Rechazados',".
                    "SUM(a.trained) as Capacitados";
                    $where = "bo.id=".$session["branch_office_id"];
            break;
            case 20: // supervisor estatal
            $select = "bo.name as Sucursal,SUM(IF(a.status_id = 7,1,0)) as Contratados,".
                    "SUM(IF(a.status_id = 8,1,0)) as 'Pendiantes de Contratación',".
                    "SUM(IF(a.status_id = 9,1,0)) as 'Rechazados',".
                    "SUM(a.trained) as Capacitados";
                    $where = "st.id=".$session["state_id"];
            break;
            case 21: //supervisor distrital
            $select = "st.name as Estado,". 
                    "bo.name as Sucursal,SUM(IF(a.status_id = 7,1,0)) as Contratados,".
                    "SUM(IF(a.status_id = 8,1,0)) as 'Pendiantes de Contratación',".
                    "SUM(IF(a.status_id = 9,1,0)) as 'Rechazados',".
                    "SUM(a.trained) as Capacitados";
                    $where = "d.id =".$session["district_id"];
            break;
            case 1: //cordinador de documentos
            $select = "d.name as Distrito, st.name as Estado,". 
                    "bo.name as Sucursal,SUM(IF(a.status_id = 7,1,0)) as Contratados,".
                    "SUM(IF(a.status_id = 8,1,0)) as 'Pendiantes de Contratación',".
                    "SUM(IF(a.status_id = 9,1,0)) as 'Rechazados',".
                    "SUM(a.trained) as Capacitados";
                    $where = "d.id =".$session["district_id"];
            break;

        }

        $data = DB::table("users as u")
                    ->join("advisers as a","a.user_id","=","u.id")
                    ->join("branch_offices as bo","bo.id","=","u.branch_office_id")
                    ->join("states as st","st.id","=","bo.state_id")
                    ->join("districts as d","d.id","=","st.district_id")
                    ->join("sub_managements as sm","sm.id","=","d.sub_management_id")
                    ->whereRaw($where)->select(DB::raw($select))
                    ->groupBy("bo.name")
                    ->orderBy("sm.id")->orderBy("d.id")->orderBy("st.id")
                    ->get()->toArray();

        return $data;
    }

    static function branch_offices_organization(){

 
        $select = "sm.name as 'Sub-dirección', d.name as Distrito, st.name as Estado,". 
                    "bo.name as Sucursal";

        $data = DB::table("branch_offices as bo")
                    ->join("states as st","st.id","=","bo.state_id")
                    ->join("districts as d","d.id","=","st.district_id")
                    ->join("sub_managements as sm","sm.id","=","d.sub_management_id")
                    ->select(DB::raw($select))
                    ->groupBy("bo.name")
                    ->orderBy("sm.id")->orderBy("d.id")->orderBy("st.id")
                    ->get()->toArray();

        return $data;
    }

    static function branch_office_email($branch_office_id){
        $data = DB::table('branch_offices as bo')
                    ->join('states as st','st.id','=','bo.state_id')
                    ->join('districts as d','d.id','=','st.district_id')
                    ->join('sub_managements as sm','sm.id','=','d.sub_management_id')
                    ->join('users as u','bo.id','=','u.branch_office_id')
                    ->where("bo.id","=",$branch_office_id)
                    ->where("u.group_id","=",19)
                    ->select('bo.id as branch_office_id','bo.name as branch_office_name',
                            'bo.code','bo.address','st.name as state','u.email as email')->first();

        return $data;
    }
}