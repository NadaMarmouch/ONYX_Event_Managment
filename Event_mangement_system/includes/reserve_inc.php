
<?php



 // ================ Essential Vairbales ===============
 $name = $email = $phonenumber= $Guests  =$comments="" ;
 $name_v = $email_v  = $phonenumber_v = $Guests_v  =$comments_v  = false;

 if (isset($_POST['submit'])){
    // if non empty --> hidden input field's value ('valid' or '')
       $name = $_POST['name'];
       $name_v= true ;


   // if non empty --> hidden input field's value ('valid' or '')
       $email = $_POST['email'];
       $email_v = true ;
      

   // if non empty --> hidden input field's value ('valid' or '')
      $number = $_POST['phonenumber'];
      $number_v = true ;
    
     // if non empty --> hidden input field's value ('valid' or '')
        $numofguest = $_POST['Guests'];
        $numofguest_v = true ;
       
 
   // if non empty --> hidden input field's value ('valid' or '')
       $comments = $_POST['comments'];
       $comments_v = true ;
     

}


 ?>
