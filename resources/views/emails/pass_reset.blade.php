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
	<p class="big-text">Fuerza Maestra</p>
	<p>Hola <strong>{{ $data['name'] }}</strong></p>
	<p>
		Hemos recibido la solicitud para resetear la clave del correo {{ $data['email'] }} y hemos creado una nueva clave.
	</p>
	<p><strong>Clave: {{ $data['pass'] }}</strong></p>
	<br />
	<br />
	<p class="big-text">Saludos, Fuerza Maestra</p>
	<br />	
</body>
</html>