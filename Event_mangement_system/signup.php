<?php
include('includes/signup_inc.php'); // linking ma3 el php code ely fl includes file

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

    <h1>Sign-Up</h1>

    <!-- sign-up form -->
    <form id="validate" class="" action="signup.php" method="POST">

        <input class="styles" type="text" name="name" value="<?php echo $name ?>" placeholder="Enter your name..">
        <div class="erroRS">
            <p> <?php echo $errors['name'] ?> </p>
        </div>


        <input class="styles" type="email" name="email" value="<?php echo $email ?>" placeholder="Enter your email..">
        <div class="erroRS">
            <p> <?php echo $errors['email'] ?> </p>
        </div>



        <input class="styles" type="password" name="password1" value="" placeholder="Enter your password..">
        <div class="danger">
            <p> </p>
        </div>

        <input class="styles" type="password" name="password2" value="" placeholder="Re-type your password..">
        <div class="erroRS">
            <p> </p>
        </div>


        <input type="submit" name="signup" value="Register">
    </form>


    <?php include "user.php";

if(isset($_POST['signup'])){  
    $u=new user();
    $u->adduser();
} ?>
    <!-- link bl signup php-->
    <script type="text/javascript" src="js/form_validation_signup.js"> </script>
</body>

</html>