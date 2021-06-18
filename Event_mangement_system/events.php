<?php 
include 'configure/dbclass.php';
class Events
{
    public function view_Events_Types(){
      $dbvariable=new DB();

      $sql="select *from event_type";
      $result=mysqli_query($dbvariable->connectDB(),$sql);
 
      while ($row=mysqli_fetch_array($result)){
         $str.="<option>".$row['event_type']."</option>"; 
      }
      echo $str;
}
   public function Reserve($name,$email,$date,$time,$attendee,$phone,$comment,$type)
   {
    $dbvariable=new DB();
   $check="select  * from reservation where meeting_date='$date' and meeting_time='$time'  ";
   if(mysqli_query($dbvariable->connectDB(),$check))
   {
   echo '<script>alert("This time is already reserved")</script>';  
   }
   $sql="INSERT INTO `reservation`( `name`, `email`, `meeting_date`, `meeting_time`, `num_of_per`, `phone`, `comments`, `type`) 
    VALUES ('$name','$email','$date','$time','$attendee','$phone','$comment','$type')";
    $result=mysqli_query($dbvariable->connectDB(),$sql);
}
}
?>