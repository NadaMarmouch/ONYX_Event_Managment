<?php
include 'configure/dbclass.php';
class contact{
    public $name;
    public $e_mail;
    public $subject;
    public $message;
    public $number;
    public $feedback;
    public $numofguests;
    public $comments;


     public function addmessage(){
        $dbvar =new db();
        $sql="INSERT INTO `contact_us`(`full_name`, `email`, `subject`, `message`, `phone_number`) VALUES ('$_POST[user_name]','$_POST[email]','$_POST[subject]','$_POST[message]','$_POST[phone_number]') ";
         mysqli_query($dbvar->connectDB(),$sql);
     }
     public function addfeedback(){
        $dbvar =new db();
        $sql="INSERT INTO `testimonials`(`name`, `email`, `feedback` ) VALUES ('$_POST[user_name]','$_POST[email]','$_POST[feedback]') ";
         mysqli_query($dbvar->connectDB(),$sql);
     }

     public function addreservation(){
         $dbvar =new db();
         if(isset($_GET['id'])){
          $id=$_GET['id'];  
            $x="select * from emergency where id='$id'";
         $result=mysqli_query($dbvar->connectDB(),$x);
         $row=mysqli_fetch_array($result);
        
        }
        $sql="INSERT INTO `emergency_event`(`name`, `email`, `reserve_time`,`reserve_date`,`phonenumber`, `numberofguests`, `comments`,packagename ) VALUES ('$_POST[name]','$_POST[email]','$_POST[Time]','$_POST[Date]','$_POST[phonenumber]','$_POST[Guests]','$_POST[comments]','$row[packagename]') ";
         mysqli_query($dbvar->connectDB(),$sql);
     }

}
?>

