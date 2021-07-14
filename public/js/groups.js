$(document).ready(function() {
	width = $( window ).width();
	// valida el tamaño de la ventana para adaptar menu
	if(width <= 991){
		$("body").removeClass("sidenav-toggled");
	}else{
	  	$("body").addClass("sidenav-toggled");
	}

	table = 0;
	table_load();
	

});
// funcion para crear tabla de jquery
function load_table(){
	if($('.data-table').length > 0){
		table = $('.data-table').DataTable({
    			"order": [],
    			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todas"]]
		});
	}
}
// funcion que manda llamar funcion de tooptip y dropdown al dar clic en paginacion de la tabla de jquery
$(document).on('click','.page-link',function() {
	$('.dropdown-toggle').dropdown();
	$('[data-toggle="tooltip"]').tooltip();
});


$(document).on('click','.button-react',function(){
	  url = $(this).attr("href");
      window.open(url, '_blank');
      return false;
});


$(document).on('blur','.sum',function() {
	element = $(this);
	income_family_sum(element);
});
//funcion para sumar los gastos dependientes economicos
function income_family_sum(element){
	container = element.closest(".expenses");
	subtotal = 0;
	total = 0;
	$(container.find(".sum")).each(function(){
		string = $(this).val();
		type = "decimal";
		pattern = return_pattern(type);
		for (i = 0; i < string.length; i++) {
			char = string.charAt(i);
		   	if (!char.match(pattern) || string == "."){
		   		$(this).val(0);
		   	}
		}
		val = $(this).val();
		val = ((val == "") ? 0 : val);
		val = parseFloat(val);
		subtotal = parseFloat(subtotal);
		subtotal = subtotal + val;
		container.find(".subtotal-sum").text(subtotal.toFixed(2));
	});
	$(".sum").each(function(){
		val = $(this).val();
		val = ((val == "") ? 0 : val);
		val = parseFloat(val);
		total = parseFloat(total);
		total = total + val;
		$(".total-sum").text(total.toFixed(2));
	});
}

// funcion que funciona al redimencionar pagina
$(window).resize(function() {
	  width = $( window ).width();
	  if(width <= 991){
	  	$("body").removeClass("sidenav-toggled");
	  }else{
	  	$("body").addClass("sidenav-toggled");
	  }
});

// funcion para cambiar icono del menu al dar clic
$(document).on('click','.navbar-toggler',function(){
	icon = $(this).find(".fa");
	icon.toggleClass("fa-caret-square-o-up");
});
// funcion para pegar informacion en modal
$(document).on('click','.show-modal',function(e){
	e.preventDefault();
	view = $(this).attr("view");
	title = $(this).find("span").text();

	if(title == ""){
		title = $(this).find("i").attr("data-original-title");
	}
	process_modal = "<div class='process-table'>"+
						"<i class='fa fa-spinner fa-pulse'></i>"+
						"<div>Procesando...</div>"+
					"</div>";
	$(".modal-body").html(process_modal);
	$.get(view,function(result){
		if(result.session_close){
			window.open(result.redirect,'_self');
			return false;
		}
		$(".modal-title").html(title);
   		$(".modal-body").html(result);
   		auto_load();
	});
});
// funcion para funcionamento de datepicker con los text-input
$(document).on('change','.datepicker',function() {
	container = $(this).closest(".input-container");
	container.find(".input-title").addClass("input-title-top");
	string = $(this).val();
	if(string == "") container.find(".input-title").removeClass("input-title-top");
});

// funcion para marcar titulo de las pestañas al dar clic
$(document).on('click','.card-title',function() {
	hasclass = $(this).hasClass("card-title-select");
	if(hasclass){
		$(this).removeClass("card-title-select");
	}else{
		$(this).addClass("card-title-select");
	}
});
// funcion para motrar que no existe imagen cuando no existe
function img_error(element){
	element.replaceWith('<div class="img-not-found">'+
							'<i class="fa fa-file-image-o" aria-hidden="true"></i>'+
							'Archivo no encontrado'+
						'</div>');
}
// funcion para el funcionamiento de las alertas
$(document).on('click','.alert_action',function(e) {
	e.preventDefault();
	route = $(this).attr("data");
	element = $(this);
	title = element.find("span").text();
	type_array = route.split("/");
	type = type_array[0];
	id = type_array[1];
	swal({
	  	title: "¿Confirma "+title+"?",
	  	text: "!Ya no podras revertir los cambios!",
	  	type: "warning",
	  	showCancelButton: true,
	  	cancelButtonClass: "btn-danger",
	  	confirmButtonText: "Confirmar",
	  	cancelButtonText: "Cancelar",
	  	closeOnConfirm: false,
	  	showLoaderOnConfirm: true
	}, function () {
	  setTimeout(function () {
	    $.get(route, function(result){
			switch(result.status) {
			    case "error":
			        swal({
				  		title: "Error",
				  		text: result.message,
				  		type: "error",
				  		confirmButtonText: "Entendido"
				  	});
			    break;
			    case "success":
			        swal({
				  		title: "Exito",
				  		text: result.message,
				  		type: "success",
				  		confirmButtonText: "Listo"
				  	});
			  		if(type == "adviser_delete" || type == "user_delete" || type == "branch_office_delete" || type == "colony_delete"){
			  			father = element.parents("td");
			  			tr = father.parents("tr");
			  			tr.addClass("selected");
			  			table.row('.selected').remove().draw(false);
			  		}else{
			  			form = $("<form></form>");
			  			form.append("<input class='row-update' value='adviser' type='hidden'>");
						form.append("<input class='id' type='hidden' value='"+id+"'>");
			  			update_row(form);
			  		}
			  	break;
			    case "session_close":
			        swal({
				  		title: "Sesión terminada",
				  		text: "Su sesión a terminado, inicie sesión de nuevo para continuar.",
				  		type: "warning",
				  		confirmButtonText: "Entendido"
				  	});
				  	window.open(result.redirect,'_self');
			    break;
			}
		});
	  }, 2000);
	});
});


// funcion para enviar datos de la tabla mostrada al controlador
$(document).on('click','.download-file',function() {
	type = $(this).attr("type");
	form = $(this).closest(".download-form");
	token = form.find(".token").val();
	form.find(".type").val(type);
	arrayheader = [];
	arraydata = [];
	header = $(".data-table").find(".th");
	tr = $(".data-table").find(".tr");

	header.each(function(){
		text = $(this).text();
		arrayheader.push(text);
	});


	tr.each(function(){
		element = $(this);
		element.find(".td").each(function(){
			td = $(this);
			text = td.text().replace(/[^a-zA-Z 0-9.:ñÑáéíóúÁÉÍÓÚ-]+/g,' ');
			if(td.find("i").length > 0){
				arraydata.push("SI");
			}else{
				arraydata.push(text);
			}
		});
		arraydata.push("|");
	});
	form.append("<input name='headers' type='hidden' class='headers' value='"+arrayheader+"'>");
	form.append("<input name='data' type='hidden' class='data' value='"+arraydata+"'>");
	form.append("<input name='type' type='hidden' class='type' value='"+type+"'>");
	form.submit();
	swal({
  		title: "Descargando",
  		text: "Espere un momento, esto podria tardar algunos minutos",
  		type: "info",
  		confirmButtonText: "Entendido"
  	});
});



// funcion al dar clic en una opcion del menu para llenar contenido central
$(document).on('click','.action-navbar',function(e){
	e.preventDefault();
	route = $(this).attr("href");
	process_table = "<div class='process-table'>"+
						"<i class='fa fa-spinner fa-pulse'></i>"+
						"<div>Procesando...</div>"+
					"</div>";
	$(".table-load").html(process_table);
	$('[data-toggle="tooltip"]').tooltip("hide");
	$.get(route,function(result){
		if(result.session_close){
			window.open(result.redirect,'_self');
		}
		$(".table-load").html(result);
		if(table != 0){
			table.destroy();
			load_table();
			auto_load();
		}
	});
});

// funcion al dar clic en una opcion del menu para llenar contenido central
$(document).on('change','.search-data-year',function(e){
	e.preventDefault();
	let year = $(this).val();
	route = "admin/1/"+year;
	process_table = "<div class='process-table'>"+
						"<i class='fa fa-spinner fa-pulse'></i>"+
						"<div>Procesando...</div>"+
					"</div>";
	$(".table-load").html(process_table);
	$('[data-toggle="tooltip"]').tooltip("hide");
	$.get(route,function(result){
		if(result.session_close){
			window.open(result.redirect,'_self');
		}
		$(".table-load").html(result);
		if(table != 0){
			table.destroy();
			load_table();
		}
		auto_load();
	});
});

function table_load(){
	route = "admin/1";
	process_table = "<div class='process-table'>"+
						"<i class='fa fa-spinner fa-pulse'></i>"+
						"<div>Procesando...</div>"+
					"</div>";
	if($(".table-load").length > 0){
		$(".table-load").html(process_table);
		$.get(route,function(result){
			if(result.session_close){
				window.open(result.redirect,'_self');
			}
			$(".table-load").html(result);
			load_table();
			auto_load();
		});
	}
}



// funcion para activar o desactivar usuario o sucursal
$(document).on('click','.actives',function(e){
	e.preventDefault();
	element = $(this);
	action = element.attr("action");

	if(action == "user_active"){
		title_type = "usuario";
		row_type = "user";
	}else{
		title_type = "sucursal";
		row_type = "branch_office";
	}

	if($(this).prop('checked')){
		value = 1;
		text = "activado(a)";
		title = "activar "+title_type;
	}else{
		value = 0;
		text = "desactivado(a)";
		title = "desactivar "+title_type;
	}
	id = element.attr("id");
	
	route = action+"/"+id+"/"+value+"/"+text+"/";

	swal({
	  	title: "¿Confirma "+title+"?",
	  	type: "warning",
	  	showCancelButton: true,
	  	cancelButtonClass: "btn-danger",
	  	confirmButtonText: "Confirmar",
	  	cancelButtonText: "Cancelar",
	  	closeOnConfirm: false,
	  	showLoaderOnConfirm: true
	}, function () {
	  setTimeout(function () {
	    $.get(route, function(result){
			switch(result.status) {
			    case "error":
			        swal({
				  		title: "Error",
				  		text: result.message,
				  		type: "error",
				  		confirmButtonText: "Entendido"
				  	});
			    break;
			    case "success":
			        swal({
				  		title: "Exito",
				  		text: result.message,
				  		type: "success",
				  		confirmButtonText: "Listo"
				  	});
				  	form = $("<form></form>");
			  		form.append("<input class='row-update' value='"+row_type+"' type='hidden'>");
					form.append("<input class='id' type='hidden' value='"+id+"'>");
			  		update_row(form);
			    break;
			    case "session_close":
			        swal({
				  		title: "Sesión terminada",
				  		text: "Su sesión a terminado, inicie sesión de nuevo para continuar.",
				  		type: "warning",
				  		confirmButtonText: "Entendido"
				  	});
				  	window.open(result.redirect,'_self');
			    break;
			}
		});
	  }, 2000);
	});

});

// funcion para mostrar select dependiendo del grupo
$(document).on('change','.group',function(e){
	val = parseInt($(this).val());
	$(".group-type").addClass("d-none");
	$(".group-type").find(".select").prop('selectedIndex',0);
	$(".group-type").find(".select").removeClass("input-error");
	$(".group-type").find(".input-container").find(".input-error-message").remove();
	$(".group-type").find(".input-title").removeClass("input-title-top");
	$(".group-type").find(".group-checkbox").prop('checked', false); 
	switch(val){
		case 1:
			$(".group-checkbox-value").val("");
			$(".group-type").find(".input-title").addClass("input-title-top");
			$(".district-container-check").removeClass("d-none");
		break;
		case 16:
			$(".sub-management-container").removeClass("d-none");
		break;
		case 19:
			$(".branch-office-container").removeClass("d-none");
		break;
		case 20:
			$(".state-container").removeClass("d-none");
		break;
		case 21:
			$(".district-container").removeClass("d-none");
		break;
	}
});
// funcion para obtener los permisos dependiendo del grupo
$(document).on('click','.get-permission',function(e){
	e.preventDefault();
	container = $(this).closest(".card");
	body = container.find(".card-body");
	id = $(this).attr("aria-controls");
	route = "get_permission/"+id;
	$.get(route, function(result){
		body.html(result);
	});
});
// funcion agregar valor de activado o descativado a un elemento escondido para que los pueda leer el DOM
$(document).on('click','.permission',function(e){
	if($(this).prop('checked')){
		value = 1;
	}else{
		value = 0;
	}
	$(this).siblings(".hidden").val(value);
});

$(document).on('change','.select',function() {
	$('.dropdown-toggle').dropdown();
	$('[data-toggle="tooltip"]').tooltip();
});

$(document).on('blur','.search-data',function() {
	$('.dropdown-toggle').dropdown();
	$('[data-toggle="tooltip"]').tooltip();
});

$(document).on('click','.th',function() {
	$('.dropdown-toggle').dropdown();
	$('[data-toggle="tooltip"]').tooltip();
});

$(document).on('click','.kit',function() {
	$(this).css("color","#f4b916");
});


$(document).on('click','.checkbox-experience',function() {
	if($(this).prop('checked')){
		$(".container-experience").removeClass("d-none");
	}else{
		$(".container-experience").addClass("d-none");
		$(".container-experience").find("input").val("");
		$(".container-experience").find("input").removeClass("input-error");
		$(".container-experience").find("textarea").val("");
		$(".container-experience").find("textarea").removeClass("input-error");
		$(".container-experience").find(".input-error-message").remove();
	}
});

$(document).on('click','.add-work-experience',function(e) {
	e.preventDefault();
	element = $(this);
	text = element.find("b");
	arrow = element.find(".fa");
	if(text.text() == "Agregar otro empleo"){
		text.html("Quitar empleo");
		arrow.removeClass("fa-angle-double-down");
		arrow.addClass("fa-angle-double-up");
		$(".other-experience").removeClass("d-none");
	}else{
		text.html("Agregar otro empleo");
		arrow.addClass("fa-angle-double-down");
		arrow.removeClass("fa-angle-double-up");
		$(".other-experience").addClass("d-none");
		$(".other-experience").find("input").val("");
		$(".other-experience").find("input").removeClass("input-error");
		$(".other-experience").find("textarea").val("");
		$(".other-experience").find("textarea").removeClass("input-error");
		$(".other-experience").find(".input-error-message").remove();
	}

});

// $(".modal").on('hidden.bs.modal', function () {
//     //table_load();
//     location.reload(true);
// });