<?php
require 'vendor/autoload.php';
require_once('bc_seller_classes/Connections/Connections.php');
require_once('bc_seller_classes/Customer/Register.php');
$contact=$_POST['contact'];
$connections = new Connections();
$mongo_connect = $connections->mongo_bookchor_vendor();
$user_collection=$mongo_connect->selectCollection('users');
$phone_query=array('phone'=>$contact);
$get_user=$user_collection->findOne($phone_query);



if(!empty($get_user))
{
	$apikey = "fPKIQEAuh0q6D3JeZBTENw";
	$apisender = "BKCHOR";
	$string = '0123456789';
	$string_shuffled = str_shuffle($string);
	$password = substr($string_shuffled, 1, 5);
	$sms_message = $password." is the OTP for Bookchor account Login verification. Please Do Not share OTP with Anyone. Thank You";
	$sms_message = rawurlencode($sms_message);
	$url = 'https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey='.$apikey.'&senderid='.$apisender.'&channel=2&DCS=0&flashsms=0&number='.$contact.'&text='.$sms_message.'&route=1';
	$ch=curl_init($url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,"");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,2);
	$data = curl_exec($ch);
	$session_collection=$mongo_connect->selectCollection('session');
	if($session_collection->insertOne(array('logged_in'=>'0','contact'=>$contact,'OTP' => $password)));
	{
		echo "inserted";
	}
}else
{
	echo "No Such User Exist";
}



?>