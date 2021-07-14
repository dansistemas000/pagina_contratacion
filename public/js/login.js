//funcion para llamar vista de olvido su contraseña
$(document).on('click','.forgot-password',function(e){
	  e.preventDefault();
	  route = "view_forgot_password";
	  $.get(route,function(result){
		$(".login-container").html(result);
		adapt_size();
	});
});

//funcion para llamar vista de iniciar sesion
$(document).on('click','.return-login',function(e){
	  e.preventDefault();
	  route = "view_login";
	  $.get(route,function(result){
		$(".login-container").html(result);
		adapt_size();
	});
});

