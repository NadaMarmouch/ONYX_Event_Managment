<?php
class SERVICESS {
	public $id;
	public $name;
	public $image;
	public $descrption;
	public $options;
	function __construct($id) {
		$db_handle = new DB();
		$sql="SELECT * FROM `services` WHERE id=".$id;
		/////////////complete DONE////////////////////
		$result = mysqli_query($db_handle->conn,$sql);
		if($row=mysqli_fetch_array($result)){
			$this->id=$row[0];
			$this->service_name=$row[1];
			$this->image=$row[2];
			$this->description=$row[3];
			$this->options=array();
		}
		$result= mysqli_query($db_handle->conn,$sql);
		while($row=mysqli_fetch_array($result)){
			$this->options[$row['service_name']]=$row[2];
		}
	}


	static function getAllServices(){
		/////////////complete DONE////////////////////
		$Services; $i=0;
		$db_handle= new DB();
		$sql="SELECT * FROM  `services`";
		$result = mysqli_query($db_handle->conn,$sql);
		while($row=mysqli_fetch_array($result)){
			$Services[$i++]=new SERVICESS ($row[0]);
		}
		return $Services;
	}
}
?>