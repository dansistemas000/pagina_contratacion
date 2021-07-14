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
        font-size: 20px;
        padding-top: 20px;
    }

    .date{
        font-size: 16px;
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
        font-size: 14.5px;
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
        font-size: 14px;
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
            <img src="img/lanaapp_logo.jpg" class="logo">
        </div>
        <div class="title">
            LANAMOVIL
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
                <th colspan="6" style="font-size: 16px;">
                    DATOS DEL USUARIO
                </th>
            </tr>
            <tr>
                <td style="width: 90px;">
                    Nombre(s):
                </td>
                <td>
                    {{ $data_advisers->first_name }}
                </td>
                <td style="width: 95px;">
                    Ap. Paterno:
                </td>
                <td>
                    
                </td>
                <td style="width: 105px;">
                    Ap. Materno:
                </td>
                <td></td>
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
                    Fecha Ingreso:
                </td>
                <td>
                    {{ date('d/m/Y') }}
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
                    Teléfono:
                </td>
                <td>
                    {{ $data_advisers->phone }}
                </td>
            </tr>
        </table>
        <table>
            <tr>
               <th colspan="3" style="font-size: 16px;">
                    DATOS DEL RESPONSABLE DE ÁREA
                </th> 
            </tr>
            <tr>
                <td style="width: 180px;">
                    Nombre completo
                </td>
                <td style="width: 423px;">
                    {{ $data_advisers->first_name." ".$data_advisers->last_name }}
                </td>
                <td style="border: none">
                    
                </td>
            </tr>
            <tr>
                <td>
                    Cargo
                </td>
                <td>
                    Asesor
                </td>
                <td style="border: none">
                    
                </td>
            </tr>
        </table>
    </div>
    <div class="option-container">
        <table>
            <tr>
                <td colspan="2">
                    Seleccione la opción deseada:
                </td>
            </tr>
            <tr>
                <td>
                    Requerimiento:
                </td>
                <td style="text-align: center;">
                    <b>ALTA</b>
                </td>
            </tr>
            <tr>
                <td>
                    Plataforma:
                </td>
                <td style="text-align: center;">
                    <b>Lanapp</b>
                </td>
            </tr>
            <tr>
                <td>
                    Perfil:
                </td>
                <td style="text-align: center;">
                    <b>Asesor</b>
                </td>
            </tr>
        </table>
    </div>
    <div class="observations-container">
        <table>
            <tr>
                <td style="height: 50px;">
                    Observaciones:
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
            </tr>
        </table>
    </div>
    <div style="text-align: center; font-size: 15px; padding-top: 20px;">
        Firman de conformidad
    </div>
    <div class="signature-container">
        <div class="signature">
            _____________________________________<br>
            Usuario
        </div>
        <div class="signature">
            ______________________________________<br>
            Responsable
        </div>
        <div class="signature">
            ______________________________________<br>
            Control Interno
        </div>
    </div>
    <div class="footer">
        Fernando Rodriguez<br>
        Gerente de Auditoria
    </div>
</fieldset>