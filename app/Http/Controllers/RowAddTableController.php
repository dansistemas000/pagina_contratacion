<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Advisers;
use App\Users;
use App\Branch_Offices;
use App\ES_MX;
// controlador para llenar la fila modificada de los asesores, usuarios y sucursales
class RowAddTableController extends Controller
{   
    public function index($type,$id)
    {   
        $data = [];
        switch ($type) {
            case 'colony':
                $colony = ES_MX::get_colony($id);
                array_push ($data ,"<span class='row-".$id."'>".$colony->colony."</span>");
                $actions = '<center>
                            <div class="btn-toolbar" role="toolbar" 
                            aria-label="Toolbar with button groups">
                                <span class="show-modal"  
                                data-toggle="modal" view="modal_view/colony_update/'.$id.'/" 
                                data-target=".modal">
                                    <button type="button" class="btn color-none">
                                        <i class="fa fa-edit" title="Editar colonia" data-toggle="tooltip"></i>
                                    </button>
                                </span>
                                <span class="alert_action" data="colony_delete/'.$id.'">
                                    <button  type="button" class="btn color-none">
                                        <span class="d-none">eliminar colonia</span>
                                        <i class="fa fa-trash" title="Eliminar colonia" data-toggle="tooltip"></i>
                                    </button>
                                </span>
                            </div>
                        </center>';
                array_push ($data ,$actions);

            break;
        }
        return $data;
    }
}
