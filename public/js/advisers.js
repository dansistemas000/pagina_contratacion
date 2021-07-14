// funcion para seleccionar imagen al dar clic
$(document).on('click','.promotion-img',function() {
	data = $(this).attr("data");
	$(".promotions").val(data);
	$(".promotion-img").removeClass("img-select");
	$(this).addClass("img-select");
});









