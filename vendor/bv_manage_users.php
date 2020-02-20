<!doctype html>
<html lang="en">
<head>
	<title>Permissions | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/global/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/global/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/global/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/global/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/global/css/header.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/global/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/global/img/favicon.png">
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<?php include_once('header.php');?>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.html" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>Elements</span></a></li>
						<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html" class="active"><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<?php include_once('assets/pages/manage_users/bv_manage_users_content.php');?>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
     <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Manage Permissions</h4>
        </div>
        <div class="modal-body">
        		<div class="row">
						<div class="col-md-12">
							<!-- TABLE STRIPED -->
							<div class="panel">
								
								
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Permission</th>
												<th>Type 1</th>
												<th>Type 2</th>
												<th>Type 3</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Permission 1</td>
												<td><input name="gender" value="male" type="radio" checked></td>
												<td><input name="gender" value="male" type="radio"></td>
												<td><input name="gender" value="male" type="radio"></td>
											</tr>
											<tr>
												<td>Permission 2</td>
												<td><input name="gender1" value="male" type="radio"></td>
												<td><input name="gender1" value="male" type="radio" checked></td>
												<td><input name="gender1" value="male" type="radio"></td>
											</tr>
											<tr>
												<td>Permission 3</td>
												<td><input name="gender2" value="male" type="radio"></td>
												<td><input name="gender2" value="male" type="radio" checked></td>
												<td><input name="gender2" value="male" type="radio"></td>
											</tr>
											<tr>
												<td>Permission 4</td>
												<td><input name="gender3" value="male" type="radio"></td>
												<td><input name="gender3" value="male" type="radio"></td>
												<td><input name="gender3" value="male" type="radio" checked></td>
											</tr>
										</tbody>
									</table>
							</div>
							<!-- END TABLE STRIPED -->
							<div class="container-fluid">
								<button type="button" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</div>
        </div>
        
      </div>
      
    </div>
  </div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/global/vendor/jquery/jquery.min.js"></script>
	<script src="assets/global/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/global/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/global/scripts/klorofil-common.js"></script>
</body>

</html>
