<style type="text/css">
fieldset{
    font-size: 13px;
}
.format_8 .right{
	text-align: right;
}
.format_8 .left{
	text-align: left;
}
.format_8 p{
	text-align: justify;
	margin-bottom: 30px;
}
.format_8 .date{
	margin-bottom: 50px;
}
.format_8 .title{
	margin-bottom: 30px;
}
.format_8 .line {
    width:50%;
    margin:auto;
    text-align:center;
    border-top: 2px solid #000;
    margin-top: 450px;
}
.format_8 .signature {
	padding-top: 10px;
    text-transform:uppercase;
    font-size: 13px;
}
.format_8 .container {
    margin-left: 20px;
}
.format_8 .point{
	margin-right: 20px;
    width: 5%;
    display: inline-block;
    float: left;
    font-weight: bold;
}

.format_8 .option{
	float: left;
}
.format_8 .container-options{
	margin-bottom: 30px;
}
</style>
@php
    $months = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    $date = getdate();
    $day = $date['mday'];
    $month = $date['mon'];
    $year = $date['year'];
    $date = $day ." de ". $months[$month-1] . " del ". $year;
@endphp
<fieldset class="format_8">
	<div class="right date">Ciudad de México a {{ $date }}.</div>
	<div class="title">
		<div class="left">A quien corresponda:</div>
		<div class="left">Presente:</div>	
	</div>
	<p>
		{{ $data_advisers->first_name." ". $data_advisers->last_name }}, por  medio de la presente informo que  me comprometo a realizar las actividades para las cuales fueron requeridos mis servicios establecidos en el Contrato de Prestación de Servicios que tengo celebrado con EJECUTIVOS Y CONSULTORES FAST SA DE CV para  la  oferta y venta de diferentes productos del “Cliente”, comprometiéndome a  dar cumplimiento con todas las medidas y/o parámetros establecidos:
	</p>
	<p>
		Declaro que Crédito Maestro como uno de los “Clientes” a los cuales brindo mis servicios mediante el contrato antes mencionado, ha hecho de mi conocimiento todas las medidas y/o parámetros para el sano desarrollo de mis actividades, las cuales de forma enunciativa más no limitativa se mencionan a continuación:
	</p>
	<div class=container-options>
		<div class="container">
	        <div class="point">•</div>
	        <div class="option">
	        	No pedir ningún tipo de remuneración a los clientes, ya que los trámites son gratuitos.
	        </div>
	    </div>
	    <div class="container">                                            
	        <div class="point">•</div>
	        <div class="option">
	        	No realizar ningún tipo de alianzas con otras empresas, salvo con las que Crédito Maestro tenga celebrado alguna alianza comercial.
	        </div>
	    </div>
	    <div class="container">                                             
	        <div class="point">•</div>
	        <div class="option">
	        	En caso de requerir algún tipo de publicidad solicitar a Crédito Maestro autorización por escrito, con el fin de evitar cualquier violación a la Ley.
	        </div>
	    </div>                                          
	    <div class="container">
	    	<div class="point">•</div>
	        <div class="options"> 
	           No ofrecer a los clientes servicios y/o productos que Crédito Maestro no proporcione.
	        </div>
	    </div>
        <div class="container">
        	<div class="point">•</div>
	        <div class="options"> 
	           En caso de detectar alguna irregularidad y/o error en los contratos, solicitar al Cliente que vuelva a firmar, con el fin de prevenir controversias.
	        </div>
        </div>
        <div class="container">
        	<div class="point">•</div>
	        <div class="options"> 
	           Llevar a cabo las medidas de debida diligencia del Cliente, de acuerdo a lo establecido por Crédito Maestro (identificar al cliente, recabar personalmente las firmas, cotejar los documentos que presente el Cliente, etc.).
	        </div>
        </div>
        <div class="container">
        	<div class="point">•</div>
	        <div class="options"> 
	           Explicar a los Clientes las condiciones de los contratos (monto, plazo, tasa).
	        </div>
        </div>
        <div class="container">
        	<div class="point">•</div>
	        <div class="options"> 
	           Por ningún motivo falsificar las firmas de los Clientes y/o alterar los Contratos y/o Documentación.
	        </div> 
        </div>
    </div>
	<p>
		Por lo cual en caso de que en el futuro se llegase a presentar cualquier tipo de controversia en relación con el incumplimiento de lo anterior, el que suscribe y de acuerdo al Contrato de Prestación de Servicios es el único y total responsable de dicha situación.
	</p>
	<p>
		Por lo expuesto arriba, reitero mi compromiso.
	</p>
	<div class="line">
		<div class="signature">
            {{ $data_advisers->first_name." ". $data_advisers->last_name }}
        </div>
        <div>Nombre y Firma</div>
	</div>
</fieldset>