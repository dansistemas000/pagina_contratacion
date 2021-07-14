<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
		.big-text{
			font-size: 20px;
			font-weight: bold;
		}
		img{
			height: 140px;
		}
	</style>
</head>
<body>
	<img src="{{ $message->embed('img/email_logo.png') }}">
	<p class="big-text">Proceso de selección de candidato</p>
	<p>Hola <strong>{{ $data['name'] }}</strong></p>
	<p>
	Para poder finalizar con tu proceso, es necesario te presentes a tu sucursal para poder firmar contrato con una copia de los siguientes documentos:
	</p>
	<p><strong>1.-Acta de nacimiento</strong></p>
	<p><strong>2.-Credencial de elector</strong></p>
	<p><strong>3.-CURP</strong></p>
	<p><strong>4.-RFC con homoclave (emitida por el SAT)</strong></p>
	<p><strong>5.-Comprobante de domicilio (no mayor a 3 meses)</strong></p>
	<p>Tu sucursal es: <strong>{{ $data['branch_office'] }}</strong></p>
	<p>Dirección de tu sucursal es: <strong>{{ $data['branch_office_address'] }}</strong></p>

	<br />
	<br />
	<p class="big-text">Recibe un afectuoso saludo, Fuerza Maestra</p>
	<br />	
</body>
</html>