<?php
class contact{
    public $name;
    public $e_mail;
    public $subject;
    public $message;
    public $number;

     public function addmessage(){
        $dbvar =new db();
        $sql="INSERT into contact_us (full_name,email,subject,message,phone_number) values('".$_POST['user_name']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."','".$_POST['phone_number']."')";
        mysqli_query($dbvar->connectDB(),$sql);
     }

}
?>