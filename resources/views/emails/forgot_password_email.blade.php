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
	<p class="big-text">¿ Olvidaste tu contraseña de acceso del portal Fuerza Maestra ?</p>
	<p>Hola <strong>{{ $data['name'] }}</strong></p>
	@if($data['type'] == "reset")
		<p>
		Hemos recibido la solicitud para resetear la contraseña del correo {{ $data['user'] }} y hemos creado una nueva contraseña para ti.
		</p>
	@else
		<p>
		Hemos recibido la solicitud para recordar la contraseña del correo {{ $data['user'] }}.
		</p>
	@endif
	
	<p>Tus contraseña es:<strong>{{ $data['password'] }}</strong></p>
	<p><strong>Da clic en esta liga para que accedas: {{ $data['root'] }}/login</strong></p>
	<br />
	<br />
	<p class="big-text">Saludos, Fuerza Maestra</p>
	<br />	
</body>
</html>