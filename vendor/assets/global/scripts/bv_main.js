 $(".verifyotpgrp").slideUp();
 function verifyotp()
 {
 	var phone=$("#otplogin-phone").val();
 	$.post('bv_verifyotp.php',{contact:phone},function(data){
 		alert(data);
 		$('.otpbtn').html('Resend OTP');
 		$(".verifyotpgrp").slideDown();
 	});

 }