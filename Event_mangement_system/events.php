<?php 
include 'configure/dbclass.php';

class Events
{
   public function view_Events_Types(){
      $dbvariable=new DB();

      $sql="select *from event_type";
      $result=mysqli_query($dbvariable->connectDB(),$sql);
      //araay[10];
      while ($row=mysqli_fetch_array($result)){//array.length 0 1 2
         $str.="<option>".$row['event_type']."</option>"; 
      }
   echo $str;
}
   public function Reserve($name,$email,$date,$time,$attendee,$phone,$comment,$type)
   {
    $dbvariable=new DB();
    $sql="INSERT INTO `reservation`( `name`, `email`, `meeting_date`, `meeting_time`, `num_of_per`, `phone`, `comments`, `type`) 
    VALUES ('$name','$email','$date','$time','$attendee','$phone','$comment','$type')";
    $result=mysqli_query($dbvariable->connectDB(),$sql);
}
}
?>