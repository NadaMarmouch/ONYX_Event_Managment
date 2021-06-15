<?php 
require_once('configure/dbclass.php');
class user
{
   public $name;
   public $e_mail;
   public $password;
   
   public function view_Events_Types(){
      $dbvariable=new DB();

      $sql="select *from event_type";
      $result=mysqli_query($dbvariable->connectDB(),$sql);
 
      while ($row=mysqli_fetch_array($result)){
         $str.="<option>".$row['event_type']."</option>"; 
      }
      echo $str;
}
   public function adduser()
   {
      $dbvariable =new DB();
      $sql="INSERT into user (full_name,email,password) values('$_POST[name]','$_POST[email]','$_POST[password1]')";
      mysqli_query($dbvariable->connectDB(),$sql);  
      header("location:home_page.php");
   }
   
   public function login($email,$password){
   
      $dbvariable =new DB();
      $sql=" SELECT * from user where email='$email' and password='$password'";
      $result=mysqli_query($dbvariable->connectDB(),$sql);  
      $row=mysqli_fetch_array($result);
      if(mysqli_num_rows($result)>0)
      {
         
         if($row['email']==$email && $row['password']==$password )
         {  
            echo 'Hi';
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            $_SESSION['name']=$row['full_name'];
            header("Location:home_page.php");
         }  
         else
         {
            echo "<scrript>alert('Invalid Email and Password');</script>";
         }  
      }

   }
  
}
?>