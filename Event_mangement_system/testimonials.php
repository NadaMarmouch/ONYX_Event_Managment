<?php
//include('configure/dbclass.php'); // linking ma3 database bl file ely fl configure file
include('includes/feedback_inc.php'); // linking ma3 el php code ely fl includes file


?>
<!DOCTYPE html>
<html lang="
" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>testimonials</title>
    <link rel="stylesheet" href="assets/feedback_styles.css"> <!-- hena by linked styling bt3 sign up -->
    <link rel="stylesheet" href="assets/navbar_styles.css"> <!-- hena by linked el navbar-->
</head>

<body>
    <?php include('templates/navbar.php')?> <!-- link bl navbar-->

<div id="contact" class="testimonials">
      <br><br><br><br>
      <h5 class="h5" id="contact">Testimonials</h5>
      <form id="validate" class="testimonials" action="testimonials.php" method="post">

        <input class="testimonials-form" type="text" name="user_name" value="" required placeholder="Enter your name..">
        <div class="input_errors"> <p>  </p>  </div>
        <input type="hidden" name="name-v" value="">

        <input class="testimonials-form" type="email" name="email" value="" required placeholder="Enter your email..">
        <div class="input_errors"> <p>  </p>  </div>
        <input type="hidden" name="email-v" value="">

        <input class="testimonials-form" type="text" name="feedback" value="" required placeholder="Give us your feedback..">
        <div class="input_errors"> <p>  </p>  </div>
        <input type="hidden" name="feedback-v" value="">

        <input type="submit" class="testimonials-form-btn" name="submit" value="Submit">
      </form>
      <?php
           ?>
           
           <?php
     include "contact.php";
 if(isset($_POST['submit'])){
     $e=new contact();
     $e->addfeedback();
 } ?>

</div>

