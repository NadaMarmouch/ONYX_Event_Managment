<?php



 // ================ Essential Vairbales ===============
 $name = $email = $feedback  "" ;
 $name_v = $email_v  = $feedback_v  = false;

 if (isset($_POST['submit'])){
   if (!empty($_POST['name-v'])){ // if non empty --> hidden input field's value ('valid' or '')
       $name = $_POST['user_name'];
       $name_v= true ;}



   if (!empty($_POST['email-v'])){ // if non empty --> hidden input field's value ('valid' or '')
       $email = $_POST['email'];
       $email_v = true ;
      }

  if (!empty($_POST['feedback-v'])){ // if non empty --> hidden input field's value ('valid' or '')
      $subject = $_POST['feedback'];
      $subject_v = true ;
    }

}


 ?>
