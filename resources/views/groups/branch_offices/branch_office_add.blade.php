<form action="branch_office_insert" method="post">
	<input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title">
					<h2>Agregar sucursal</h2>
				</div>
			</div>
			<div class="col-md-12">
				<div class="result"></div>
			</div>
			<div class="col-md-12">
				<div class="well">
					<h6>Datos principales</h6>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-container">
		            <span class='input-title'>Nombre</span>
		            <input text-type="name" class="input-text validate-text" 
		            maxlength="50" name="branch-office-name" value="" required>
		        </div>
			</div>
			<div class="col-md-4">
				<div class="input-container">
		            <span class='input-title'>Código</span>
		            <input text-type="number" class="input-text validate-text" 
		            maxlength="10" name="code" value="" required>
		        </div>
			</div>
			<div class="col-md-4">
				<div class="input-container">
					<span class='input-title'>Estado</span>
					<select class="select validate-select state" name="state-id">
	                    <option value="0"></option>
	                </select>
	            </div>
            </div>
			<div class="col-md-12">
		        <div class="input-container">
		            <span class='input-title'>Dirección</span>
		            <input text-type="description" class="input-text validate-text" maxlength="750" name="address" value="" required>
		        </div>
		    </div>
		</div>
		<div class="row">
			<div class="col-md-12"><br></div>
			<div class="col-md-4"></div>
		    <div class="col-md-4">
		        <button class="btn btn-success btn-block send">
		            <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
		                Añadir Sucursal
		        </button>
		    </div>
		    <div class="col-md-4"></div>
		</div>
	</div>
</form>