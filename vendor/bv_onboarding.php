<!doctype html>
<html lang="en">
<?php
require 'vendor/autoload.php';
require_once('bc_seller_classes/Connections/Connections.php');
require_once('bc_seller_classes/Vendor/Vendor.php');
require_once('bc_seller_classes/Utility/Utility.php');
require_once('bc_seller_classes/Customer/Customer.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$customer=new Customer();
$session=$customer->get_session();
if($session['logged_in']==0)
{
	header('Location: login.php'); 
}
?>
<head>
	<title>Dashboard | Bookchor.com - Buy Old Books , SecondHand Books , New Books</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/global/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/global/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/global/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/global/vendor/chartist/css/chartist-custom.css">
	
	
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/global/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->

	<link rel="stylesheet" href="assets/global/css/header.css">

	<link rel="stylesheet" href="assets/global/css/signup-detail.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/global/img/apple-icon.png">

	<link rel="icon" type="image/png" sizes="96x96" href="assets/global/img/sss.png">
</head>



<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<?php include_once('header.php');?>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main" style="width: 100%">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<?php include_once('assets/pages/onboarding/bv_onboarding_content.php');?>
					</div>
					<!-- END OVERVIEW -->
			
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<?php include_once('footer.php');?>

		<!-- END MAIN -->
		<!-- <div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer> -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/global/vendor/jquery/jquery.min.js"></script>
	<script src="assets/global/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/global/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/global/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/global/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/global/scripts/klorofil-common.js"></script>
</body>

</html>
