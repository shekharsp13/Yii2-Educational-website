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
require_once('bc_seller_classes/Customer/Customer.php');
$customer=new Customer();
$session=$customer->get_session();
$connections = new Connections();
$mongo_connect = $connections->mongo_bookchor_vendor();
$user_info = new Utility();
$collection=$mongo_connect->selectCollection('users');

if(isset($_POST['login-btn']))
{
	$email=$_POST['signin-email'];
	$password=$_POST['signin-password'];
	$login=$customer->login($email,$password);

	if($login)
	{
		header('Location: bv_onboarding.php'); 
	}
	



	/*$token_id=hash_hmac('sha1',$_SERVER['SERVER_ADDR'],$_SERVER['SERVER_PORT']);
	$token_id=hash_hmac('sha1',$token_id,date('YmdHis'));




	$current_time_stamp=date('Y-m-d-H-i-s');
	$browser=$user_info->showInfo('browser');
	$version=$user_info->showInfo('version');
	$os=$user_info->showInfo('os');
	$ip_details=$user_info->get_ip_details();
	$user_info_detail[] =array( "Browser" => $browser, "Version" => $version, "OS" => $os);
	$activity_detail[]=array("IP_address"=>$ip_details['ip'],"City"=>$ip_details['city'],"State"=>$ip_details['state'],"Customer_id"=>$user_id,"timestamp"=>$current_time_stamp);
	$website_sessions_con=$mongo_connect->selectCollection('website_sessions');
	if($website_sessions_con->insertOne(array('token_id'=>$token_id,'current_user_id' => $user_id,'device' => $user_info_detail,'activity' => $activity_detail,'logged_in' => 1)))
		{
			echo "insrted";
			
		}*/
	


}
?>

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
							<form class="form-auth-small" action="" method="POST">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" id="signin-email" name="signin-email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signin-password" name="signin-password" placeholder="Password">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block" name="login-btn">LOGIN</button>
								<div class="bottom">
									<span class="helper-text" style="float: left;"><i class="fa fa-mobile"></i> <a href="bv_otp_login.php">Login With OTP</a></span>
								
									<span class="helper-text" style="float: right;"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
									
								</div>
								
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
</body>

</html>
