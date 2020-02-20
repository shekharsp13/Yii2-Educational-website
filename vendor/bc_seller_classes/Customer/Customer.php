<?php
class Customer{
	public $vendor;
	public function __construct(){
		$con = new Connections();
		$this->mongo_connect = $con->mongo_bookchor_vendor();
		$this->collection_website_sessions=$this->mongo_connect->selectCollection('website_sessions');
		$this->collection_users=$this->mongo_connect->selectCollection('users');
		$this->collection_user_activity=$this->mongo_connect->selectCollection('user_activity');
		$this->vendor = $con->main_db();
		$user_info = new Utility();
		$this->browser=$user_info->showInfo('browser');
		$this->os=$user_info->showInfo('os');
		$this->version=$user_info->showInfo('version');
		$this->ip_details=$user_info->get_ip_details();
		$this->ip=$this->ip_details['ip'];
		$this->city=$this->ip_details['city'];
		$this->state=$this->ip_details['state'];
	}
	public function insert_activity($token_id,$user_id_flag)
	{
		$current_time_stamp=date('Y-m-d-H-i-s');
		if($user_id_flag==1)
		{
			$result_user=$this->collection_website_sessions->findOne(array("token_id"=>$token_id));
			$array_user = iterator_to_array($result_user);
			$user_id= $array_user['current_user_id'];
			$result_insert_activity=$this->collection_user_activity->insertOne(array('token_id'=>$token_id,"user_id"=>$user_id,"IP_address"=>$this->ip,"City"=>$this->city,"State"=>$this->state,"timestamp"=>$current_time_stamp));
			$id = $result_insert_activity->getInsertedId();
			return $id;
		}
		else
		{
			if($this->collection_user_activity->insertOne(array('token_id'=>$token_id,"IP_address"=>$this->ip,"City"=>$this->city,"State"=>$this->state,"timestamp"=>$current_time_stamp)))
			{
				echo "true activity";
			}
		}
	}
	public function get_session()
	{
		if(isset($_COOKIE['bv_emp_sid']))
		{
			echo $token_id=$_COOKIE['bv_emp_sid'];
			$result=$this->collection_website_sessions->findOne(array("token_id"=>$token_id));
			if($result)
			{
				return $result;
			}
		}
		else
		{
			$token_id=hash_hmac('sha1',$_SERVER['SERVER_ADDR'],$_SERVER['SERVER_PORT']);
			$token_id=hash_hmac('sha1',$token_id,date('YmdHis'));	
			setcookie("bv_emp_sid",$token_id);
			$current_time_stamp=date('Y-m-d-H-i-s');
			$browser=$this->browser;
			$version=$this->version;
			$os=$this->os;
			$user_info_detail[] =array( "Browser" => $browser, "Version" => $version, "OS" => $os);
					//$activity_detail[]=array();
			$website_sessions_con=$this->mongo_connect->selectCollection('website_sessions');
			$this->insert_activity($token_id,0);
			$result_activity=$this->collection_user_activity->findOne(array("token_id" => $token_id));
			$array_activity = iterator_to_array($result_activity);
			$current_activity_id=$array_activity['_id'];
			if($website_sessions_con->insertOne(array('token_id'=>$token_id,'device' => $user_info_detail,'current_activity_id' => $current_activity_id,'logged_in' => 0)))
			{
				echo "insrted";
				
			}
		}
	}
	public function login($email,$password)
	{
		$result=$this->collection_users->findOne(array("email"=>$email,"password"=>md5($password)));
		if(!$result)
		{
			header('Location: login.php'); 
		}
		$array = iterator_to_array($result);
		$token_id=$_COOKIE['bv_emp_sid'];
		$user_id=$array['_id'];
		$update_customer_data = array('$set' => array("current_user_id" => $user_id,"logged_in"=>"1"));
		if($this->collection_website_sessions->updateOne(array("token_id" => $token_id), $update_customer_data))
		{
			echo "true";
		}
		else
		{
			echo "false";
		}
		
		$id=$this->insert_activity($token_id,1);
		$this->collection_website_sessions->updateOne(array("token_id" => $token_id), array('$set' => array("current_activity_id"=>$id)));
		return true;
		
	}
	public function loginOtp($data)
	{
		$get_user=$this->collection_website_sessions->findOne(array('contact'=>$data['phone'],'OTP'=>$data['otp']));
		if(!empty($get_user))
		{
			if($this->collection_website_sessions->updateOne([ 'contact'=>$data['phone'],'OTP'=>$data['otp'] ],[ '$set' => [ 'logged_in' => '1' ]]))
			{
				echo "inserted";
			}else
			{
				echo "false";
			}
		}else
		{
			echo "<div style='background-color:red;'><center><p style='color:white;'>Please Enter Correct OTP</p></center></div>";
		}

	}
	public function logout()
	{
		$current_time_stamp=date('Y-m-d-H-i-s');
		$token_id=$_COOKIE['bv_emp_sid'];
		$result_t=$this->collection_website_sessions->findOne(array('token_id'=>$token_id));
		$array_act = iterator_to_array($result_t);
		$activity_id=$array_act['current_activity_id'];
		$update_customer_data = array('$set' => array("logout_time"=>$current_time_stamp));
		$logout_time=$this->collection_user_activity->updateOne(array("_id" => $activity_id), $update_customer_data);
		$reset=$this->collection_website_sessions->updateOne(array("token_id" => $token_id),array('$set' => array("current_activity_id"=>0,"logged_in"=>0,"current_user_id"=>0)));
		if($reset && $logout_time)
		{
			header('Location: login.php'); 
		}
	}
	
} 
