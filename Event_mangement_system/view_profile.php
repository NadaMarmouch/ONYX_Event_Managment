<!DOCTYPE html>
<html lang="
" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>View Profile</title>
    <link rel="stylesheet" href="assets/sign_up_styles.css"> <!-- hena by linked styling bt3 sign up -->
    <link rel="stylesheet" href="assets/navbar_styles.css"> <!-- hena by linked el navbar-->
</head>
<body>
    <?php include('templates/navbar.php')?> <!-- link bl navbar-->

    <h1>View Profile</h1>

    <!-- sign-up form -->

    <form id="validate" class="" action="view_profile.php" method="POST">
    
        <input class="styles" type="text" name="name" value="<?php echo $_SESSION['name'];?>" required placeholder="Enter your name..">
        <div class="erroRS">
        </div>
        <input class="styles" type="email" name="email" value="<?php echo $_SESSION['email'];?>" required placeholder="Enter your email..">
        <div class="erroRS">
        </div>
        <input class="styles" type="password" name="password1" value="<?php echo $_SESSION['password'];?>" required placeholder="Enter your password..">
        <div class="danger">
            <p> </p>
        </div>
        <div class="erroRS">
            <p> </p>
        </div>
        <input type="submit" name="submit" value="Edit Profile  ">
       
    </form>


    <?php include "user.php";

if(isset($_POST['submit'])){  
    $u=new user();
    $u->EditProfile($_POST['email'],$_POST['name'],$_POST['password1']);
} ?>
    <script type="text/javascript" src="js/form_validation_signup.js"> </script>
</body>

</html>