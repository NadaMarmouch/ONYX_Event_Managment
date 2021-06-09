<?php 
include 'configure/dbclass.php';
class user
{
   public $name;
   public $e_mail;
   public $password;
	
   public function adduser()
   {
      $dbvariable =new DB();
      $sql="INSERT into user (full_name,email,password) values('$_POST[name]','$_POST[email]','$_POST[password1]')";
      mysqli_query($dbvariable->connectDB(),$sql);  
   }
   public function login($email,$password)
   {
      $dbvariable =new DB();
      $sql="select * from user where email='$email' and password='$password'";
      $result=mysqli_query($dbvariable->connectDB(),$sql);  
      $row=mysqli_fetch_array($result);
      if(mysqli_num_rows($result)==1)
      {
         if($row['email']==$email && $row['password']==$password )
         {
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            $_SESSION['name']=$row['full_name'];
            header("Location:home_page.php");
            session_unset();
         }
         else
         {
            echo "<scrript>alert('Invalid Email and Password');</script>";
         }  
      }
   }
}
?>