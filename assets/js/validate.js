function lengthValidation(field, from, till){
	$(field).on('blur', function(){
		var fieldLength = field.val().length;
		if(fieldLength >= from && fieldLength <= till){
			field.removeClass("invalid").addClass("valid");
		}
		else{
			field.removeClass("valid").addClass("invalid");
		}
	});
}

function passwordValid(field1, field2){
	$(field2).on('blur', function(){
			if(field1.val() == field2.val()){
				field1.removeClass("invalid").addClass("valid");
				field2.removeClass("invalid").addClass("valid");
			}
			else{
				field1.removeClass("valid").addClass("invalid");
				field2.removeClass("valid").addClass("invalid");
			}
	});
	$(field1).on('blur', function(){
			if(field1.val() == field2.val()){
				field1.removeClass("invalid").addClass("valid");
				field2.removeClass("invalid").addClass("valid");
			}
			else{
				field1.removeClass("valid").addClass("invalid");
				field2.removeClass("valid").addClass("invalid");
			}
	});
}

function emailValid(email){
	$(email).on('blur', function(){
		var pattern =  /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		var is_email = pattern.test(email.val());

		if(is_email){
			email.removeClass("invalid").addClass("valid");
		}
		else{
			email.removeClass("valid").addClass("invalid");
		}

	});
}

$(document).ready(function(){
	var name = $('#name');
	var surname = $('#surname');
	var login = $('#reg-login');
	var password = $('#reg-password');
	var repassword = $('#re-password');
	var email = $('#email');
	var Lpassword = $('#password');
	var Llogin = $('#login');
	lengthValidation(name, 5, 15);
	lengthValidation(surname, 5, 20);
	lengthValidation(login, 5, 15);
	lengthValidation(password, 5, 20);
	passwordValid(password, repassword);
	emailValid(email);

	lengthValidation(Llogin, 5, 32);
	lengthValidation(Lpassword, 5, 20);

	$('#loginin').click(function(event){
		if(Llogin.hasClass("invalid") || Lpassword.hasClass("invalid")){
			event.preventDefault();
			$('.fail-modal').modal();	
		}
	});


	$('#registerup').click(function(event){
		if(name.hasClass("valid") && email.hasClass("valid") && surname.hasClass("valid") && login.hasClass("valid") 
			&& password.hasClass("valid") && repassword.hasClass("valid")){
			return 0;
		}
		else{
			event.preventDefault();
			$('.fail-modal').modal();
		}
	});

});