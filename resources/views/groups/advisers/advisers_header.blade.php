<div class="advisers-header">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  	<a class="navbar-brand logo" href="advisers">Fuerza Maestra</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" 
	  		data-target="#navbarSupportedContent" 
	  		aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      	<li class="nav-item">
					<div class="nav-user" data-toggle="tooltip" 
					 title="Estatus: {{ $data_advisers->status }}">
						@if($session["gender"] == "Femenino")
							<img class="gender" src="icon/female.png">
							<strong>Bienvenida {{ $session["name"] }}</strong>
				      	@else
							<img class="gender" src="icon/male.png">
							<strong>Bienvenido {{ $session["name"] }}</strong>
				      	@endif
					</div>
					<a class="btn-navbar" href="logout" title="Cerrar Sesión" data-toggle="tooltip">
	                   <i class="fa fa-sign-out"></i>                        
	                </a>
		      	</li>
		    </ul>
		</div>
	</nav>
</div>