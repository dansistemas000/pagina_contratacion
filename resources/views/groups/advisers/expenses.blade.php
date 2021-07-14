<div class="family-income">
	<form action="expenses_register" method="post">
	<input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
	<input type="hidden" name="user-id" value="{{ $session['user_id'] }}">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						<h2>Ingresos familiares</h2>
					</div>
					<p>Favor de llenar todos los campos, en caso de no aplicar, colocar cero.</p>
					@if(isset($error_message))
						<div class="result error-result">
							<span class='exit'><i class='fa fa-times'></i></span>
							{{ $error_message }}
						</div>
					@endif
				</div>
			</div>
				@include('groups.advisers.expenses_form')
			<div class="row">
				<div class="col-md-6"></div>
				<div class="col-md-6">
					<button class="btn btn-success btn-block redirect">
	                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
	                    	Enviar
	                </button>
				</div>
			</div>
		</div>
	</form>
</div>