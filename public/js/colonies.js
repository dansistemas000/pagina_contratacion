$(document).on('click','.colonies-search',function(e) {
	e.preventDefault();
	container = $(this).closest(".input-container");
	postal_code = container.find(".input-text").val();
	form = $(this.form);
	if(validate_form(form)){
		process_result = "<div class='process-table'>"+
							"<i class='fa fa-spinner fa-pulse'></i>"+
							"<div>Procesando...</div>"+
						"</div>";
		$(".colonies-container").html(process_result);
		$.get("get_colonies/"+postal_code+"/",function(result){
			$(".colonies-container").html(result);
			if(result != ""){
				table = $('.data-table').DataTable({
	    			"order": [],
	    			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todas"]]
				});
				$('[data-toggle="tooltip"]').tooltip();
			}
		});
	}
});