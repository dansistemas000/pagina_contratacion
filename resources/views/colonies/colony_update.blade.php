<form action="colony_update">
	<input type="hidden" name="id" class="id" value="{{ $colony_data->id }}">
	<input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
	<input class="row-update" value="colony" type="hidden">
	<div class="row">
		<div class="col-md-12">
			<div class="result"></div>
		</div>
		<div class="col-md-12">
			<div class="input-container">
				<span class='input-title'>Colonia</span>
				<input class="input-text validate-text" value="{{ $colony_data->colony }}"
	                maxlength="100" name="colony" text-type='description' required>
			</div>
		</div>
		<div class="col-md-12">
			<button class="btn btn-success btn-block send">
		        <i class="fa fa-edit" aria-hidden="true"></i>
	                Editar Colonia
		    </button>
		</div>
	</div>
</form>