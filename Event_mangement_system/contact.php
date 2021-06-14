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
        $sql="INSERT INTO `emergency_event`(`name`, `email`, `phonenumber`, `numberofguests`, `comments` ) VALUES ('$_POST[name]','$_POST[email]','$_POST[phonenumber]','$_POST[Guests]','$_POST[comments]') ";
         mysqli_query($dbvar->connectDB(),$sql);
     }

}
?>
