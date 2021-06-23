<?php
include 'events.php';
?>
<!DOCTYPE html>
<html lang="
" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Book an event</title>
    <link rel="stylesheet" href="assets/Book_styles.css"> <!-- hena by linked styling bt3 sign up -->
    <link rel="stylesheet" href="assets/navbar_styles.css"> <!-- hena by linked el navbar-->
</head>

<body>
    <?php include('templates/navbar.php')?> <!-- link bl navbar-->

    <div id="events" class="events">
      <br><br><br><br>
      <h5 class="h5" id="events">Booking an event</h5>
      <form id="validate" class="" action="home_page" method="POST">

        <input class="event-form"  style ="width:20%;height:60px;" type="date" id="Date" name="Start_Date" class="gui-input" required="" placeholder="Event Start Date">
        <span class="field-icon"><i class="fa fa-users"></i></span>

        <input class="event-form" style ="width:20%;height:60px;" type="date" id="Date" name="End_Date" class="gui-input" required="" placeholder=" Event End Date">
        <span class="field-icon"><i class="fa fa-users"></i></span>
       <br>
        <input class="event-form"  style ="width:20%;height:60px;" type="number" id="Guests" name="Guests" class="gui-input" required="" placeholder="Number of Guests">
        <span class="field-icon"><i class="fa fa-users"></i></span>

        <input class="event-form"  style ="width:20%;height:60px;" type="text" name="comments" value="" required placeholder="Enter your comments..">
        <div class="input_errors"> <p>  </p>  </div>
<br>

        <select class="event-form"  style ="width:20%;height:60px;"name="type"  required placeholder="Enter your Type of Event">
        <?php 
        $events=new Events();
        $events->view_Events_Types();
        ?>     
</select>
        <select class="event-form"  style ="width:20%;height:60px;"name="type"  required placeholder="Enter your Venue Name">
        <?php 
        $events->view_Events_Venue();
        ?>  
</select>
    <br>    
        <select class="event-form"  style ="width:20%;height:60px;"name="type"  required placeholder="Enter your Event Status">
        <?php 
        $events->view_Events_Status();
        ?> 
</select>
        <input type="submit" class="event-form-btn" name="submit" value="Submit">
      </form>
      