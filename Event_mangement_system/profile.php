
<!DOCTYPE html>
<html lang="
" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="stylesheet" href="assets/profile_styles.css"> <!-- hena by linked el navbar-->
    <link rel="stylesheet" href="assets/navbar_styles.css"> <!-- hena by linked el navbar-->
</head>
<body>
    <?php include('templates/navbar.php')?> <!-- link bl navbar-->

<?php
session_start();	
include_once "UserClass.php";

$UserObject=new User($_SESSION["ID"]);

echo "<h1>Your Profile</h1>";
echo "UserName: " .   $UserObject->UserName."<br>";
echo "Password: " .   $UserObject->Password."<br>";
echo "email: " .   $UserObject->email."<br>";



// echo "Type: "  .	$UserObject->UserType_obj->UserTypeName."<br>";

echo"<a href='home_page.php'>Back</a>";

?>
