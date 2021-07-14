<?php

namespace App\Http\Controllers;

use Mpdf\Mpdf;
use App\Advisers;
use App\Http\Controllers\SendEmailController as SendEmail;
// funcion para imprimir el kit de contratacion de los asesores
class PrintKitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct(){
        $this->middleware(function ($request, $next) {
            if(!\Session::get('fuerza_maestra_session_user')){
                return redirect("admin");
            }
            return $next($request);
        });
    }
    public function index($type,$user_id)
    {   

        $data_advisers = Advisers::information_advisers($user_id);

        $format = "LEGAL";

        $margin_right = 17;
        $margin_left = 17;
        $margin_top = 16;
        $margin_bottom = 16;

        switch ($type) {
            case 9:
                $format = "Letter";

                $margin_right = 5;
                $margin_left = 10;
                $margin_top = 5;
                $margin_bottom = 5;
                $file_name = "responsiva_".$data_advisers->rfc."_".date("d_m_Y").".pdf";
                $documents_array = array('groups.formats.responsive');
            break;
            case 3:
                $format = "Letter";

                $margin_right = 5;
                $margin_left = 10;
                $margin_top = 5;
                $margin_bottom = 5;
                $file_name = "acceso_plataformas_".$data_advisers->rfc."_".date("d_m_Y").".pdf";
                $documents_array = array('groups.formats.plataform_access');
            break;
            default:
                $file_name = "kit_".$data_advisers->rfc."_".date("d_m_Y").".pdf";
                $documents_array = array('groups.formats.format_7','groups.formats.format_1',
                'groups.formats.format_4','groups.formats.format_6','groups.formats.format_2','groups.formats.format_3','groups.formats.format_5','groups.formats.format_8','groups.formats.responsive');
            break;
        }


       

        // funcion para crear pdf
        $mpdf = new Mpdf(['default_font' => 'arial',
                        "format" => $format,
                        'mode' => 'utf-8',
                        'orientation' => "P",
                        'default_font_size' => 13,
                        'margin_right' => $margin_right,
                        'margin_left' => $margin_left,
                        "margin_top"=>$margin_top,
                        "margin_bottom" =>$margin_bottom,
                        'margin_footer'=>5,
                        "margin_header"=>5
                        ]);

        $count_documents = 0;
        foreach ($documents_array as $value) {
            if($value != ""){
                $count_documents++;
            }
        }

        $j = 1;
        foreach ($documents_array as $value) {

            if($value != ""){

                $html = explode("<hr>", view($value,["data_advisers"=>$data_advisers])->render());
                if (is_array($html)) {
                    $count = sizeof($html);
                    $x = sizeof($html)-1;
                    for ($i=0; $i < $count; $i++) { 
                        $mpdf->WriteHTML($html[$i]);
                        if($x != $i){
                            $mpdf->AddPage();
                        }
                    }
                }else{
                   $mpdf->WriteHTML($html); 
                }
                if($j != $count_documents){
                    $mpdf->AddPage();
                }
                $j++;
            }
        }

        $mpdf->Output($file_name,"D");
    }

}