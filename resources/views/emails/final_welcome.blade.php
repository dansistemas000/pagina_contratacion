@php
	$server = $_SERVER['SERVER_NAME'];

	$array_email = explode("@",$data["email"]);

	$server_email = $array_email[1];

	$server_email = explode(".", $server_email);

	$server_email = $server_email[0];

	$outlook_style = "";
	$um_outlook_style = "";

	$message_yahoo = "";

	if($server_email == "hotmail" || $server_email == "outlook"){
		$outlook_style = "outlook_style";
		$um_outlook_style = "um_outlook_style";
	}

	if($server_email == "yahoo"){
		$message_yahoo = "para ver correctamente este correo de clic en mostrar imagen.";
	}

	if($server == "localhost"){
		$server = "http://www.fuerzamaestra.com/img/fondo_bienvenida.png";
	}else{
		$server = "http://".$_SERVER['SERVER_NAME']."/img/fondo_bienvenida.png";
	}
@endphp

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
		
		.container{
			height: 560px;
			width: 400px;
			float: left;
			margin-left: 325px;
			padding-top: 30px;
		}
		.name{
		    font-size: 15px;
		    font-family: arial;
		    color: white;
		    padding-left: 65px;
		    font-weight: bold;

		}


		.num{
			margin-top: 130px;
			margin-left: 30px;
			height: 20px;
		    font-size: 20px;
		    font-family: arial;
		    color: white;
		    font-weight: bold;
		    width: 150px;
    		text-align: center;
		}

		.outlook_style{
			margin-top: 140px;
		}

		.um{
			font-size: 12px;
			margin-left: 140px;
			margin-top: 90px;
			font-family: arial;
			font-weight: bold;
			line-height: 1.365em;
		}

		.um_outlook_style{
			margin-top: 85px;
		}

		.pv{
			font-size: 12px;
			margin-left: 140px;
			margin-top: 48px;
			font-family: arial;
			font-weight: bold;
			line-height: 1.365em;
		}
		.mz{
			font-size: 12px;
			margin-left: 140px;
			margin-top: 62px;
			font-family: arial;
			font-weight: bold;
			line-height: 1.365em;
		}


	</style>
</head>
<body>
	<div><strong>{{ $message_yahoo }}</strong></div>
	<table width="800" height="600" border="0"  background="{{ $server }}">
	  <tr>
	    <td>
	 		<div class="container">
				<div class="name">{{ $data["name"] }}</div>
				<div class="num {{ $outlook_style }}">{{ $data["agreement_num"] }}</div>
				<div class="um {{ $um_outlook_style }}">
					<div><a href="http://www.universidadmaestra.com">http://www.universidadmaestra.com</a></div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data["email"] }}</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					{{ $data["agreement_num"] }}</div>
				</div>
				<div class="pv">
					<div><a href="http://www.portaldeventas.mx">www.portaldeventas.mx</a></div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data["email"] }}</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					{{ $data["email"] }}</div>
				</div>
				<div class="mz">
					<div>Manzapp (desgargar desde Google Play)</div>
				</div>
			</div>
		</td>
	  </tr>
	</table>

	
</body>
</html>
