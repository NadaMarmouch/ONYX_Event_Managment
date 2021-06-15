<?php
include('includes/signup_inc.php'); // linking ma3 el php code ely fl includes file
include 'events.php';
?>
<!DOCTYPE html>
<html lang="
" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="assets/sign_up_styles.css"> <!-- hena by linked styling bt3 sign up -->
    <link rel="stylesheet" href="assets/navbar_styles.css"> <!-- hena by linked el navbar-->
</head>
<body>
    <?php include('templates/navbar.php')?> <!-- link bl navbar-->

    <h1>Reserve Meetings </h1>

    <!-- sign-up form -->
    <form id="validate" class="" action="schedulemeeting.php" method="POST">

        <input class="styles"style ="width:13.5%;" type="text" name="name" value="" placeholder="Enter your name..">
       

        <input class="styles" type="email" style ="width:13.5%;"name="email"  placeholder="Enter your email..">
        <br>
        <input class="styles" type="text" style ="width:13.5%;"name="phone"  placeholder="Enter your phone number..">
        <select class="styles"  style ="width:16%;height:50px;"name="type"  placeholder="Enter your Type of Event">
        <?php 
        $events=new Events();
        $events->view_Events_Types();
        ?>        
        
        </select>
        <br>  

  
        <input style ="width:13.5%;" class="styles" type="date" name="date" >


       <input class="styles" style="width:13.5%;" type="time" name="time"  ><br>
       <input style="width:22%;"class="styles" type="text" placeholder="Add comment" name="comment">
        
        <input class="styles"  style="width:5%;"type="number"placeholder="Attendee" min="1" name="attendee"  ><br>

        <input type="submit" name="reserve" value="Schedule Meeting">
    </form>


    <?php 

if(isset($_POST['reserve'])){  
    $u=new Events();
    $u->Reserve($_POST['name'],$_POST['email'],$_POST['date'],$_POST['time'],$_POST['attendee'],$_POST['phone'],$_POST['comment'],$_POST['type']);
} ?>
    <!-- link bl signup php-->
    <script type="text/javascript" src="js/form_validation_signup.js"> </script>
</body>

</html>