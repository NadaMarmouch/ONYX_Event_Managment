<?php 
class contact{
    public $name;
    public $e_mail;
    public $subject;
    public $message;
    public $number;
	
     public function addmessage(){
        $dbvar =new DB();
        $sql="INSERT into contact_us (full_name,email,subject,message,phone_number) values('".$_POST['user-name']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."','".$_POST['phone-number']."')";
        mysqli_query($dbvar->connectDB(),$sql);  
     }

}
?>
