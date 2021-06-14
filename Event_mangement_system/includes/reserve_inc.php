<?php



 // ================ Essential Vairbales ===============
 $name = $email = $feedback   ="" ;
 $name_v = $email_v  = $feedback_v  = false;

 if (isset($_POST['submit'])){
   if (!empty($_POST['name-v'])){ // if non empty --> hidden input field's value ('valid' or '')
       $name = $_POST['name'];
       $name_v= true ;}



   if (!empty($_POST['email-v'])){ // if non empty --> hidden input field's value ('valid' or '')
       $email = $_POST['email'];
       $email_v = true ;
      }

  if (!empty($_POST['phonenumber-v'])){ // if non empty --> hidden input field's value ('valid' or '')
      $number = $_POST['phonenumber'];
      $number_v = true ;
    }
    if (!empty($_POST['Guests-v'])){ // if non empty --> hidden input field's value ('valid' or '')
        $numofguest = $_POST['Guests'];
        $numofguest_v = true ;
       }
 
   if (!empty($_POST['comments-v'])){ // if non empty --> hidden input field's value ('valid' or '')
       $comments = $_POST['comments'];
       $comments_v = true ;
     }

}


 ?>
