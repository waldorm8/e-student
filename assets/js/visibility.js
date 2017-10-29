$(document).ready(function(){
	var vis_field = $('#reg-password');
	var vis_field2 = $('#re-password');
	var vis_field3 = $('#password');


	$('.visibility').on('click', function(){
		if(vis_field.attr("type") == "password"){
			vis_field.attr("type", "text");
			vis_field2.attr("type", "text");
			vis_field3.attr("type", "text");
		}
		else{
			vis_field.attr("type", "password");
			vis_field2.attr("type", "password");
			vis_field3.attr("type", "password");
		}
	});
});