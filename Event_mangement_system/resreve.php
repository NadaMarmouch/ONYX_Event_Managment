<?php
//include('includes/feedback_inc.php'); // linking ma3 el php code ely fl includes file
include('configure/db_connect.php'); // linking ma3 database bl file ely fl configure file

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
      <form id="validate" class="reserve" action="resreve.php" method="post">

        <input class="reserve-form" type="text" name="name" value="" placeholder="Enter your name..">
        <div class="input_errors"> <p>  </p>  </div>
        <input type="hidden" name="name-v" value="">

        <input class="reserve-form" type="email" name="email" value="" placeholder="Enter your email..">
        <div class="input_errors"> <p>  </p>  </div>
        <input type="hidden" name="email-v" value="">

        <input class="reserve-form" type="text" name="phonenumber" value="" placeholder="Enter your phone number..">
        <div class="input_errors"> <p>  </p>  </div>
        <input type="hidden" name="phonenumber-v" value="">
        
        <input class="reserve-form" type="text" name="comments" value="" placeholder="Enter your comments..">
        <div class="input_errors"> <p>  </p>  </div>
        <input type="hidden" name="comments-v" value="">

        <input class="reserve-form" type="number" id="Guests" name="Guests" class="gui-input" required="" placeholder="Number of Guests">
        <span class="field-icon"><i class="fa fa-users"></i></span>
        <input type="hidden" name="Guests-v" value="">

        <input type="submit" class="reserve-form-btn" name="submit" value="Submit">
      </form>

</div>
<?php
include "contact.php";

if(isset($_POST['submit'])){
    $r=new contact();
    $r->addreservation();
    header("emergency_event.php");
} ?>

    </div>