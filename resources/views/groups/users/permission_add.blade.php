<div class="container">
	<div class="row">
		@foreach($groups as $value)
			<div class="col-md-12">
				<div class="card">
			        <div class="card-header" role="tab">
			            <h6>
			                <a class="card-title get-permission" data-toggle="collapse" data-parent="#accordion"
			                href="#{{ $value->id }}" aria-expanded="false" 
			                aria-controls="{{ $value->id }}">
			                    Permisos de {{ $value->name }}
			                    <span class="fa fa-angle-double-down"></span>
			                </a>
			            </h6>
			        </div>
			        <div id="{{ $value->id }}" class="collapse" role="tabpanel" 
			        	aria-labelledby="{{ $value->id }}">
			            <div class="card-body">
			                <!-- Begin Container -->
			                <div class="process-result">
			                	<i class='fa fa-spinner fa-pulse'></i>
        						<span>Espere un momento, procesando datos...</span>
			                </div>
			                <!-- End container --> 
			            </div>
			        </div>
			    </div>
			</div>
		@endforeach
	</div>
</div>