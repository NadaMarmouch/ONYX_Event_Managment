<?php

include('configure/db_connect.php');



$sql = "SELECT * FROM user" ;//  CRUD -> R
$sql1 = "SELECT * FROM contact_us" ;
$sql2 = "SELECT * FROM reservation" ;
$sql3 = "SELECT * FROM testimonials";
$sql4 = "SELECT * FROM events" ;
$sql5 = "SELECT * FROM emergency_event" ;

$results = mysqli_query($conn, $sql) ;
$results1 = mysqli_query($conn, $sql1) ;
$results2 = mysqli_query($conn, $sql2) ;
$results3 = mysqli_query($conn, $sql3) ;
$results4 = mysqli_query($conn, $sql4) ;
$results5 = mysqli_query($conn, $sql5) ;

$results_assoc = mysqli_fetch_all($results, MYSQLI_ASSOC) ;
$results_assoc1 = mysqli_fetch_all($results1, MYSQLI_ASSOC) ;
$results_assoc2 = mysqli_fetch_all($results2, MYSQLI_ASSOC) ;
$results_assoc3 = mysqli_fetch_all($results3, MYSQLI_ASSOC);
$results_assoc4 = mysqli_fetch_all($results4, MYSQLI_ASSOC);
$results_assoc5 = mysqli_fetch_all($results5, MYSQLI_ASSOC);

mysqli_free_result($results) ;
mysqli_free_result($results1) ;
mysqli_free_result($results2) ;
mysqli_free_result($results3) ;
mysqli_free_result($results4) ;
mysqli_free_result($results5) ;
mysqli_close($conn);




 ?>
