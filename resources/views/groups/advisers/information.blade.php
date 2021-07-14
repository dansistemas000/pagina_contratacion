@if(isset($block))
    @php
        $hidden = "d-none";
        $block_main_info = "disabled";
        $block_expenses = "disabled";
        $block_branch_office = "disabled";
        $block_extra = "disabled";
        $block_status = "block";
        $block_adviser_number = "disabled";
        $block_email = "disabled";
        $postal_code = "readonly";
        $block_experience = "disabled";
    @endphp
@endif
@if(!isset($block))
	@php($hidden = "")
@endif

<div class="information">
	<form action="extra_info_register" method="post">
		<input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
		<input name="user-id" type="hidden" value="{{ $session['user_id'] }}">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						<h2>Información de candidato</h2>
					</div>
						<h6 class="{{ $hidden }}">
							Por favor, complete la información faltante.
						</h6>
					<div class="result"></div>
					@if(isset($error_message))
						<div class="result error-result">
							<span class='exit'><i class='fa fa-times'></i></span>
							{{ $error_message }}
						</div>
					@endif
					@if(isset($message))
						<div class="result success-result">
							<span class='exit'><i class='fa fa-times'></i></span>
							{{ $message }}
						</div>
					@endif
				</div>
				<div class="col-md-12">
					<div class="card">
				        <div class="card-header" role="tab">
				            <h6>
				                <a class="card-title" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				                    Información principal del candidato
				                    <span class="fa fa-angle-double-down"></span>
				                </a>
				            </h6>
				        </div>
				        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
				            <div id="card-body-two" class="card-body">
				                <!-- Begin Container -->
				                @include('groups.advisers.main_info_form')
				                <!-- End container --> 
				            </div>
				        </div>
				    </div>
				</div>
				<div class="col-md-12">
					<div class="card">
				        <div class="card-header" role="tab">
				            <h6>
				                <a class="card-title" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				                    Ingresos familiares
				                    <span class="fa fa-angle-double-down"></span>
				                </a>
				            </h6>
				        </div>
				        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
				            <div id="card-body-two" class="card-body">
				                <!-- Begin Container -->
								@include('groups.advisers.expenses_form')
				                <!-- End container --> 
				            </div>
				        </div>
				    </div>
				</div>
				<div class="col-md-12">
					<div class="card">
				        <div class="card-header" role="tab">
				            <h6>
				                <a class="card-title" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				                    Sucursal
				                    <span class="fa fa-angle-double-down"></span>
				                </a>
				            </h6>
				        </div>
				        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
				            <div id="card-body-two" class="card-body">
				                <!-- Begin Container -->
								@include('groups.advisers.branch_office_form')
				                <!-- End container --> 
				            </div>
				        </div>
				    </div>
				</div>
				<div class="col-md-12">
					<div class="card">
				        <div class="card-header" role="tab">
				            <h6>
				                <a class="card-title card-title-select" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				                    Experiencia laboral
				                    <span class="fa fa-angle-double-down"></span>
				                </a>
				            </h6>
				        </div>
				        <div id="collapseFour" class="collapse show" role="tabpanel" aria-labelledby="headingTwo">
				            <div id="card-body-two" class="card-body">
				                <!-- Begin Container -->
								@include('groups.advisers.work_experience')
				                <!-- End container --> 
				            </div>
				        </div>
				    </div>
				</div>
				<div class="col-md-12">
					<div class="card">
				        <div class="card-header" role="tab">
				            <h6>
				                <a class="card-title card-title-select" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
				                    Información adicional
				                    <span class="fa fa-angle-double-down"></span>
				                </a>
				            </h6>
				        </div>
				        <div id="collapseFive" class="collapse show" role="tabpanel" aria-labelledby="headingTwo">
				            <div id="card-body-two" class="card-body">
								<div class="row">
					            	<div class="col-md-12">
										<p class="{{ $hidden }}">
											Favor de registrar la información exactamente igual a tu comprobante de domicilio vigente.
										</p>
									</div>
								</div>
				                <!-- Begin Container -->
								@include('groups.advisers.extra_information')
				                <!-- End container --> 
				            </div>
				        </div>
				    </div>
				</div>
			</div>
			<div class="row {{ $hidden }}">
				<div class="col-md-12"><br></div>
				<div class="col-md-4"></div>
			    <div class="col-md-4">
			        <button class="btn btn-success btn-block redirect">
			            <i class="fa fa-paper-plane" aria-hidden="true"></i>
			                Enviar
			        </button>
			    </div>
			    <div class="col-md-4"></div>
			</div>
		</div>
	</form>
</div>