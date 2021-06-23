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
    <?php include('templates/navbar.php')?>
    <?php include('configure/dbclass.php')?>
    
    <!-- link bl navbar-->

<?php
$db=new DB();
$sql=mysqli_query($db->connectDB(),"SELECT *FROM user WHERE email='".$_SESSION['email']."'");

if($row = mysqli_fetchy_assoc($sql)){
    ?>
    FullName: <?php  echo $row['full_name'];?> <br>
    Email: <?php  echo $row['email'];?> <br>
    Password: <?php  echo $row['password'];?> <br>
    

<?php
}?>
<a href='home_page.php'>Back</a>";
</form>