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
	<p class="big-text">NUEVO CANDIDATO EN SU SUCURSAL</p>
	<img src="{{ $message->embed('img/email_logo.png') }}">
	<p>Hola sucursal <strong>{{ $data['branch_office'] }}</strong></p>
	<p>
		Por medio de la presente le hago llegar los datos principales de un nuevo candidato registrado en la sucursal que usted coordina por si quiere contactarlo.
	</p>
	<p>Datos del candidato:</p>
	<p>Nombre: <strong>{{ $data['name'] }}</strong></p>
	<p>Teléfono: <strong>{{ $data['phone'] }}</strong></p>
	<p>Correo electrónico: <strong> {{ $data['adviser_email'] }}</strong></p>
	<p>Estado: <strong>{{ $data['state'] }}</strong></p>
	<p>Delegación o municipio: <strong>{{ $data['town'] }}</strong></p>
	<p>Código postal: <strong>{{ $data['postal-code'] }}</strong></p>	
	<p>Colonia: <strong>{{ $data['colony'] }}</strong></p>
	<p>Experiencia: <strong>{{ $data['experience'] }}</strong></p>
	<br />
	<br />
</body>
</html>
