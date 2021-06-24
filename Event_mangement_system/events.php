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


      public function view_Events_Status(){
         $dbvariable=new DB();
   
         $sql="select *from event_status";
         $result=mysqli_query($dbvariable->connectDB(),$sql);
    
         while ($row=mysqli_fetch_array($result)){
            $str.="<option>".$row['event_status']."</option>"; 
         }
         echo $str;
}

public function view_Events_Venue(){
   $dbvariable=new DB();

   $sql="select *from venue";
   $result=mysqli_query($dbvariable->connectDB(),$sql);

   while ($row=mysqli_fetch_array($result)){
      $str.="<option>".$row['venue_name']."</option>"; 
   }
   echo $str;
}

   public function Reserve($name,$email,$date,$time,$attendee,$phone,$comment,$type)
   {
    $dbvariable=new DB();
  
   $sql="INSERT INTO `reservation`(`name`, `email`, `meeting_date`, `meeting_time`, `num_of_per`, `phone`, `comments`, `type`) 
    VALUES('$name','$email','$date','$time','$attendee','$phone','$comment','$type')";
    $result=mysqli_query($dbvariable->connectDB(),$sql);
}
}
?>