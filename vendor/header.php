<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('bc_seller_classes/Connections/Connections.php');
require_once('bc_seller_classes/Vendor/Vendor.php');
$vendor = new Vendor();
$module_content = $vendor->get_module();
print_r($module_content);
?>
<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="bv_onboarding.php"><img src="assets/global/img/bc-logo.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid" id="main-header-height">
				<!--<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>-->
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span><i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/global/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
				<form class="navbar-form navbar-right">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
			</div>
			<div class="container-fluid">
				
				<ul class="nav navbar-nav navbar-menud navbar-left">
						<?php
						for($i=0;$i<count($module_content);$i++){
							$module_detail_content = $vendor->get_module_detail($module_content[$i]['id']);
						?>
						
						<?php if($module_detail_content)
						{
							echo '<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>'.$module_content[$i]['name'].'</span><i class="icon-submenu lnr lnr-chevron-down"></i></a>';
							echo '<ul class="dropdown-menu notifications">';
							for($k=0;$k<count($module_detail_content);$k++)
							{
								echo '<li><a href='.$module_detail_content[$k]['path_module'].' class="notification-item"><span class="dot bg-warning"></span>'.$module_detail_content[$k]['name'].'</a></li>';
							}
							echo '</ul>
							</li>';
						}
						else
						{
							echo '<li class="dropdown">
							<a href="#"><span>'.$module_content[$i]['name'].'</span></a>
							</li>';

						}
						?>
						<?php } ?>
				</ul>
				
			</div>
		</nav> 
