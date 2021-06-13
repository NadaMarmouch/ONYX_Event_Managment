<?php
include 'configure/dbclass.php';
class contact{
    public $name;
    public $e_mail;
    public $subject;
    public $message;
    public $number;
    public $feedback;


     public function addmessage(){
        $dbvar =new db();
        $sql="INSERT INTO `contact_us`(`full_name`, `email`, `subject`, `message`, `phone_number`) VALUES ('$_POST[user_name]','$_POST[email]','$_POST[subject]','$_POST[message]','$_POST[phone_number]') ";
         mysqli_query($dbvar->connectDB(),$sql);
     }
     public function addfeedback($name,$e_mail,$feedback){
        $dbvar =new db();
        $sql="INSERT INTO `testimonials`(`name`, `email`, `feeback` ) VALUES ($name,$e_mail,$feedback) ";
         mysqli_query($dbvar->connectDB(),$sql);
     }

}
?>
