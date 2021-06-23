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

    <h1>View Profile</h1>

    <!-- sign-up form -->
    <form id="validate" class="" action="signup.php" method="POST">

        <input class="styles" type="text" name="name" value="" required placeholder="Enter your name..">
        <div class="erroRS">
        </div>
        <input class="styles" type="email" name="email" value="" required placeholder="Enter your email..">
        <div class="erroRS">
        </div>
        <input class="styles" type="password" name="password1" minlength="8" value="" required placeholder="Enter your password..">
        <div class="danger">
            <p> </p>
        </div>
        <input class="styles" type="password" name="password2" minlength="8" value="" required placeholder="Re-type your password..">
        <div class="erroRS">
            <p> </p>
        </div>
        <input type="submit" name="signup" value="Edit Profile  ">
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