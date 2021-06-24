<?php
require_once("Model.php");
class Events extends Model {
	protected $event_name;
    protected $start_date;
    protected $end_date;
    protected $num_of_part;
    protected $event_type;
    protected $venue_name;
    protected $event_status;
    protected $comments;

   public function __construct() {
$this->event_name='';
$this->start_date="";
$this->end_date="";
$this->num_of_part="";
$this->event_type= "";
$this->venue_name=" ";
$this->event_status=" ";
$this->comments=" ";
    }

    public function getEventname(){
        return $this->event_name;
    }
    public function setEventname($event_name){
        $this->event_name=$event_name;
    }
    public function getStartdate(){
        return $this->start_date;
    }
    public function setStartdate($start_date){
       $this->start_date=$start_date;
    }
    public function getEnddate(){
        return $this->end_date;
    }
    public function setEnddate($end_date){
       $this->end_date=$end_date;
    }
    public function getNumofpart(){
        return $this->num_of_part;
    }
    public function setNumofpart($num_of_part){
       $this->num_of_part=$num_of_part;
    }
    public function getEventtype(){
        return $this->event_type;
    }
    public function setEventtype($event_type){
     $this->event_type=$event_type;
    }
    public function getVenuename(){
        return $this->venue_name;
    }
    public function setVenuename($venue_name){
     $this->venue_name=$venue_name;
    }
    public function getEventstatus(){
        return $this->event_status;
    }
    public function setEventstatus($event_status){
     $this->event_status=$event_status;
    }
    public function getComments(){
        return $this->comments;
    }
    public function setComments($comments){
     $this->comments=$comments;
    }

    
    function insertEvent(){

		$sql = "INSERT INTO `events`(`user_id`, `event_name`, `start_date`, `end_date`, `num_of_part`, `event_type`, `venue_name`, `event_status`, `comments`) 
        VALUES ('$_SESSION[id]','$this->event_name','$this->start_date','$this->end_date','$this->num_of_part','$this->event_type','$this->venue_name','$this->event_status','$this->comments')";
        $db=new DBH();
        mysqli_query($db->connectDB(),$sql);
}


public function view_Events_Types(){
    $dbvariable=new DBH();

    $sql="select *from event_type";
    $result=mysqli_query($dbvariable->connectDB(),$sql);
$str=' ';
    while ($row=mysqli_fetch_array($result)){
       $str.='<option>'.$row['event_type'].'</option>'; 
    }
    return $str;
 }
 public function view_Events_Status(){
    $dbvariable=new DBH();

    $sql="select *from event_status";
    $result=mysqli_query($dbvariable->connectDB(),$sql);
$str='';
    while ($row=mysqli_fetch_array($result)){
       $str.="<option>".$row['event_status']."</option>"; 
    }
    return $str;
}
public function view_Events_Venue(){
    $dbvariable=new DBH();
    $sql="select *from venue";
    $result=mysqli_query($dbvariable->connectDB(),$sql);
    $str='';
    while ($row=mysqli_fetch_array($result)){
       $str.="<option>".$row['venue_name']."</option>"; 
    }
    return $str;
 }
 public function Reserve($name,$email,$date,$time,$attendee,$phone,$comment,$type)
 {
  $dbvariable=new DB();
 $check="select  * from reservation where meeting_date='$date' and meeting_time='$time'  ";
 if(mysqli_query($dbvariable->connectDB(),$check))
 {
 echo '<script>alert("This time is already reserved")</script>';  
 }
 $sql="INSERT INTO `reservation`(`name`, `email`, `meeting_date`, `meeting_time`, `num_of_per`, `phone`, `comments`, `type`) 
  VALUES('$name','$email','$date','$time','$attendee','$phone','$comment','$type')";
  $result=mysqli_query($dbvariable->connectDB(),$sql);
}

}