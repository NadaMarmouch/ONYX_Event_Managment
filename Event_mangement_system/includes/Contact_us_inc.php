<?php



 // ================ Essential Vairbales ===============
 $name = $email = $subject = $message = $phone = "" ;
 $name_v = $email_v  = $subject_v = $message_v =  $phone_v = false;

 if (isset($_POST['submit'])){
  // if non empty --> hidden input field's value ('valid' or '')
       $name = $_POST['user_name'];
       $name_v= true ;



    // if non empty --> hidden input field's value ('valid' or '')
       $email = $_POST['email'];
       $email_v = true ;
      

   // if non empty --> hidden input field's value ('valid' or '')
      $subject = $_POST['subject'];
      $subject_v = true ;
   


   // if non empty --> hidden input field's value ('valid' or '')
      $message = $_POST['message'];
      $message_v = true ;
    

   // if non empty --> hidden input field's value ('valid' or '')
    $phone = $_POST['phone_number'];
    $phone_v = true ;

}


 ?>
