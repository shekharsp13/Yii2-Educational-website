<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	require 'vendor/autoload.php';
	require_once('bc_seller_classes/Connections/Connections.php');
	require_once('bc_seller_classes/Customer/Customer.php');
	require_once('bc_seller_classes/Utility/Utility.php');
	$customer = new Customer();
	$customer->logout();
?> 
