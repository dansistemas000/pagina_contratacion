<div>
	<form action="user_update" method="post">
		<input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
		<input class="row-update" value="user" type="hidden">
		<input name="user-id" class="id" type="hidden" value="{{ $user_data->user_id }}">
		<input name="group-id" type="hidden" value="{{ $user_data->group_id }}">
		<input name="districts" type="hidden" class="group-checkbox-value" value="{{ $district_ids }}">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						<h2>Datos principales del usuario</h2>
					</div>
				</div>
				<div class="col-md-12">
					<div class="result"></div>
				</div>
				<div class="col-md-4">
					<div class="input-container">
			            <span class='input-title'>Nombre(s)</span>
			            <input text-type="name" class="input-text validate-text" maxlength="50" 
			            name="first-name" value="{{ $user_data->first_name }}" required>
			        </div>
				</div>
				<div class="col-md-4">
					<div class="input-container">
			            <span class='input-title'>Apellidos(s)</span>
			            <input text-type="name" class="input-text validate-text" maxlength="50" 
			            name="last-name" value="{{ $user_data->last_name }}" required>
			        </div>
				</div>
				<div class="col-md-4">
					<div class="input-container">
			            <span class='input-title'>Telefono</span>
			            <input text-type="number" class="input-text validate-text" maxlength="20" 
			            name="phone" value="{{ $user_data->phone }}" required>
			        </div>
				</div>
				<div class="col-md-4">
			        <div class="input-container">
			            <span class='input-title'>Correo electrónico para inicio de sesión</span>
			            <input text-type="email" class="input-text validate-text" maxlength="100" 
			            name="email" value="{{ $user_data->email }}" required>
			        </div>
			    </div>
					<div class="col-md-4">
					<div class="input-container">
			            <span class='input-title'>Seleccione su sexo</span>
			            <select class="select validate-select auto-select"
			                data="{{ $user_data->gender }}"  name="gender">
			                <option value="0"></option>
			                <option value="Femenino">Femenino</option>
			                <option value="Masculino">Masculino</option>
			            </select>
			        </div>
				</div>
				<div class="col-md-4">
					@switch($user_data->group_id)
						@case(1) <!-- administrador de documentos -->
							<div class="input-container">
								<span class="input-title input-title-top">Seleccione el o los distrito(s) a cargo</span>
								<div class='group-checks'></div>
				            </div>
						@break
						@case(16) <!-- director -->
							<div class="input-container">
								<span class='input-title'>Seleccione dirección</span>
								<select class="select validate-select sub_management auto-select" 
				                    data="{{ $user_data->sub_management }}" name="sub-management-id">
				                    <option value="0"></option>
				                </select>
				            </div>
						@break
						@case(19) <!-- cordinador -->
							<div class="input-container">
								<span class='input-title'>Seleccione sucursal</span>
								<select class="select validate-select branch-offices auto-select" 
				                    data="{{ $user_data->branch_office }}" name="branch-office-id">
				                    <option value="0"></option>
				                </select>
			            	</div>
						@break
						@case(20) <!-- estatal -->
							<div class="input-container">
								<span class='input-title'>Seleccione estado</span>
								<select class="select validate-select state auto-select" 
				                    data="{{ $user_data->state }}" name="state-id">
				                    <option value="0"></option>
				                </select>
				            </div>
						@break
						@case(21) <!-- distrito -->
							<div class="input-container">
								<span class='input-title'>Seleccione distrito</span>
								<select class="select validate-select district auto-select" 
				                    data="{{ $user_data->district }}" name="district-id">
				                    <option value="0"></option>
				                </select>
				            </div>
						@break
					@endswitch
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
	<form action="change_pass" method="post">
		<input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
		<input name="user-id" class="user-id" type="hidden" value="{{ $user_data->user_id }}">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						<h4>Cambiar contraseña</h2>
					</div>
				</div>
				<div class="col-md-12">
					<div class="result"></div>
				</div>
				<div class="col-md-12">
					<p>Se recomienda que la nueva contraseña contenga al menos 1 mayúscula, 1 minúscula, 1 número y más de 8 caracteres de longitud.</p>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4">
			        <div class="input-container">
			            <span class='input-title'>Nueva contraseña</span>
			            <input text-type="alpha-numeric" type="password" 
			            class="input-text validate-text pass" 
			            maxlength="50" name="pass" required>
			        </div>
			    </div>
			    <div class="col-md-4"></div>
			    <div class="col-md-4"></div>
			    <div class="col-md-4">
			        <div class="input-container">
			            <span class='input-title'>Confirmar contraseña</span>
			            <input text-type="alpha-numeric" type="password" class="input-text validate-text pass-confirm" maxlength="50" name="pass-confirm" required>
			        </div>
			    </div>
			    <div class="col-md-4"></div>
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