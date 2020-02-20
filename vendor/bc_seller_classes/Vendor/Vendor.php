<?php
	class Vendor{
		public $vendor;
		public function __construct(){
			$con = new Connections();
			$this->vendor = $con->main_db();
		}
		public function get_module()
		{
			$get_module = "SELECT id,name FROM `module` WHERE flag=1";
			$stmt_get_module = $this->vendor->prepare($get_module);
			$stmt_get_module->execute();
			$row_get_module = $stmt_get_module->get_result();
			while ($row = $row_get_module->fetch_array(MYSQLI_ASSOC))
        		{
        			$row['id']=$row['id'];
        			$row['name']=$row['name'];
        			$data[]=$row;
				}
        		return $data;
		}
		public function get_module_detail($id)
		{
			$data=[];
			$get_module_detail = "SELECT name,path_module FROM `module_detail` where `module_id`=".$id;
			$stmt_get_module_detail = $this->vendor->prepare($get_module_detail);
			$stmt_get_module_detail->execute();
			$row_get_module_detail = $stmt_get_module_detail->get_result();
			$rowCount=$row_get_module_detail->num_rows;
			if($rowCount>0)
			{
			while ($row = $row_get_module_detail->fetch_array(MYSQLI_ASSOC))
        		{
        			$data[]=$row;
        		}
        		return $data;
			}
			else
			{
				return false;
			}
			
		}
	}


