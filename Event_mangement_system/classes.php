<?php
include('configure\dbclass.php') ; 
class Event {
	public $id;
	public $name;
	public $image;
	public $descrption;
	public $options;
	function __construct($id) {
		$db_handle = new DB();
		$sql="SELECT * FROM `emergency` WHERE id=".$id;
		/////////////complete DONE////////////////////
		$result = mysqli_query($db_handle->conn,$sql);
		if($row=mysqli_fetch_array($result)){
			$this->id=$row[0];
			$this->packagename=$row[1];
			$this->image=$row[2];
			$this->description=$row[3];
			$this->options=array();
		}
		$result= mysqli_query($db_handle->conn,$sql);
		while($row=mysqli_fetch_array($result)){
			$this->options[$row['packagename']]=$row[2];
		}
	}


	static function getAllEvents(){
		/////////////complete DONE////////////////////
		$Events; $i=0;
		$db_handle= new DB();
		$sql="SELECT * FROM  `emergency`";
		$result = mysqli_query($db_handle->conn,$sql);
		while($row=mysqli_fetch_array($result)){
			$Events[$i++]=new Event ($row[0]);
		}
		return $Events;
	}
}

class Cart{
	public $EventsQuantity;

	function __construct(){
		$this->EventsQuantity=array();
	}

	function addEvent($EventID,$q){		
	/////////////complete DONE////////////////////
	if(array_key_exists((string)$EventID,$this->EventsQuantity))
	$this->EventsQuantity[(string)$EventID]+=$q;
	else
	$this->EventsQuantity[(string)$EventID]=$q;
	}

	function removeEvent($EventID){
	/////////////complete DONE////////////////////
	unset($this->EventsQuantity[(string)$EventID]);
	}

	function emptyEvent(){
	/////////////complete DONE////////////////////
	unset($this->EventsQuantity);
	$this->EventsQuantity=array();
	}
}

?>