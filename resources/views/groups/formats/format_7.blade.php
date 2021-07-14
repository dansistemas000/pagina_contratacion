<style type="text/css">
.pdf_titulo, .pdf_subtitulo {
    text-align: center;    
    font-weight: bold;
    margin-bottom: 10px;   
}

fieldset{
    margin-top:20px;   
}
.name{
    text-transform: uppercase;
}
table{
    font-size: 14px;
}
td{
    border: none;
}
</style>
<fieldset>
    <table>
        <tbody>
            <tr>
                <td width="50%">
                    NOMBRE DEL CANDIDATO:
                </td>
                <td colspan="2">
                    <span class="name">
                        {{ $data_advisers->first_name." ".$data_advisers->last_name }}
                    </span>
                </td>
            </tr>
            <tr>
            	<td>
                    ESTADO
                </td>
                <td colspan="2">
                    {{ $data_advisers->branch_office_state }}
                </td>
            </tr>      
            <tr>
            	<td>
                    SUCURSAL
                </td>
                <td colspan="2">
                    {{ $data_advisers->branch_office }}
                </td>
            </tr>      
            <tr>
            	<td  style="margin-top:20px;">
                    DOCUMENTOS
                </td>
                <td>
                    ENVÍO
                </td>
                <td>
                    OK
                </td>
            </tr>      
            <tr>
                <td>
                    ACTA DE NACIMIENTO
                </td>
                <td>
                    ORIGINAL Y 3 COPIAS
                </td>
                <td>
                    _____________
                </td>
            </tr>      
            <tr>	
                <td>
                    IDENTIFICACION OFICIAL
                </td>
                <td>
                    ORIGINAL Y 3 COPIAS
                </td>
                <td>
                    _____________
                </td>
            </tr>
            <tr>
                <td>
                    RFC
                </td>
                <td>
                    ORIGINAL Y 3 COPIAS
                </td>
                <td>
                    _____________
                </td>
            </tr>
            <tr>
                <td>
                    CURP
                </td>
                <td>
                    ORIGINAL Y 3 COPIAS
                </td>
                <td>
                    _____________
                </td>
            </tr>
            <tr>
                <td>
                    COMPROBANTE DE DOMICILIO
                </td>
                <td>
                    ORIGINAL Y 3 COPIAS
                </td>
                <td>
                    _____________
                </td>
            </tr>
            <tr>
                <td>
                    CUENTA DE BANCO (no mayor a 3 meses de antigüedad)
                </td>
                <td>
                    ORIGINAL Y 3 COPIAS
                </td>
                <td>
                    _____________
                </td>
            </tr>
        </tbody>
    </table>
</fieldset>

