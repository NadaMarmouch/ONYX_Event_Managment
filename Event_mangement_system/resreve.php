<?php
//include('includes/feedback_inc.php'); // linking ma3 el php code ely fl includes file
include('contact.php');

?>
<!DOCTYPE html>
<html lang="
" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>reserve</title>
    <link rel="stylesheet" href="assets/reserve_styles.css"> <!-- hena by linked styling bt3 sign up -->
    <link rel="stylesheet" href="assets/navbar_styles.css"> <!-- hena by linked el navbar-->
</head>

<body>
    <?php include('templates/navbar.php')?> <!-- link bl navbar-->

<div id="contact" class="reserve">
      <br><br><br><br>
      <h5 class="h5" id="contact"></h5>
      <div class="title">
                <h4><span>Reserve</h4>
            </div>
      <form id="validate" class="reserve" action="" method="post">

        <input class="reserve-form" type="text" name="name" value="" required placeholder="Enter your name..">
        <div class="input_errors"> <p>  </p>  </div>
       

        <input class="reserve-form" type="email" name="email" value="" required placeholder="Enter your email..">
        <div class="input_errors"> <p>  </p>  </div>
        
        <input class="reserve-form" type="text" name="phonenumber" value="" required placeholder="Enter your phone number..">
        <div class="input_errors"> <p>  </p>  </div>
        
        <input class="reserve-form" type="text" name="comments" value="" required placeholder="Enter your comments..">
        <div class="input_errors"> <p>  </p>  </div>
        
        <input class="reserve-form" type="number" id="Guests" name="Guests" class="gui-input" required="" placeholder="Number of Guests">
        <span class="field-icon"><i class="fa fa-users"></i></span>
        
        <input class="reserve-form" type="time" id="Time" name="Time" class="gui-input" required="" placeholder="Reserve Event Time">
        <span class="field-icon"><i class="fa fa-users"></i></span>
        

        <input class="reserve-form" type="date" id="Date" name="Date" class="gui-input" required="" placeholder="Reserve Event Date">
        <span class="field-icon"><i class="fa fa-users"></i></span>
        

        <input type="submit" class="reserve-form-btn" name="submit" value="Submit">
      </form>

</div>
<?php

if(isset($_POST['submit'])){
    $r=new contact();   
    $r->addreservation();
    header("emergency_event.php");
} ?>

    </div>