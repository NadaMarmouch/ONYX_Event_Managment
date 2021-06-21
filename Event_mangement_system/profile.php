<?php
session_start();	
include_once "UserClass.php";

$UserObject=new User($_SESSION["ID"]);

echo "<h1>Your Profile</h1>";
echo "UserName: " .   $UserObject->UserName."<br>";
echo "Password: " .   $UserObject->Password."<br>";
echo "email: " .   $UserObject->email."<br>";



// echo "Type: "  .	$UserObject->UserType_obj->UserTypeName."<br>";

echo"<a href='index.php'>Back</a>";

?>
