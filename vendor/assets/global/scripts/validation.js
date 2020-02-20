function validation()
	{

			var phone_number=document.getElementById("signup_phone").value;
			phone_number=parseInt(phone_number);
			var num=Number.isInteger(phone_number);
			if(num==false)
			{
				alert('Enter a number');
				//signup_phone.setCustomValidity("Enter a number");
			}
			var password = document.getElementById("password"),confirm_password = document.getElementById("confirm_password");
	  	if(password.value != confirm_password.value)
	  	 {
	    		confirm_password.setCustomValidity("Passwords Don't Match");
	  	 } 
	  	else
	  	 {
	   			 confirm_password.setCustomValidity('');
	   			 if(password.value.length < 1 )
	   			 {
	   			 	confirm_password.setCustomValidity("password should not be less than 6 characters");	
	   			 }
	  	 }
	}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
signup_phone.onchange=validation(); 
