@php
	use App\Advisers_Documents;
	$session = \Session::get('fuerza_maestra_session_user');
	$advisers_documents = Advisers_Documents::where("user_id","=",$user_id)->first();
@endphp

<div class="documents-edvisers">
	<form action="documents_update" method="post" enctype="multipart/form-data">
	<input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
	<input type="hidden" name="user-id" class="id" value="{{ $user_id }}">
	<input class="row-update" value="adviser" type="hidden">
		<div class="container">
			<div class="result"></div>
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						<h2>Documentos de {{ $name }}</h2>
					</div>
				</div>
			</div>
				@include('groups.advisers.documents_form')
			<div class="row">
				<div class="col-md-12"><hr></div>
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<button class="btn btn-success btn-block send">
	                    <i class="fa fa-upload" aria-hidden="true"></i>
	                    	Cargar
	                </button>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</form>
</div>