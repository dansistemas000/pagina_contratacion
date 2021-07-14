<form action="user_insert" method="post">
	<input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
	<input name="districts" type="hidden" class="group-checkbox-value" value="">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title">
					<h2>Agregar usuario</h2>
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
			<div class="col-md-6">
				<div class="input-container">
		            <span class='input-title'>Nombre(s)</span>
		            <input text-type="name" class="input-text validate-text" maxlength="50" 
		            name="first-name" value="" required>
		        </div>
			</div>
			<div class="col-md-6">
				<div class="input-container">
		            <span class='input-title'>Apellidos(s)</span>
		            <input text-type="name" class="input-text validate-text" maxlength="50" 
		            name="last-name" value="" required>
		        </div>
			</div>
			<div class="col-md-6">
				<div class="input-container">
		            <span class='input-title'>Teléfono</span>
		            <input text-type="number" class="input-text validate-text" maxlength="20" 
		            name="phone" value="">
		        </div>
			</div>
			<div class="col-md-6">
		        <div class="input-container">
		            <span class='input-title'>Correo electrónico</span>
		            <input text-type="email" class="input-text validate-text" maxlength="100" 
		            name="email" value="" required>
		        </div>
		    </div>
		    <div class="col-md-6">
				<div class="input-container">
		            <span class='input-title'>Seleccione su sexo</span>
		            <select class="select validate-select" name="gender">
		                <option value="0"></option>
		                <option value="Femenino">Femenino</option>
		                <option value="Masculino">Masculino</option>
		            </select>
		        </div>
			</div>
			<div class="col-md-6">
				<div class="input-container">
                    <input type="checkbox" name="email-send" value="1" checked class="chekbox">
                    Notificar al Usuario por Correo
                </div>
			</div>
			<div class="col-md-12">
				<div class="well">
					<h6>Contraseña</h6>
				</div>
			</div>
		    <div class="col-md-12">
				<p>Se recomienda que la nueva contraseña contenga al menos 1 mayúscula, 1 minúscula, 1 número y más de 8 caracteres de longitud.</p>
			</div>
		    <div class="col-md-6">
		    	<div class="input-container">
		            <span class='input-title'>Nueva contraseña</span>
		            <input text-type="alpha-numeric" type="password" 
		            class="input-text validate-text pass" 
		            maxlength="50" name="pass" required>
		        </div>
		    </div>
		    <div class="col-md-6">
		    	<div class="input-container">
		            <span class='input-title'>Confirmar contraseña</span>
		            <input text-type="alpha-numeric" type="password" class="input-text validate-text pass-confirm" maxlength="50" name="pass-confirm" required>
		        </div>
		    </div>
			<div class="col-md-12">
				<div class="well">
					<h6>Datos de usuario</h6>
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-container">
					<span class='input-title'>Grupo</span>
					<select class="select validate-select group" name="group-id">
	                    <option value="0"></option>
	                </select>
	            </div>
			</div>
			<div class="col-md-6 sub-management-container d-none group-type">
				<div class="input-container">
					<span class='input-title'>Seleccione dirección</span>
					<select class="select validate-select sub_management"
					name="sub-management-id">
	                    <option value="0"></option>
	                </select>
	            </div>
			</div>
			<div class="col-md-6 branch-office-container d-none group-type">
				<div class="input-container">
					<span class='input-title'>Seleccione sucursal</span>
					<select class="select validate-select branch-offices" 
	                    name="branch-office-id">
	                    <option value="0"></option>
	                </select>
            	</div>
			</div>
			<div class="col-md-6 state-container d-none group-type">
				<div class="input-container">
					<span class='input-title'>Seleccione estado</span>
					<select class="select validate-select state" 
	                    name="state-id">
	                    <option value="0"></option>
	                </select>
	            </div>
			</div>
			<div class="col-md-6 district-container d-none group-type">
				<div class="input-container">
					<span class='input-title'>Seleccione distrito</span>
					<select class="select validate-select district" 
	                    name="district-id">
	                    <option value="0"></option>
	                </select>
	            </div>
			</div>
			<div class="col-md-6 district-container-check d-none group-type">
				<div class="input-container">
					<span class="input-title">Seleccione el o los distrito(s) a cargo</span>
					<div class='group-checks'></div>
	            </div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12"><br></div>
			<div class="col-md-4"></div>
		    <div class="col-md-4">
		        <button class="btn btn-success btn-block send">
		            <i class="fa fa-user-plus" aria-hidden="true"></i>
		                Añadir Usuario
		        </button>
		    </div>
		    <div class="col-md-4"></div>
		</div>
	</div>
</form>