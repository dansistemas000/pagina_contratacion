@php

	if(!$permissions["m1_update_main_info"]) $block_main_info = "disabled";
	if(!$permissions["m1_update_family_expenses"]) $block_expenses = "disabled";
	if(!$permissions["m1_update_branch_office"]) $block_branch_office = "disabled";
	if(!$permissions["m1_update_work_experience"]) $block_experience = "disabled";
	if(!$permissions["m1_update_extra_info"]) $block_extra = "disabled";
	if(!$permissions["m1_update_status"]) $block_status = "block";
	if(!$permissions["m1_update_agreement_num"]) $block_adviser_number = "disabled";
	if(!$permissions["m1_update_email"]) $block_email = "disabled";

@endphp

<div class="information">
	<form action="adviser_update" method="post">
		<input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
		<input name="user-id" class="id" type="hidden" value="{{ $user_id }}">
		<input class="row-update" value="adviser" type="hidden">
		<div class="container">
			<div class="result"></div>
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						<h2>Información de candidato</h2>
					</div>
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
				        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
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
				                <a class="card-title" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				                    Experiencia laboral
				                    <span class="fa fa-angle-double-down"></span>
				                </a>
				            </h6>
				        </div>
				        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
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
				                <!-- Begin Container -->
								@include('groups.advisers.extra_information')
				                <!-- End container --> 
				            </div>
				        </div>
				    </div>
				</div>
			</div>
			@if($permissions["m1_update_main_info"] || $permissions["m1_update_family_expenses"] || 
				$permissions["m1_update_branch_office"] || $permissions["m1_update_extra_info"] || 
				$permissions["m1_update_status"] || $permissions["m1_update_agreement_num"] || 
				$permissions["m1_update_email"])
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
			@endif
		</div>
	</form>
</div>