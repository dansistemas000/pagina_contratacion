@php
	$group_id = $permissions["group_id"];
	$count = 1;
	$permissions_array = ['m1_update_main_info' 
							=> 'Actualizar datos de información principal del candidato',
						'm1_update_family_expenses' 
							=> 'Actualizar datos de ingresos familiares del candidato',
						'm1_update_branch_office' 
							=> 'Actualizar datos de sucursal del candidato',
						'm1_update_work_experience' 
							=> 'Actualizar datos de experiencia laboral del candidato',
						'm1_update_extra_info' 
							=> 'Actualizar datos extra del candidato',
						'm1_update_status' 
							=> 'Actualizar estatus del candidato',
						'm1_update_agreement_num' 
							=> 'Actualizar número de asesor del candidato',
						'm1_update_email' 
							=> 'Actualizar correo electrónico del candidato',
						'm1_update_documents' 
							=> 'Actualizar documentos del candidato',
						'm1_see_advisers_data' 
							=> 'Ver datos del candidato',
						'm1_adviser_rejected' 
							=> 'Rechazar candidato',
						'm1_print_kit' 
							=> 'Imprimir kit de contratación del candidato',
						'm1_download_pdf_excel' 
							=> 'Descargar listas en formato pdf o excel de los candidatos',
						'm1_add_training' 
							=> 'Agregar capacitación a candidato',
						'm1_add_converted' 
							=> 'Agregar conversión a candidato',
						'm1_pass_reset' 
							=> 'Resetear contraseña a candidato',
						'm1_pass_resend' 
							=> 'Reenviar usuario/contraseña a candidato',
						'm1_adviser_delete' 
							=> 'Eliminar candidato',
						'm1_responsive_print' 
							=> 'Descarga de responsiva',
						'm2_user_list' 
							=> 'Ver lista de usuarios',
						'm2_user_add' 
							=> 'Agregar nuevo usuario',
						'm2_permission_add' 
							=> 'Actualizar permisos a grupos',
						'm3_branch_office' 
							=> 'Ver lista de sucursales',
						'm3_branch_office_add' 
							=> 'Agregar sucursal',
						'm4_stadistics' 
							=> 'Menú estadísticas',
						'm4_organization' 
							=> 'Menú distribución',
						'm5_colony' 
							=> 'Menú colonias'
						];
@endphp
<div class="container">
	<form action="permissions_update" method="post">
		<input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
		<input name="group-id" type="hidden" value="{{ $group_id }}">
		<div class="row">
			<div class="col-md-12"><div class="result"></div></div>
			<div class="col-md-12">
				<div class="well">
					<h6>Módulos candidatos</h6>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					@foreach($permissions as $key => $value)
						@php($name = explode("_",$key))
						@if($name[0] == "m1")
							<div class="col-md-1"></div>
							<div class="col-md-7">
				                <div class="text-left">
									<strong>{{ $permissions_array[$key] }}</strong>
								</div>
							</div>
							<div class="col-md-4">
								<div class="pull-center">
									<div class="onoffswitch2">
										@if($value == 1)
											<input name="{{ $key }}" class="hidden" 
												type="hidden" value="1">
				                            <input type="checkbox" 
				                            	class="onoffswitch2-checkbox permission" 
				                            	id="m1{{ $group_id.$count }}" checked>
				                        @else
				                        	<input name="{{ $key }}" class="hidden" 
												type="hidden" value="0">
				                            	<input type="checkbox"                            
				                            class="onoffswitch2-checkbox permission" 
				                            id="m1{{ $group_id.$count }}">
				                        @endif
				                        <label class="onoffswitch2-label" 
				                        	for="m1{{ $group_id.$count }}">
				                            <span class="onoffswitch2-switch"></span>
				                            <span class="onoffswitch2-inner"></span>
				                        </label>
				                    </div>
				                </div>
				            </div>
							<div class="col-md-12"><div class="separator"></div></div>
							@php($count++)
						@endif
					@endforeach
					@php($count = 1)
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="well">
					<h6>Módulos usuarios</h6>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					@foreach($permissions as $key => $value)
						@php($name = explode("_",$key))
						@if($name[0] == "m2")
							<div class="col-md-1"></div>
							<div class="col-md-7">
				                <div class="text-left">
									<strong>{{ $permissions_array[$key] }}</strong>
								</div>
							</div>
							<div class="col-md-4">
								<div class="pull-center">
									<div class="onoffswitch2">
										@if($value == 1)
											<input name="{{ $key }}" class="hidden" 
												type="hidden" value="1">
				                            <input type="checkbox" 
				                            	class="onoffswitch2-checkbox permission" 
				                            	id="m2{{ $group_id.$count }}" checked>
				                        @else
				                        	<input name="{{ $key }}" class="hidden" 
												type="hidden" value="0">
				                            	<input type="checkbox"                            
				                            class="onoffswitch2-checkbox permission" 
				                            id="m2{{ $group_id.$count }}">
				                        @endif
				                        <label class="onoffswitch2-label" 
				                        	for="m2{{ $group_id.$count }}">
				                            <span class="onoffswitch2-switch"></span>
				                            <span class="onoffswitch2-inner"></span>
				                        </label>
				                    </div>
				                </div>
				            </div>
							<div class="col-md-12"><div class="separator"></div></div>
							@php($count++)
						@endif
					@endforeach
					@php($count = 1)
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="well">
					<h6>Módulos sucursales</h6>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					@foreach($permissions as $key => $value)
						@php($name = explode("_",$key))
						@if($name[0] == "m3")
							<div class="col-md-1"></div>
							<div class="col-md-7">
				                <div class="text-left">
									<strong>{{ $permissions_array[$key] }}</strong>
								</div>
							</div>
							<div class="col-md-4">
								<div class="pull-center">
									<div class="onoffswitch2">
										@if($value == 1)
											<input name="{{ $key }}" class="hidden" 
												type="hidden" value="1">
				                            <input type="checkbox" 
				                            	class="onoffswitch2-checkbox permission" 
				                            	id="m3{{ $group_id.$count }}" checked>
				                        @else
				                        	<input name="{{ $key }}" class="hidden" 
												type="hidden" value="0">
				                            	<input type="checkbox"                            
				                            class="onoffswitch2-checkbox permission" 
				                            id="m3{{ $group_id.$count }}">
				                        @endif
				                        <label class="onoffswitch2-label" 
				                        	for="m3{{ $group_id.$count }}">
				                            <span class="onoffswitch2-switch"></span>
				                            <span class="onoffswitch2-inner"></span>
				                        </label>
				                    </div>
				                </div>
				            </div>
							<div class="col-md-12"><div class="separator"></div></div>
							@php($count++)
						@endif
					@endforeach
					@php($count = 1)
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="well">
					<h6>Módulos informes</h6>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					@foreach($permissions as $key => $value)
						@php($name = explode("_",$key))
						@if($name[0] == "m4")
							<div class="col-md-1"></div>
							<div class="col-md-7">
				                <div class="text-left">
									<strong>{{ $permissions_array[$key] }}</strong>
								</div>
							</div>
							<div class="col-md-4">
								<div class="pull-center">
									<div class="onoffswitch2">
										@if($value == 1)
											<input name="{{ $key }}" class="hidden" 
												type="hidden" value="1">
				                            <input type="checkbox" 
				                            	class="onoffswitch2-checkbox permission" 
				                            	id="m4{{ $group_id.$count }}" checked>
				                        @else
				                        	<input name="{{ $key }}" class="hidden" 
												type="hidden" value="0">
				                            	<input type="checkbox"                            
				                            class="onoffswitch2-checkbox permission" 
				                            id="m4{{ $group_id.$count }}">
				                        @endif
				                        <label class="onoffswitch2-label" 
				                        	for="m4{{ $group_id.$count }}">
				                            <span class="onoffswitch2-switch"></span>
				                            <span class="onoffswitch2-inner"></span>
				                        </label>
				                    </div>
				                </div>
				            </div>
							<div class="col-md-12"><div class="separator"></div></div>
							@php($count++)
						@endif
					@endforeach
					@php($count = 1)
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
		    <div class="col-md-4">
		        <button class="btn btn-success btn-block send">
		            <i class="fa fa-key" aria-hidden="true"></i>
		                Actualizar permisos
		        </button>
		    </div>
			<div class="col-md-4"></div>
		</div>
	</form>
</div>
