<?php

$conn =   mysqli_connect("localhost","root", "","onyx_event_management");

 // ================ Essential Vairbales ===============
 $name = $email = $subject = $message = $phone = "" ;
 $name_v = $email_v  = $subject_v = $message_v =  $phone_v = false;

 if (isset($_POST['submit'])){
   if (!empty($_POST['name-v'])){ // if non empty --> hidden input field's value ('valid' or '')
       $name = $_POST['user-name'];
       $name_v= true ;}



   if (!empty($_POST['email-v'])){ // if non empty --> hidden input field's value ('valid' or '')
       $email = $_POST['email'];
       $email_v = true ;
}

  if (!empty($_POST['subject-v'])){ // if non empty --> hidden input field's value ('valid' or '')
      $subject = $_POST['subject'];
      $subject_v = true ;
  }


  if (!empty($_POST['message-v'])){ // if non empty --> hidden input field's value ('valid' or '')
      $message = $_POST['message'];
      $message_v = true ;
  }

  if (!empty($_POST['phone-v'])){ // if non empty --> hidden input field's value ('valid' or '')
    $phone = $_POST['phone-number'];
    $phone_v = true ;
}

// var_dump($name);
// var_dump($email);
// var_dump($subject);
// var_dump($message);
  if ($name_v && $email_v && $subject_v && $message_v) {
    $sql = "INSERT INTO contact_us (full_name,email,subject,message,phone_number) VALUES ('$name','$email','$subject','$message',$phone)";
    if (mysqli_query($conn,$sql)){
      // echo "succes";
      header('Location: ../home_page.php');

    }else {
    echo "failed";

    }

    }
  }


 ?>
