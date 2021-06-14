
<?php
//DB Connection
include('configure/db_connect.php');
// ================ Essential Vairbales ===============
$errors = ["name" => "",  "email" => ""];
$name = $email = $password = $hashedPass =  "" ;
$name_v = $email_v  = $password_v = false;


if (isset($_POST['signup']))
{

  // How will php know that there are values in the input fields? (aka: How will it know thhat the input fields are NOT EMPTY?)
  // Conditional to let PHP take control ONLY IF THE USERNAME IS NOT EMPTY

  // ================== Username: Existance validation ===============
  if (!empty($_POST['name-v'])){ // if non empty --> hidden input field's value ('valid' or '')
      $name = $_POST['name'];
      $sql  = "SELECT * FROM user WHERE full_name = '$name';";

      $results = mysqli_query($conn,$sql) ;
      if (mysqli_num_rows($results) > 0 ) {
        // Error
        $errors['name'] = "Name Already Exists!";

      }
      else {
        // ussername does no exist --> can be created!
        // echo "Valid username";
        $name_v= true ;

      }

  }
  // ================== Email: Existance validation ===============
 
      $email = $_POST['email'];
      $sql  = "SELECT * FROM user WHERE email = '$email';";
      $results = mysqli_query($conn,$sql) ;
      if (mysqli_num_rows($results) > 0 ) {
        // Error
        $errors['email'] = "Email Already Exists!";

      }
      else {
        // ussername does no exist --> can be created!
        // echo "<br>Valid Email";
        $email_v = true ;
      }
  }

  // ================== Password ===============

  if (!empty($_POST['password-v'])){
    // to grab the val in pass input field

    $password = $_POST['password2'];
    // hash the password
    $hashedPass = password_hash($password,PASSWORD_DEFAULT);
    $password_v = true ;
  }


  ?>