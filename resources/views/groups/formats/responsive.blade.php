@php

$name = $data_advisers->first_name." ".$data_advisers->last_name;

$email = $data_advisers->email;

$months = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$date = getdate();
$day = $date['mday'];
$month = $date['mon'];
$year = $date['year'];
$date = $day ." de ". $months[$month-1] . " del ". $year;

@endphp



<style type="text/css">
    .container{
        padding: 10px 10px 10px 10px;
        font-size: 13px;
    }
    .left{
    	float: left;
    }
    .right{
    	float: right;
    }
    .logo-cm{
    	width: 160px;
    }
     .logo-fuerza{
    	width: 60px;
    }
    
    .logo{
    	height: 60px;
    	opacity: 0.4;
    }
    .header-text{
     	text-align: center;
    	width: 400px;
    	color: #a8a6a6;
    	height: 45px;
    	float: left;
    	padding-top: 15px;
    	margin-left: 20px;
    	margin-right: 20px;
    	font-size: 15px;
    	font-family:  "Times New Roman", Times, serif;
    }
    .header{
    	width: 100%;
    }
    .text{
    	text-align: justify;
    	padding: 30px 20px 0 20px;
    	clear: both;
    	background-image: url("img/confidencial.png");
    	background-size: 1800px 2000px;
    	background-repeat: no-repeat;
    	opacity: 0.3;
    	right: 0;
    	top: 0;
    }
    .indentation{
    	padding-left: 20px;
    }
    .signature{
    	text-align: center;
    	padding-top: 100px;
    }

</style>

<fieldset class="container">
    <div class="header">
    	<div class="left logo-cm">
    		<img class="logo" src="img/logo_horizontal.jpg" alt="">
        </div>
    	<div class="header-text">
    		Responsiva de Clave de Usuario para acceder a las
              Plataformas de Crédito Maestro
        </div>
        <div class="right logo-fuerza">
    		<img class="logo" src="img/fuerza_maestra.jpg" alt="">
        </div>
    </div>
    <br>
    <div class="text">
    	<p>
    		Por este conducto, Crédito Maestro habilita y asigna a {{ $name }} en su condición de usuario, las siguientes credenciales de acceso al PORTAL DE VENTAS:
    	</p>
    	<p class="indentation">
    		•&nbsp;&nbsp;&nbsp;	Username:<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $email }}
    	</p>
    	<p class="indentation">
    		•&nbsp;&nbsp;&nbsp;	Password (provisional):<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $email }}
    	</p>
    	<p>
    		Crédito Maestro  informa al usuario que únicamente está autorizado para realizar con la clave, las actividades laborales que requiera su área, esto sea en el presente o en el futuro e independientemente de las actividades que la clave le permita realizar.	
    	</p>
    	<p>
    		En consecuencia a lo anterior, se informa al usuario de forma explícita que:
    		<br><br>			
			a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La clave es intransferible.
			<br><br>		
			b)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La clave se utilizará única y exclusivamente para las acciones a realizar en el área asignada.
			<br><br>
			c)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Es responsabilidad del usuario el manejo que le dé a la clave.
    	</p>
    	<p>
    		El usuario, sabedor de la responsabilidad que adquiere al aceptar la clave, se hace responsable a partir de esta fecha, de cualquier acción o actividad que sea realizada mediante el uso de la clave que se asigna en este acto. De igual forma y en caso de que: (I) Por el uso indebido que haga el usuario con la clave asignada y en consecuencia haya un detrimento patrimonial hacia Crédito Maestro;  (II) el usuario utilice la clave para realizar acciones que no hayan sido autorizadas por Crédito Maestro;  y (III) el usuario revele a terceros que no tengan relación laboral, información a la cual tenga acceso y pertenece a Crédito Maestro. En caso de incurrir en alguna de estas faltas el usuario se obliga, a elección de Crédito Maestro, a pagar a ésta última, daños y perjuicios, en un plazo no mayor a 15 (quince)  días hábiles siguientes a la fecha en que sea notificado y requerido de tal obligación, sin previo aviso judicial.
    	</p>
    	<p>
    		Conforme con su contenido, consecuencia, alcance y no existiendo vicio alguno que pudiera invalidarlo, el usuario ratifica y firma el presente documento, en la Ciudad de México, a {{ $date }}.
    	</p>
    </div>
    <div class="signature">
    	_________________________________________
    	<br>
		{{ $name }}
    </div>
</fieldset>