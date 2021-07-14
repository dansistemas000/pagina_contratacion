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
	<p class="big-text">BIENVENIDO A LA FAMILIA CREDITO MAESTRO</p>
	<img src="{{ $message->embed('img/email_logo.png') }}">
	<img src="{{ $message->embed('img/email_logo_person.png') }}">
	<p>Hola <strong>{{ $data['name'] }}</strong></p>
	<p>
		Por medio de la presente te hago llegar tus datos de acceso para que regreses a la página y finalices tu registro.
	</p>
	<p>Tus datos de acceso son:</p>
	<p><strong>Liga: {{ $data['root'] }}/login</strong></p>
	<p><strong>Usuario: {{ $data['user'] }}</strong></p>
	<p><strong>Clave: {{ $data['pass'] }}</strong></p>
	<br />
	<br />
	<p class="big-text">Bienvenido nuevamente y que tengas "MUCHO ÉXITO"</p>
	<br />	
</body>
</html>
