<div>
	<form action="branch_office_update" method="post">
		<input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
		<input class="row-update" value="branch_office" type="hidden">
		<input name="branch-office-id" class="id" type="hidden" value="{{ $branch_office_data->branch_office_id }}">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						<h2>Datos principales de la sucursal</h2>
					</div>
				</div>
				<div class="col-md-12">
					<div class="result"></div>
				</div>
				<div class="col-md-4">
					<div class="input-container">
			            <span class='input-title'>Nombre</span>
			            <input text-type="name" class="input-text validate-text" 
			            maxlength="50" name="branch-office-name" 
			            value="{{ $branch_office_data->branch_office_name }}" required>
			        </div>
				</div>
				<div class="col-md-4">
					<div class="input-container">
			            <span class='input-title'>Código</span>
			            <input text-type="number" class="input-text validate-text" maxlength="10" name="code" value="{{ $branch_office_data->code }}" required>
			        </div>
				</div>
				<div class="col-md-4">
					<div class="input-container">
						<span class='input-title'>Estado</span>
						<select class="select validate-select state auto-select" 
		                    data="{{ $branch_office_data->state }}" name="state-id">
		                    <option value="0"></option>
		                </select>
		            </div>
	            </div>
				<div class="col-md-12">
			        <div class="input-container">
			            <span class='input-title'>Dirección</span>
			            <input text-type="description" class="input-text validate-text" maxlength="750" name="address" 
			            value="{{ $branch_office_data->address }}" required>
			        </div>
			    </div>
			</div>
			<div class="row">
				<div class="col-md-12"><br></div>
				<div class="col-md-4"></div>
			    <div class="col-md-4">
			        <button class="btn btn-success btn-block send">
			            <i class="fa fa-pencil" aria-hidden="true"></i>
			                Editar
			        </button>
			    </div>
			    <div class="col-md-4"></div>
			</div>
		</div>
	</form>
</div>