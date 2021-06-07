<?php 
class user{
    public $name;
    public $e_mail;
    public $password;
	
     public function adduser(){
        $dbvariable =new DB();
        $sql="INSERT into user (full_name,email,password) values('$_POST[name]','$_POST[email]','$_POST[password1]')";
        mysqli_query($dbvariable->connectDB(),$sql);  
     }

}
?>