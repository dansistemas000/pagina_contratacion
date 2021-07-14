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
				width: 200px;
			}
			
		</style>
	</head>
	<body>
		<p class="big-text">NUEVO CANDIDATO A FUERZAMAESTRA</p>
		<div class="cm">
			<img src="{{ $message->embed('img/email_logo.png') }}">
		</div>
		<p>
			Un nuevo candidato ha sido registrado de la campaña {{ $data["campaign_id"] }} de reclutamiento.
		</p>
		<p>Datos para dar seguimiento a la contratación:</p>
		<p><strong>Nombre: {{ $data['name'] }}</strong></p>
		<p><strong>Teléfono: {{ $data['phone'] }}</strong></p>
		<p><strong>Correo electrónico: {{ $data['adviserEmail'] }}</strong></p>
		<br />
	</body>
</html>
