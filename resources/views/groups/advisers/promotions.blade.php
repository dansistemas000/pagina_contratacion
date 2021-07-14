<div class="promotions">
	<form action="promotions_register" method="post">
		<input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
		<input type="hidden" name="user-id" value="{{ $session['user_id'] }}">
		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title">
					<h4>En Crédito Maestro realizamos sueños, cual es el tuyo.</h4>
				</div>
				<p>
					Selecciona tu sueño, da clic en la imagen que ilustre mejor tu sueño.
				</p>
				<div class="input-container">
	                <input type="hidden" name="promotions" class="promotions validate-hidden"
	                value="" required data="Seleccione una imagen">
	            </div>
				@if(isset($error_message))
					<div class="result error-result">
						<span class='exit'><i class='fa fa-times'></i></span>
						{{ $error_message }}
					</div>
				@endif
			</div>
			<div class="col-lg-4 col-md-6">
				<h5>Educación</h5>
				<img src="img/education_promotion.jpg" data="Educación" class="promotion-img" alt="">
				<hr>
			</div>
			<div class="col-lg-4 col-md-6">
				<h5>Automovil</h5>
				<img src="img/car_promotion.jpg" data="Automovil" class="promotion-img" alt="">
				<hr>
			</div>
			<div class="col-lg-4 col-md-6">
				<h5>Ahorro</h5>
				<img src="img/saving_promotion.jpg" data="Ahorro" class="promotion-img" alt="">
				<hr>
			</div>
			<div class="col-lg-4 col-md-6">
				<h5>Vivienda</h5>
				<img src="img/home_promotion.jpg" data="Vivienda" class="promotion-img" alt="">
				<hr>
			</div>
			<div class="col-lg-4 col-md-6">
				<h5>Seguro médico</h5>
				<img src="img/health_promotion.jpg" data="Seguro médico" class="promotion-img" alt="">
				<hr>
			</div>
			<div class="col-lg-4 col-md-6">
				<h5>Dinero</h5>
				<img src="img/money_promotion.jpg" data="Dinero" class="promotion-img" alt="">
				<hr>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<button class="btn btn-success btn-block redirect">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    	Enviar
                </button>
			</div>
		</div>
	</form>
</div>