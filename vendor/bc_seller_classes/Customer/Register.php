<?php
class Register{
	
		public function __construct()
		{
			$connections = new Connections();
		    $this->mongo_connect = $connections->mongo_bookchor_vendor();
		    $this->users_collection=$this->mongo_connect->selectCollection('users');
		    $this->customer=new Customer();
		}

	public function registerUser($reg)
	{
		$this->customer->get_session();
		$user_access=array(1,2,3,4,5);
		$user_role[]=array("name"=>'Super User',"access"=>$user_access);
		if($this->users_collection->insertOne(array('vendor_id'=>'1','username' => $reg['name'],'email' => $reg['email'],'phone' => $reg['phone'],'password' => md5($reg['password']),'role'=>$user_role)))
		{
			echo "inserted";
		}
	}
	
}
?>