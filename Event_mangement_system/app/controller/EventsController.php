<?php

require_once( "..\app\controller/Controller.php");
include "..\app\model\Model.php";

class EventsController extends Controller{
	public function insert() {
		$EventView= new EventView($this,$this->model);
		$EventModel= new Events();
		
		if(isset($_POST['submit']))
		{	
			$EventModel->setEventname($_POST['type']);
			$EventModel->setStartdate($_POST['Start_Date']);
			$EventModel->setEnddate($_POST['End_Date']);
			$EventModel->setNumofpart($_POST['Guests']);
			$EventModel->setEventtype($_POST['type']);
			$EventModel->setVenuename($_POST['venue']);
			$EventModel->setEventstatus($_POST['status']);
			$EventModel->setComments($_POST['comments']);
			$EventModel->insertEvent();
		}
		
	}

}
?>
