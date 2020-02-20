<?php

	class Connections{
		public $con;
		public $vendor;
		public function __construct(){
		
		}
		public function mongo_bookchor_vendor(){

			$con = (new MongoDB\Client)->bookchor_vendor;
			return $con;
		}
		public function main_db(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "bookchor_vendor";
			$this->vendor = new mysqli($servername, $username, $password, $dbname);
			return $this->vendor;
		}

	}

?>