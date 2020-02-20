<!doctype html>
<html lang="en" class="fullscreen-bg">
<head>
	<title>Login | Bookchor.com - Buy Old Books , SecondHand Books , New Books</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/global/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/global/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/global/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/global/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/global/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/global/img/small.png">
</head>
<body>
	<?php
	require 'vendor/autoload.php';
	require_once('bc_seller_classes/Connections/Connections.php');
	require_once('bc_seller_classes/Customer/Register.php');
	$connections = new Connections();
	$mongo_connect = $connections->mongo_bookchor_vendor();
	if(isset($_POST['otplogin_btn']))
	{
		$reg=new Register();
		$login=$reg->loginOtp($_POST['otplogin']);

	}
	?>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/global/img/logo.png" style="height: 27px;"alt="Bookchor Logo"></div>
								<p class="lead">Login to your account</p>
							</div>
							<form class="form-auth-small" method="POST" action="">
								<div class="input-group">

									<input type="tel" class="form-control" id="otplogin-phone" name="otplogin[phone]"  placeholder="Phone Number" required>
									<span class="input-group-btn" style="bottom: 20px;">
										<button class="btn btn-link otpbtn"  onclick="verifyotp();" type="button">Send OTP!</button>
									</span>
								</div>
								<div class="form-group verifyotpgrp">
									<label for="signin-otp" class="control-label sr-only">OTP</label>
									<input  class="form-control" id="signin-otp" name="otplogin[otp]"  placeholder="OTP" required>
								</div>
								
								<button type="submit" name="otplogin_btn" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Bookchor.com</h1>
							<p>Marketplace for Old Books , SecondHand Books , New Books</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="assets/global/scripts/bv_main.js"></script>
</body>

</html>
