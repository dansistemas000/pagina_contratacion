<style type="text/css">
    .container{
        font-family:  "Times New Roman", Times, serif;
    }

    .header{
        width: 100%;
        height: 100px;
    }

    .logo-container{
        width: 250px;
        height: 85px;
        float: left;
    }

    .logo{
        width: 160px;
    }

    .title{
        text-align: center;
        width: 250px;
        float: left;
        font-size: 14px;
        padding-top: 20px;
    }

    .date{
        font-size: 13px;
        text-align: center;
        width: 155px;
        float: left;
        line-height: 25px;
        padding-left: 100px;
    }

    .instructions{
        font-size: 14.5px;
        text-align: left;
        width: 100%;
        padding-top: 20px;
    }

    .table-container{
        padding-top: 60px;
    }

    .table-container table{
        font-family:  "Times New Roman", Times, serif;
        border-spacing: none;
        font-size: 12px;
        width: 100%;
    }

    .table-container table th{
        border: 1px solid;
        text-align: center;
    }

    .table-container table td{
        border: 1px solid;
    }

    .option-container{
        width: 44%;
        float: left;
        padding-top: 40px;
    }

    .option-container table{
        font-family:  "Times New Roman", Times, serif;
        border-spacing: none;
        width: 90%;
        font-size: 15px;
    }

    .option-container table td{
        height: 68px;

    }

    .observations-container{
        width: 55%;
        float: left;
        padding-top: 40px;
    }

    .observations-container table{
        font-family:  "Times New Roman", Times, serif;
        border-spacing: none;
        width: 100%;
    }

    .observations-container table td{
        border: 1px solid;
        height: 25px;
    }

    .signature-container{
        padding-top: 90px;
    }

    .signature{
        width: 33%;
        float: left;
        text-align: center;
        font-size: 12px;
    }

    .footer{
        text-align: right;
        width: 100%;
        font-size: 14px;
        padding-top: 20px;
    }

</style>


<fieldset class="container">
    <div class="header">
        <div class="logo-container">
            <img src="img/logo_horizontal.jpg" class="logo">
        </div>
        <div class="title">
            FINANCIERA MAESTRA SOFOM ENR
        </div>
        <div class="date">
            Fecha Solicitud
            <br>
            {{ date('d/m/Y') }}
        </div>
    </div>
    <div class="instructions">
        INSTRUCCIONES:<br>
        Por favor llene la información completamente para poder proceder con su solicitud.<br>
        Se deberá llenar una solicitud por cada empleado y cada plataforma que requiera movimientos.<br>
        El Alta de usuario deberá ser autorizada por su jefe directo.<br>
        El userID y password son personales e intransferibles, el usuario se hace responsable del uso que se le pueda dar.
    </div>
    <div class="table-container">
        <table>
            <tr>
                <th colspan="6" style="font-size: 14px;">
                    DATOS DEL USUARIO
                </th>
            </tr>
            <tr>
                <td style="width: 90px;">
                    Nombre(s):
                </td>
                <td colspan="5">
                    {{ $data_advisers->first_name." ".$data_advisers->last_name }}
                </td>
            </tr>
            <tr>
                <td>
                    RFC:
                </td>
                <td>
                    {{ $data_advisers->rfc }}
                </td>
                <td>
                    Correo:
                </td>
                <td colspan="3">
                    {{ $data_advisers->email }}
                </td>
            </tr>
            <tr>
                <td>
                    Sucursal:
                </td>
                <td>
                    {{ $data_advisers->branch_office }}
                </td>
                <td>
                    Estado:
                </td>
                <td>
                    {{ $data_advisers->state }}
                </td>
                <td>
                    Teléfono:
                </td>
                <td>
                    {{ $data_advisers->phone }}
                </td>
            </tr>
            <tr>
                <td>
                    Cargo:
                </td>
                <td>
                    Asesor
                </td>
                <td>
                    # Asesor:
                </td>
                <td>
                    {{ $data_advisers->agreement_num }}
                </td>
                <td>
                    Fecha Ingreso:
                </td>
                <td>
                    {{ date('d/m/Y') }}
                </td>
            </tr>
        </table>
        <table>
            <tr>
               <th colspan="3" style="font-size: 14px;">
                    DATOS DEL RESPONSABLE DE ÁREA
                </th> 
            </tr>
            <tr>
                <td style="width: 180px;">
                    Nombre completo
                </td>
                <td colspan="2" style="width: 423px;">
                    
                </td>
            </tr>
            <tr>
                <td>
                    Cargo
                </td>
                <td colspan="2">
                    
                </td>
            </tr>
        </table>
        <br>
        <table style="font-size:11px;">
            <tr>
               <td>
                   Perfil
               </td>
               <td colspan="6">
                   
               </td>
            </tr>
            <tr>
                <td>
                    Claves
                </td>
                <td style="text-align:center;">
                    MANZAPP
                </td>
                <td style="text-align:center; width: 75px;">
                    PORTAL DE
                    VENTAS
                </td>
                <td style="text-align:center; width: 85px;">
                    UNIVERSIDAD
                    MAESTRA
                </td>
                <td style="text-align:center; width: 100px;">
                    COTIZADOR
                </td>
                <td style="text-align:center; width: 95px;">
                    SUGAR CRM
                </td>
                <td rowspan="3" width="176px">
                    
                </td>       
            </tr>
            <tr>
                <td>
                    Usuario
                </td>
                <td colspan="5">
                    {{ $data_advisers->email }}
                </td>
            </tr>
            <tr>
                <td>
                    Contraseña
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    Observaciones
                </td>
                <td  colspan="6">
                    
                </td>
            </tr>
        </table>
    </div>
    <div style="text-align: center; font-size: 15px; padding-top: 20px;">
        Firman de conformidad
    </div>
    <div class="signature-container">
        <div class="signature">
            <div style="width:250px; border-bottom: 1px solid;">
                {{ $data_advisers->first_name." ".$data_advisers->last_name }}
            </div>
            Nombre asesor
        </div>
        <div class="signature">
            _________________________________<br>
            Responsable
        </div>
        <div class="signature">
            _________________________________<br>
            Control Interno<br>
            Fernando Rodriguez<br>
            Gerente de Auditoria
        </div>
    </div>
</fieldset>