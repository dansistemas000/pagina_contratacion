<?php

namespace App\Http\Controllers;

use Mpdf\Mpdf;
use Illuminate\Http\Request;

// controlador para descargar pdf o excel dependiendo de los datos que se muestren la tabla de asesores
class DownloadController extends Controller
{
    public $header;
    public $data;
    public $name;


    public function store(Request $request)
    {   

        $this->header = explode(",", $request["headers"]);
        $find = array(',|,',',|');
        $arraydata = str_replace($find, "|", $request["data"]);
        $arraydata = explode("|", $arraydata);
        unset($arraydata[count($arraydata)-1]);
        $i = 0;
        foreach ($arraydata as $value) {
            $this->data[$i] = explode(",", $value);
            $i++;
        }

        $this->name = $request["report-name"];
        
        if($request["type"] == "pdf"){
            $html = view('groups.formats.table_pdf',["header"=>$this->header,"data"=>$this->data,"name"=>$this->name])->render();
            // funcion para crear pdf
            $mpdf = new Mpdf(['default_font' => 'arial',
                        "format" => "Letter",
                        'mode' => 'utf-8',
                        'orientation' => "L",
                        'default_font_size' => 13,
                        'margin_right' => 17,
                        'margin_left' => 17,
                        "margin_top"=>20,
                        "margin_bottom" =>10,
                        'margin_footer'=>5,
                        "margin_header"=>5
                        ]);
            $footer = "<table width=\"1000\">".
                        "<tr>".
                            "<td style='font-size: 12px; padding-bottom: 5px;' align=\"center\">".
                                "{PAGENO}".
                            "</td>".
                        "</tr>".
                        "</table>";
            $mpdf->SetHTMLFooter($footer);
            $mpdf->WriteHTML($html);

            $mpdf->Output($this->name." ".date("d_m_Y").".pdf","D");
        }else{

            // funcion para crear archivo excel
            \Excel::create($this->name.' '.date("d_m_Y"), function($excel) {

                $excel->sheet("Reporte fuerza maestra", function($sheet) {
                    
                    $sheet->loadView('groups.formats.table_excel',["header"=>$this->header,"data"=>$this->data,"name"=>$this->name]);
                });
            })->download('xlsx');

        }
    }

}