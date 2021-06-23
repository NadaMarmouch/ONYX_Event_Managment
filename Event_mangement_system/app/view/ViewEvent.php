<?php
require_once("View.php");

class EventView extends View{
  public function output(){
    include("../templates/navbar.php");
   $event= new Events();
    $text=' 
    <!DOCTYPE html>
    <html lang="
    " dir="ltr">
    
    <head>
        <meta charset="utf-8">
        <title>Book an event</title>
        <link rel="stylesheet" href="../assets/event.css"> <!-- hena by linked styling bt3 sign up -->
        <link rel="stylesheet" href="../assets/navbar_styles.css"> <!-- hena by linked el navbar-->
    </head>
    
    <body>
    
        <div id="events" class="events">
          <br><br><br><br>
          <h1 class="h5" id="events">Booking an event</h1>
          <form id="validate" class="" action="../public/control.php" method="POST">
    
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
                '.$event->view_Events_Types().'
            </select>
            <select class="event-form"  style ="width:20%;height:60px;"name="venue"  required placeholder="Enter your Venue Name">
            '.$event->view_Events_Venue().'

            </select>
        <br>    
            <select class="event-form"  style ="width:20%;height:60px;"name="status"  required placeholder="Enter your Event Status">
            '.$event->view_Events_Status().'
    </select>
            <input type="submit" class="event-form-btn" name="submit" value="Submit">
          </form>
          ';
return $text;
        }
}
?>
