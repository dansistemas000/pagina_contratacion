$(document).ready(function() {	
	//funcion para sublir pagina al encabezado
	$('.up').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
	//funcion para mostrar flecha que direcciona a la parte de arriba de la pagina
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.up').slideDown(300);
		} else {
			$('.up').slideUp(300);
		}
	});

	$('#pop-up-fz').modal('toggle');
	
	auto_load();
	clock();
});

$(document).on('click','.img-pop-up',function(){
	  $('#pop-up-fz').modal('hide');
});


$(window).resize(function() {
	adapt_size();
});

function auto_load(){
	
	auto_select();
	adapt_size();
	$('[data-toggle="tooltip"]').tooltip();
	$('[data-toggle="dropdown"]').dropdown();
	expenses_sum();
	datepicker();
	get_status();
	get_colony();
	auto_branch_offices();
	auto_sub_management();
	auto_state();
	auto_district();
	auto_groups();
	auto_district_check();

}

function get_colony(){
	colony_select = $(".colony");
	postal = $(".postal");
	postal_code = postal.val();
	route = "address_search/"+postal_code;
	if(colony_select.length > 0 && postal_code != ""){
		$.get(route,function(result){
   			if($.isArray(result)){
		   		fill_select(colony_select,result,"colony","colony");
			}
		});
	}
}

function auto_branch_offices(){
	branch_office_select = $(".branch-offices");
	route = "get_branch_offices";
	if(branch_office_select.length > 0){
		$.get(route,function(result){
   			if($.isArray(result)){
		   		fill_select(branch_office_select,result,"id","name");
			}
		});
	}
}

function auto_sub_management(){
	sub_management_select = $(".sub_management");
	route = "get_sub_managements";
	if(sub_management_select.length > 0){
		$.get(route,function(result){
   			if($.isArray(result)){
		   		fill_select(sub_management_select,result,"id","name");
			}
		});
	}
}

function auto_groups(){
	group_select = $(".group");
	route = "get_groups";
	if(group_select.length > 0){
		$.get(route,function(result){
   			if($.isArray(result)){
		   		fill_select(group_select,result,"id","name");
			}
		});
	}
}

function auto_state(){
	state_select = $(".state");
	route = "get_states";
	if(state_select.length > 0){
		$.get(route,function(result){
   			if($.isArray(result)){
		   		fill_select(state_select,result,"id","name");
			}
		});
	}
}

function auto_district(){
	district_select = $(".district");
	route = "get_districts";
	if(district_select.length > 0){
		$.get(route,function(result){
   			if($.isArray(result)){
		   		fill_select(district_select,result,"id","name");
			}
		});
	}
}

function auto_district_check(){
	group_checks = $(".group-checks");
	route = "get_districts";
	if(group_checks.length > 0){
		$.get(route,function(result){
   			if($.isArray(result)){
		   		fill_check(group_checks,result,"id","name");
			}
		});
	}
}

function fill_check(check,array,val,name){
	check.html("<div class='row'></div>");
	row = check.find(".row");
	container = check.closest(".input-container");
	data_check = $(".group-checkbox-value").val();
	array_data_check = "";
	if(data_check != ""){
		array_data_check = data_check.split(" ");
	}
	array.forEach(function(value) {
		if($.isArray(array_data_check)){
			string_val = value[val].toString();
			if(array_data_check.includes(string_val)){
				row.append('<div class="col-md-6"><input class="group-checkbox" name="'+value[name].trim()+'" type="checkbox" value="'+value[val]+'" checked>'+value[name].trim()+'</div>');
			}else{
				row.append('<div class="col-md-6"><input class="group-checkbox" name="'+value[name].trim()+'" type="checkbox" value="'+value[val]+'">'+value[name].trim()+'</div>');
			}
		}else{
			row.append('<div class="col-md-6"><input class="group-checkbox" name="'+value[name].trim()+'" type="checkbox" value="'+value[val]+'">'+value[name].trim()+'</div>');
		}
		
	});
}

function get_status(){
	status_select = $(".advisers-status");
	if(status_select.length > 0){
		$.get("get_status",function(result){
   			fill_select(status_select,result,"id","name");
		});
	}
}

//funcion para obtener las direcciones dependiendo el codigo postal
function search_address(string,form,container){
	container.find(".input-error-message").remove();
	if(string != ""){
		route = "address_search/"+string;
		form.find(".address-process").show();
		$.get(route,function(result){
			if($.isArray(result)){
				state = result[0]['state'];
		   		town = result[0]['town'];
		   		fill_input(".state",state,form);
		   		fill_input(".town",town,form);
		   		select = form.find(".colony");
		   		fill_select(select,result,"colony","colony");
		   		form.find(".address-process").hide();
			}else{
				container.append( "<label class='input-error-message'>"+result+"</label>");
				form.find(".address-process").hide();
			}
		});
	}else{
		message = "*Capture código postal";
		container.append( "<label class='input-error-message'>"+message+"</label>");
	}
}




//funcion para llenar los select
function fill_select(select,array,val,name){
	select.html("");
	data = select.attr("data");
	if(data != undefined && data != ""){
		data = data.toLowerCase().trim();
	}
	select.append('<option value="0"></option>');
	block = select.attr("block");
    select.removeAttr("disabled");
	container = select.closest(".input-container");
	container.find(".input-title").removeClass("input-title-top");
	array.forEach(function(value) {
		if(data == value[name].toLowerCase().trim()){
			container.find(".input-title").addClass("input-title-top");
			select.append('<option value="'+value[val]+'" selected>'+value[name].trim()+'</option>');
		}else{
			select.append('<option value="'+value[val]+'">'+value[name].trim()+'</option>');
		}
	});
	if(block != undefined){
		select.attr("disabled",true);
	}
}

function auto_select(){
	$(".auto-select").each(function(){
		data = $(this).attr("data").toLowerCase().trim();
		if(data != ""){
			container = $(this).closest(".input-container");
			title = container.find(".input-title");
			$(".auto-select option").each(function(){
				if(data == $(this).text().toLowerCase().trim()){
					$(this).attr("selected",true);
					title.addClass("input-title-top");
				}
			});
		}
	});
}

function datepicker(){
	$('.datepicker').datepicker({
	    language: "es",
	    clearBtn: true,
	    startView: "years",
	    startDate: "-2018y",
	    defaultViewDate: {year:1980},
	    format: "yyyy-mm-dd",
	    // viewMode: "years", 
	    // minViewMode: "years"
	    autoclose: true
	});
}

function expenses_sum(){
	$(".sum").each(function(){
		element = $(this);
		income_family_sum(element);
	});
}

//funcion para subir o bajar scroll a mensaje de resultado
$.fn.scrollView = function () {
	return this.each(function () {
		modal = $(".modal").is(":visible");
		if(modal){
			scroll_height = $(".modal").scrollTop();
			window_height = $(window).height();
			element_position = $(this).offset().top;
			x = window_height - element_position;
			scrollTop = scroll_height - x;
			$('.modal').animate({ scrollTop: scrollTop + 100 }, 1000);
		}else{
			$('html, body').animate({ scrollTop: $(this).offset().top - 150 }, 1000);
		}
	});
}



//funcion para modificar tamaño de las cajas de texto dependiendo el titulo
function adapt_size(){
	$(".input-container").each(function(){
		element = $(this);

       	input = element.find(".input-text");
       	select = element.find(".select");
       	title = element.find(".input-title");
       	title_height = title.height();
       	
       	if(input.length){
       		string = input.val();
       		if(string != ""){
	       		title.addClass("input-title-top");
	       	}
       	}

       	if(select.length){
       		string = select.val();
       		if(string != 0){
	       		title.addClass("input-title-top");
	       	}
       	}
       	if(title.text().length > 40 && !title.hasClass('input-title-top')){
       		input.height(52);
       	    select.height(52);
       	}
    });

	adapter_navbar();
	
}

function adapter_navbar(){
	width = $( window ).width();
	if(width >= 991){
		$(".sidenav-second-level").removeClass("show");
		$("body").addClass("sidenav-toggled");
	}else{
		$("#navbarResponsive").removeClass("show");
		$(".navbar-toggler").find("span").removeClass("fa-caret-square-o-up");
	}
}

//funcion para abrir documentos PDF en pestaña nueva
$(document).on('click','.button-react',function(){
	  url = $(this).attr("href");
      window.open(url, '_blank');
      return false;
});

$(document).on('click','.button-href',function(e){
	e.preventDefault();
	url = $(this).attr("href");
	window.open(url,'_self');
    return false;
});



//funcion para subir el titulo de las cajas de texto
$(document).on('focus','.input-text',function(){
	element = $(this);
	form = $(this.form);
	container = $(this).closest(".input-container");
	container.find(".input-title").addClass("input-title-top");
	container.find(".input-error-message").remove();
	element.removeClass("input-error");
	window_width = $(window).width();
	title_top = container.find(".input-title-top");
	string_title_top = title_top.text();
	
	if(string_title_top.length > 50 && window_width <= 376){
		title_top.addClass("double-top");
	}

});

//funcion para subir el titulo de los select
$(document).on('focus','.select',function(){
	element = $(this);
	form = $(this.form);
	container = $(this).closest(".input-container");
	container.find(".input-title").addClass("input-title-top");
	container.find(".input-error-message").remove();
	element.removeClass("input-error");
	window_width = $(window).width();
	title_top = container.find(".input-title-top");
	string_title_top = title_top.text();
	if(string_title_top.length > 50 && window_width <= 376){
		title_top.addClass("double-top");
	}

});

//funcion para bajar titulo de texto
$(document).on('blur','.input-text',function() {
	container = $(this).closest(".input-container");
	string = $(this).val();
	if(string == "") container.find(".input-title").removeClass("input-title-top");
});


//funcion para bajar titulo de los select
$(document).on('blur','.select',function() {
	container = $(this).closest(".input-container");
	string = $(this).val();
	if(string == 0) container.find(".input-title").removeClass("input-title-top double-top");
});


//funcion para buscar direcciones por medio del codigo postal
$(document).on('click','.postal-code',function(e) {
	e.preventDefault();
	container = $(this).closest(".input-container");
	element = container.find(".input-text");
	string = element.val();
	form = $(this.form);
	type = "number";
	pattern = return_pattern(type);
	for (i = 0; i < string.length; i++) {
		val = string.charAt(i);
	   	if (!val.match(pattern)){
	   		container.find(".input-error-message").remove();
			element.addClass("input-error");
			message = message_error("error-"+type);
			container.append( "<label class='input-error-message'>*"+message+"</label>" );
			container.scrollView();
			return false;
	   	}
	}
	search_address(string,form,container);
	get_branch_offices(string,form);
});

$(document).on('blur','.postal-code-input',function(e) {
	e.preventDefault();
	form = $(this.form);
	form.find(".colony").html("");
	form.find(".town-input").val("");
	form.find(".state-input").val("");
	form.find(".branch-office").html("");
});

//funcion para obtener las direcciones dependiendo el codigo postal
function search_address(string,form,container){
	container.find(".input-error-message").remove();
	if(string != ""){
		route = "address_search/"+string;
		form.find(".address-process").show();
		$.get(route,function(result){
			if($.isArray(result)){
				state = result[0]['state'];
		   		town = result[0]['town'];
		   		fill_input(".state-input",state,form);
		   		fill_input(".town-input",town,form);
		   		select = form.find(".colony");
		   		fill_select(select,result,"colony","colony");
		   		form.find(".address-process").hide();
			}else{
				container.append( "<label class='input-error-message'>"+result+"</label>");
				form.find(".address-process").hide();
			}
		});
	}else{
		message = "*Capture código postal";
		container.append( "<label class='input-error-message'>"+message+"</label>");
	}
}

//funcion para obtener todas las sucursales
function get_branch_offices(postal_code,form){
	$.get("get_branch_offices/"+postal_code,function(result){
   		select_branch = form.find(".branch-office");
   		fill_select(select_branch,result,"id","name");
	});
}
//funcion para llenar la cajas de texto 
function fill_input(element,val,form){
	input = form.find(element);
	input.val(val);
	input.removeAttr("disabled");
	input.attr("readonly","readonly");
	container = input.closest(".input-container");
	container.find(".input-title").addClass("input-title-top");
	container.find(".input-error-message").remove();
	input.removeClass("input-error");
}

//funcion para guardar los datos del formulario
$(document).on('click','.send',function(e) {
	e.preventDefault();
	form = $(this.form);
	if(validate_form(form)){
		url = form.attr("action");
		result = form.find(".result");
		send_form(form,url,result);
	}
});

//funcion para guardar los datos del formulario
$(document).on('click','.redirect',function(e) {
	e.preventDefault();
	form = $(this.form);
	result = form.find(".result");
	if(validate_form(form)){
		form.find("button").prop('disabled', true);
		form.find("input, select").removeAttr("disabled");
		string = "Espere un momento, procesando datos...";
        result.html("<i class='fa fa-spinner fa-pulse'></i>"+
        						"<span>"+string+"</span>");
        result.addClass("process-result");
        form.submit();
	}
});


//funcion para enviar formulario al controlador
function send_form(form,url,result_container){
	token = form.find(".token").val();
	
	var formData = new FormData($(form)[0]);
	result_container.removeClass("error-result success-result process-result");
	close = "<span class='exit'><i class='fa fa-times'></i></span>";

	$.ajax({
        type: "POST",
        url : url,
        datatype:'json',
        headers : {'X-CSRF-TOKEN':token},
        data : formData,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function(){
        	string = "Espere un momento, procesando datos...";
        	result_container.html("<i class='fa fa-spinner fa-pulse'></i>"+
        						"<span>"+string+"</span>");
        	form.find("button").prop('disabled', true);
        	result_container.addClass("process-result");
        	result_container.scrollView();
        },
        success : function(data){
        	if(data.status == "session_close"){
        		window.open(data.redirect,'_self');
        		return false;
        	}
    		if(data.status == "success"){
        		switch(data.type){
        			case "result":
        				result_container.removeClass("process-result");
        				if(!data.update){
        					$(form)[0].reset();
        				}
        				form.find(".input-file").attr("title","Buscar archivo");
        				result_container.addClass("success-result");
        				message = data.message;
        				result_container.html(close+"<i class='fa fa-check-circle'></i>"+
        							"<span>"+message+"</span>");
        			break;
        			case "redirect":
        				url = data.redirect;
        				window.open(url,'_self');
        			break;
        			case "view":
        				$.get(data.view,function(result){
					   		$("."+data.container).html(result);
						});
        			break;
        			case "alert-result":
        				result_container.removeClass("process-result");
        				result_container.addClass("success-result");
        				result_container.html(close+"<i class='fa fa-check-circle'></i>"+
        							"<span>"+data.message_result+"</span>");
        				 swal({
					  		title: data.title_alert,
					  		text: data.message_alert,
					  		type: data.type_alert,
					  		confirmButtonText: "Entendido"
				  		});
        			break;
        		}
        		update_row(form);
        		add_row(form,data.return_id);
        	}else{
        		result_container.removeClass("process-result");
        		result_container.addClass("error-result");
        		message = data.message;
        		result_container.html(close+"<i class='fa fa-exclamation-circle'></i>"+
        							"<span>"+message+"</span>");
        	}
        	form.find("button").prop('disabled', false);
        	// result_container.scrollView();
        },
        error: function(data, xhr, desc, err) {
        	result_container.removeClass("process-result");
        	form.find("button, input, select").prop('disabled', false);
        	result_container.addClass("error-result");
        	string = "Error - "+ data.responseText;
        	result_container.html(close+"<i class='fa fa-exclamation-circle'></i>"+
        						"<span>"+string+"</span>");
        	//result_container.scrollView();

		}
    });
}
//funcion para eliminar errores escritos en los chekbox
$(document).on('click','.chekbox',function(e) {
	element = $(this);
	container = element.closest(".input-container");
	container.find(".input-error-message").remove();
});

//valida las cajas de texto
function validate_form(form){

	if(validate_text(form)){
		if(validate_select(form)){
			if(validate_chekbox(form)){
				if(validate_hidden(form)){
					if(validate_file(form)){
						if(validate_pass(form)){
							validate_group_chekbox(form);
						}
					}
				}
			}
		}
	}
 	errors = form.find(".input-error-message").length;
	if(errors>0){
		form.find(".input-error-message").closest(".collapse").addClass("show");
		return false;
	}else{
		return true;
	}
}

function validate_pass(form){
	response = true;
	if(form.find(".pass-confirm").length > 0){
		element = form.find(".pass-confirm");
		val = element.val();
		pass = form.find(".pass").val();
		container = element.closest(".input-container");
		container.find(".input-error-message").remove();
		element.removeClass("input-error");
		if(val != pass){
			element.addClass("input-error");
			message = "*La contraseña y la confirmación de la contraseña no son iguales.";
			container.append( "<label class='input-error-message'>"+message+"</label>" );
			container.scrollView();
			response = false;
       		return false;
		}
	}
	return response;

}
//funcion para validar que selecciones chekbox
function validate_chekbox(form){
	response = true;
	if(form.find(".chekbox").length > 0){
		$(form.find(".chekbox")).each(function(){
			element = $(this);
			required = element.attr("required");
			container = element.closest(".input-container");
			checked = element.prop('checked'); 
			container.find(".input-error-message").remove();
			visible = element.is(":visible");
			if(!checked && required != undefined && visible){
				message = "*Seleccione la casilla";
				container.append( "<label class='input-error-message'>"+message+"</label>" );
				element.closest(".collapse").addClass("show");
				container.scrollView();
				response = false;
	       		return false;
			}
		});
	}
	return response;
}

//funcion para validar que selecciones chekbox
function validate_group_chekbox(form){
	response = true;
	count_check = 0;
	if(form.find(".group-checkbox").length > 0){
		$(form.find(".group-checkbox")).each(function(){
			element = $(this);
			container = element.closest(".input-container");
			checked = element.prop('checked'); 
			container.find(".input-error-message").remove();
			visible = $(".group-checks").is(":visible");

			if(checked){
				count_check++;
			}
		});

		if(count_check == 0 && visible){
			message = "*Seleccione al menos una casilla";
			container.append( "<label class='input-error-message'>"+message+"</label>" );
			container.scrollView();
			response = false;
	   		return false;
		}
	}
	return response;
}

//funcion para validar los elementos ocultos
function validate_hidden(form){
	response = true;
	if(form.find(".validate-hidden").length > 0){
		$(form.find(".validate-hidden")).each(function(){
			element = $(this);
	       	string = element.val();
	       	required = element.attr("required");
	       	container = element.closest(".input-container");
	       	element.removeClass("input-error");
	       	container.find(".input-error-message").remove();
	       	if(required != undefined && string == ""){
	       		element.addClass("input-error");
	       		message = element.attr("data");
	       		container.append( "<span class='input-error-message'><h6>*"+message+"</h6></span>" );
	       		container.scrollView();
	       		response = false;
	       		return false;
	       	}
		});
	}
	return response;
}

//funcion para validar los textos dentro de las cajas de texto
function validate_text(form){
	response = true;
	if(form.find(".input-text").length > 0){
		$(form.find(".input-text")).each(function(){
			element = $(this);
	       	string = element.val();
	       	required = element.attr("required");
	       	container = element.closest(".input-container");
	       	element.removeClass("input-error");
			validate = element.hasClass("validate-text");
			visible = element.is(":visible");
	       	if(required != undefined && string == "" && visible){
	       		container.find(".input-error-message").remove();
	       		element.addClass("input-error");
	       		message = container.find(".input-title").text();
	       		container.append( "<label class='input-error-message'>*Capture: "+message+"</label>" );
	       		element.closest(".collapse").addClass("show");
	       		container.scrollView();
	       		response = false;
	       		return false;
	       	}

	       	if(validate){
	       		type = $(this).attr("text-type");
			 	pattern = return_pattern(type);
			 	if(type == "email"){
					pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			    	if(!pattern.test(string) && visible){
			    		container.find(".input-error-message").remove();
			    		element.addClass("input-error");
			    		message = message_error("error-email");
			    		container.append( "<label class='input-error-message'>*"+message+"</label>" );
			    		container.scrollView();
			    		response = false;
			    		return false;
			    	}
			    }else{
			    	for (i = 0; i < string.length; i++) {
			   			val = string.charAt(i);

			   		   	if (!val.match(pattern) && visible){
			   		   		container.find(".input-error-message").remove();
				    		element.addClass("input-error");
				    		message = message_error("error-"+type);
				    		container.append( "<label class='input-error-message'>*"+message+"</label>" );
				    		container.scrollView();
				    		response = false;
				    		return false;
			   		   	}
					}
			    }
	       	}
		});
	}
	return response;
}

//funcion para validar que seleccionen un elemento del select
function validate_select(form){
	response = true;
	if(form.find(".validate-select").length > 0){
		$(form.find(".validate-select")).each(function(){
			element = $(this);
			val = element.val();
			container = element.closest(".input-container");
			visible = element.is(":visible");
			if(val == 0 && visible){
				container.find(".input-error-message").remove();
	    		element.addClass("input-error");
	    		message = container.find(".input-title").text();
	    		container.append( "<label class='input-error-message'>*"+message+"</label>" );
	    		element.closest(".collapse").addClass("show");
	    		container.scrollView();
	    		response = false;
	    		return false;
			}
		});
	}
	return response;
}

$(document).on('click','.group-checkbox',function(){
	form = $(this.form);
	group_checkbox_value = form.find(".group-checkbox-value");
	if(group_checkbox_value.length > 0){
		total_group_checkbox = group_checkbox_value.val();
		element = $(this);
		element_val = element.val();
		container = element.closest(".input-container");
		checked = element.prop('checked');
		if(checked){
			container.find(".input-error-message").remove();
			if(total_group_checkbox == ""){
				group_checkbox_value.val(element_val);
			}else{
				group_checkbox_value.val(total_group_checkbox+" "+element_val);
			}
		}else{
			new_total_group_checkbox = "";
			array_group_checkbox = total_group_checkbox.split(" ");
			array_group_checkbox.forEach( function(val, index) {
				if(val != element_val){
					new_total_group_checkbox = new_total_group_checkbox+val+" ";
				}
			});
			group_checkbox_value.val(new_total_group_checkbox.trim());
		}
	}
});


//funcion para obtener los diferentes tipos de errores
function message_error(type){
	switch(type){
		case 'error-email':
			return "Capture correctamente su correo electrónico";
		break;
		case 'error-name':
			return "Este campo solo acepta letras";
		break;
		case 'error-number':
			return "Este campo solo acepta números";
		break;
		case 'error-decimal':
			return "Este campo solo acepta números y punto decimal";
		break;
		case 'error-description':
			return "Este campo no acepta estos caracteres: * {} [] & ! \" ";
		break;
		case 'error-alpha-numeric':
			return "Este campo solo acepta números y letras";
		break;
	}
}

//funcion para validar texto al escribir
$(document).on('keypress','.validate-text',function (e) {

	element = $(this);
	text_type = element.attr('text-type');
	pattern = return_pattern(text_type);
	Key_Array = ["Backspace","Delete","ArrowLeft","ArrowRight"];// para firefox
	
	if ($.inArray(e.key,Key_Array) >= 0) return true;

	return e.key.match(pattern) ? true : false;

});

//funcion para obtener la expresion regular para validar texto
function return_pattern(type){
	switch(type){
		case 'name':
			return /^[a-z áéíóúñüàè]+$/i;
		break;
		case 'number':
			return /\d/;
		break;
		case 'decimal':
			return /^[\d.]+$/i;
		break;
		case 'description':
			return /^[a-z áéíóúñü\d%$\/#,\n\r()+?¡;:¿@=><°\._-]+$/i;
		break;
		case 'alpha-numeric':
			return /^[a-z áéíóúñüàè \d]+$/i;
		break;
		case 'email':
			return /^[a-z\d@\._-]+$/i;
		break;
	}
}

//funcion para cerrar alertas
$(document).on('click','.exit',function(e) {
	e.preventDefault();
	element = $(this);
	container = element.closest(".result");
	container.html("");
	container.removeClass("error-result success-result warning-result");
});


$(document).on('change','.input-file',function (e) {
	element = $(this);
	container = element.closest(".input-container");
	file = element.val();
	file_name = file.split('\\');
	file_name = file_name[file_name.length-1];
	format = element.attr("format");
	container.find(".input-error-message").remove();
	if(file_name == ""){
		element.attr("title","Buscar archivo");
		container.find(".documents-file").remove();
		element.css("border-radius","4px");
	}else{
		ext = file_name.split(".");
		ext = ext[ext.length-1];
		if(ext == format){
			element.attr("title",file_name);
			element.css("border-radius","4px 4px 0 0");
			filePreview(this,container,ext);
		}else{
			message = "El archivo debe tener extención ."+format;
    		container.append( "<label class='input-error-message'>*"+message+"</label>" );
		}
	}
});

function validate_file(form){
	response = true;
	if(form.find(".input-file").length > 0){
		$(form.find(".input-file")).each(function(){
			element = $(this);
			val = element.val();
			required = element.attr("required");
			container = element.closest(".input-container");
			img = container.find("img");
			visible = element.is(":visible");
			if(val == "" && required != undefined && img.length == 0 && visible){
				container.find(".input-error-message").remove();
	    		element.addClass("input-error");
	    		message = "Debe seleccionar un archivo";
	    		container.append( "<label class='input-error-message'>*"+message+"</label>" );
	    		element.closest(".collapse").addClass("show");
	    		container.scrollView();
	    		response = false;
	    		return false;
			}
		});
	}
	return response;
}

function filePreview(input,container,ext) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            container.find(".documents-file").remove();
            if(ext == "jpg"){
            	container.append('<div class="documents-file">'+
            					'<img src="'+e.target.result+'" />'+
            				'</div');
            }
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function clock(){ 
   	now = new Date() 
   	hours = now.getHours();
   	minutes = now.getMinutes();
   	seconds = now.getSeconds();
   	time = hours + ":" + minutes;
   	$(".clock").text(time);

   	setTimeout("clock()",1000);
}

function update_row(form){
	if(form.find(".row-update").length > 0){
		type = form.find(".row-update").val();
		id = form.find(".id").val();
		route = "row_update/"+type+"/"+id;
		$.get(route, function(result){
			if(result.length > 0){
				$(".row-"+id).addClass("tr-selected");
				tr = table.row('.tr-selected').index();
				td = 0;
				result.forEach(function(value) {
					table.cell( tr, td ).data(value).draw();
					td++;
				});
				$(".row-"+id).removeClass("tr-selected");
			}
		});
	}
}

function add_row(form,id){

	if(form.find(".row-add").length > 0){
		type = form.find(".row-add").val();
		route = "row_add/"+type+"/"+id;
		$.get(route, function(result){
			if(result.length > 0){
				table.rows.add([
			        result
			    ]).draw();
				new_tr = $(".row-"+id).closest("tr");
				new_tr.addClass("row-"+id);
				span = new_tr.find(".row-"+id);
				span.removeClass("row-"+id);
			    $('[data-toggle="tooltip"]').tooltip();
			}
		});
	}

}

// funcion para llenar campos al elegir sucursal
$(document).on('change','.select-branch-office',function(e){
	val = $(this).val();
	form = $(this.form);
	$.get("branch_office_id/"+val,function(result){
		form.find(".branch-office-state").closest(".input-container").find(".input-error-message").remove();
		form.find(".district-input").closest(".input-container").find(".input-error-message").remove();
		form.find(".branch-office-address").closest(".input-container").find(".input-error-message").remove();
		
		form.find(".branch-office-state").removeClass("input-error");
		form.find(".district-input").removeClass("input-error");
		form.find(".branch-office-address").removeClass("input-error");

		form.find(".branch-office-state").val(result["state"]);
		form.find(".district-input").val(result["district"]);
		form.find(".branch-office-address").val(result["address"]);

		container_address = form.find(".branch-office-address").closest(".input-container");
		container_state = form.find(".branch-office-state").closest(".input-container");
		container_district = form.find(".district-input").closest(".input-container");

		if(form.find(".branch-office-address").val() != ""){
			container_address.find(".input-title").addClass("input-title-top");
			form.find(".branch-office-address").attr("data-original-title",result["address"]);
		}else{
			container_address.find(".input-title").removeClass("input-title-top");
			form.find(".branch-office-address").attr("data-original-title","");
		}

		if(form.find(".branch-office-state").val() !=""){
			container_state.find(".input-title").addClass("input-title-top");
		}else{
			container_state.find(".input-title").removeClass("input-title-top");
		}

		if(form.find(".district-input").val() !=""){
			container_district.find(".input-title").addClass("input-title-top");
		}else{
			container_district.find(".input-title").removeClass("input-title-top");
		}
	
	});
});

$(".modal").on('hidden.bs.modal', function () {
    video = $(this).find(".video");
    if(video.length > 0){
    	video.get(0).pause();
    }
});