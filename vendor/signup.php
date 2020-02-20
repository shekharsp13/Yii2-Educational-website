<!doctype html>
<html lang="en" class="fullscreen-bg">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';
require_once('bc_seller_classes/Connections/Connections.php');
require_once('bc_seller_classes/Vendor/Vendor.php');
require_once('bc_seller_classes/Utility/Utility.php');
require_once('bc_seller_classes/Customer/Register.php');
require_once('bc_seller_classes/Customer/Customer.php');

if(isset($_POST['signup-btn']))
{
	$reg = new Register();
	$register=$reg->registerUser($_POST['signup']);
}

?>
<head>
	<title>Signup | Bookchor.com - Buy Old Books , SecondHand Books , New Books</title>
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
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/global/img/bc-logo.png" style="height: 27px;"alt="Bookchor Logo"></div>
								<p class="lead">Signup for Free</p>
							</div>
							<form class="form-auth-small" action="" method="POST">
								<div class="form-group">
									<label for="signup-name" class="control-label sr-only">Name</label>
									<input  class="form-control" name="signup[name]" id="signup-name" placeholder="Name" required>
								</div>
								<div class="form-group">
									<label for="signup-email" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" name="signup[email]" id="signup-email" placeholder="Email" required>
								</div>
								<div class="form-group">
									<label for="signup-phone" class="control-label sr-only">Phone Number</label>
									<input type="tel" class="form-control" name="signup[phone]" id="signup_phone" placeholder="Phone Number" required>
								</div>
								<!-- <div class="input-group">
							   <label for="signup-phone" class="control-label sr-only">Phone Number</label>
                               <input type="tel" class="form-control" id="signup-phone"  placeholder="Phone Number">
                                   <span class="input-group-btn" style="bottom: 20px;">
                                  <button class="btn btn-default otpbtn" onclick="verifyotp();" type="button">Send OTP!</button>
                                   </span>
                                       </div> -->
								<div class="form-group">
									<label for="signup-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" name="signup[password]" id="password" placeholder="Password" required>
								</div>
								<div class="form-group">
									<label for="signup-confirmpassword" class="control-label sr-only">Confirm Password</label>
									<input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" required>
								</div>
								<!-- <div class="form-group verifyotpgrp" >
									<label for="signup-OTP" class="control-label sr-only">OTP</label>
									<input type="text" class="form-control" id="signup-OTP" placeholder="OTP">
								</div> -->
								<button type="submit"  onclick="validation()" name="signup-btn" class="btn btn-primary btn-lg btn-block">SIGNUP</button>
								
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Grow your business.</h1>
							<h1 class="heading">
							Sell on Bookchor.com</h1>
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
	<script src="assets/global/scripts/validation.js"></script>
	
</body>

</html>
