<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Advisers;
use App\Users;
use App\Branch_Offices;
use App\ES_MX;
// controlador para llenar la fila modificada de los asesores, usuarios y sucursales
class RowUpdateTableController extends Controller
{   
    public function index($type,$id)
    {   
        $data = [];
        switch ($type) {
            case 'adviser':
                $session = \Session::get('fuerza_maestra_session_user');
                $headers = array("Capacitado", "Convertido");
                $data_adviser = Advisers::row_adviser($id,$session["group_id"]);
                foreach ($data_adviser as $key => $value) {
                    if(in_array($key, $headers)){
                        if($value == 1){
                            array_push ($data ,'<i class="fa fa-check" aria-hidden="true"></i>');
                        }else{
                            array_push ($data , '');
                        }
                    }else{
                        array_push ($data ,$value);
                    }
                }
            break;
            case 'user':
                $data_user = Users::row_user($id);
                $status = "";
                foreach ($data_user as $key => $value) {
                    if($key == "Estatus"){
                        $status .= "<div class='onoffswitch2'>";
                        if($value == 1){
                            $status .= "<span class='d-none'>onn</span>".
                                        "<input type='checkbox' action='user_active'".
                                        "class='onoffswitch2-checkbox actives'".
                                        "id='".$id."' checked>";
                        }else{
                            $status .= "<span class='d-none'>off</span>".
                                        "<input type='checkbox' action='user_active'".
                                        "class='onoffswitch2-checkbox actives'".
                                        "id='".$id."'>";
                        }
                        $status .= "<label class='onoffswitch2-label' for='".$id."'>".
                                        "<span class='onoffswitch2-switch'></span>".
                                        "<span class='onoffswitch2-inner'></span>".
                                    "</label>".
                                "</div>";
                        array_push ($data ,$status);

                    }else{
                        array_push ($data ,$value);
                    }
                }
            break;
            case 'branch_office':
                $data_branch_office = Branch_Offices::row_branch_office($id);
                $status = "";
                foreach ($data_branch_office as $key => $value) {
                    if($key == "Estatus"){
                        $status .= "<div class='onoffswitch2'>";
                        if($value == 1){
                            $status .= "<span class='d-none'>onn</span>".
                                        "<input type='checkbox' action='branch_office_active'".
                                        "class='onoffswitch2-checkbox actives'".
                                        "id='".$id."' checked>";
                        }else{
                            $status .= "<span class='d-none'>off</span>".
                                        "<input type='checkbox' action='branch_office_active'".
                                        "class='onoffswitch2-checkbox actives'".
                                        "id='".$id."'>";
                        }
                        $status .= "<label class='onoffswitch2-label' for='".$id."'>".
                                        "<span class='onoffswitch2-switch'></span>".
                                        "<span class='onoffswitch2-inner'></span>".
                                    "</label>".
                                "</div>";
                        array_push ($data ,$status);

                    }else{
                        array_push ($data ,$value);
                    }
                }
            break;
            case 'colony':
                $colony = ES_MX::get_colony($id);
                array_push ($data ,$colony->colony);

            break;
        }
        return $data;
    }
}
