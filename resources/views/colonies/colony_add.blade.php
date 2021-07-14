<form action="add_colony">
	<input type="hidden" name="country" value="{{ $country }}">
	<input type="hidden" name="postal_code" value="{{ $postal_code }}">
	<input type="hidden" name="town" value="{{ $town }}">
	<input type="hidden" name="state" value="{{ $state }}">
	<input type="hidden" name="code" value="{{ $code }}">
	<input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
	<input class="row-add" value="colony" type="hidden">
	<div class="row">
		<div class="col-md-12">
			<hr>
			<div class="well">
				<h6>Agregar colonia</h6>
			</div>
		</div>
		<div class="col-md-12">
			<div class="result"></div>
		</div>
		<div class="col-md-12">
			<div class="input-container">
				<span class='input-title'>Colonia</span>
				<input class="input-text validate-text" 
	                maxlength="100" name="colony" text-type='description' required>
			</div>
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<button class="btn btn-success btn-block send">
	            <i class="fa fa-address-card" aria-hidden="true"></i>
	                Agregar Colonia
	        </button>
		</div>
		<div class="col-md-3"></div>
	</div>
</form>