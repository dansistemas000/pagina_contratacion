<style type="text/css">
.format_1 table {
    margin: auto;
    font-size: 13px;
    text-align: center;
}

.format_1 th{
    background-color: #A5A5A5;
    color:#fff;
    font-size: 15px;
    padding: 5px;
}

.format_1 .title { 
    background-color: #A5A5A5;
    color:#fff;
    width: 150px;
}
.format_1 .non { 
    padding:5px;
    background-color: #DBDBDB;

}
.format_1 .par {
    padding:5px;
    background-color: #EDEDED;
}
</style>
@php
    $address  = $data_advisers->street." ";
    $address .= $data_advisers->outside_number." ".$data_advisers->inside_number.", ";
    $address .= $data_advisers->colony.", ".$data_advisers->town.", ".
                $data_advisers->state.", ".$data_advisers->postal_code;

    $months = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto",
                    "Septiembre","Octubre","Noviembre","Diciembre");
    $date = getdate();
    $day = $date['mday'];
    $month = $date['mon'];
    $year = $date['year'];
    $today = $day ." de ". $months[$month-1] . " del ". $year;

    list($y,$m,$d) = explode("-",$data_advisers->birth_date);
    $years = ( date("md") < $m.$d ? date("Y")-$y-1 : date("Y")-$y );
@endphp
<fieldset class="format_1">
    <table>
        <thead>
            <tr>
                <th colspan="2">Datos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="title">
                    Nombre
                </td>
                <td class="non">
                {{ $data_advisers->first_name." ".$data_advisers->last_name }}
                </td>
            </tr>
            <tr>	
                <td class="title">
                    Edad
                </td>
                <td class="par">
                    {{ $years." años" }}
                </td>
            </tr>
            <tr>	
                <td class="title">
                    Estado civil
                </td>
                <td class="non">
                    {{ $data_advisers->marital_status }}
                </td>
            </tr>
            <tr>	
                <td class="title">
                    Nacionalidad
                </td>
                <td class="par">
                    {{ $data_advisers->nationality }}
                </td>
            </tr>
            <tr>	
                <td class="title">
                    RFC
                </td>
                <td class="non">
                    {{ $data_advisers->rfc }}
                </td>
            </tr>
            <tr>	
                <td class="title">
                    CURP
                </td>
                <td class="par">
                    {{ $data_advisers->curp }}
                </td>
            </tr>
            <tr>	
                <td class="title">
                    Domicilio
                </td>
                <td class="non">
                    {{ $address }}
                </td>
              </tr>
            <tr>	
                <td class="title">
                    Lugar de nacimiento
                </td>
                <td class="par">
                    {{ $data_advisers->birth_place }}
                </td>
            </tr>
            <tr>	
                <td class="title">
                    Fecha de ingreso
                </td>
                <td class="non">
                    {{ $today }}
                </td>
            </tr>
            <tr>	
                <td class="title">
                    Sucursal CM /Estado
                </td>
                <td class="par">
                    {{ $data_advisers->branch_office." / ". $data_advisers->branch_office_state }}
                </td>
            </tr>
            <tr>	
                <td class="title">
                    Teléfono
                </td>
                <td class="non">
                    {{ $data_advisers->phone }}
                </td>
            </tr>
            <tr>	
                <td class="title">
                    Correo Electrónico
                </td>
                <td class="par">
                    {{ $data_advisers->email }}
                </td>
            </tr>
        </tbody>
    </table>
</fieldset>


