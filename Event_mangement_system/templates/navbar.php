<?php

session_start() ; // starting th session

$current_name = $current_email =  $current_id = "" ;

if (isset($_SESSION['name'])) {
  if (!empty($_SESSION['name'])){
    $current_name = $_SESSION['name'];
    $current_email = $_SESSION['email'];
    $current_id = $_SESSION['id'];
  }
  else {
    $current_name = $current_email = $current_id = "" ;

  }

}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title> <!-- esm el page fl bar-->
    <link rel="stylesheet" href="https://fontawesome.com/v5.15/icons/angle-double-down?style=regular"> <!-- linking the icon-->

  </head>
  <body>
  <nav>
    <div class="container">
      <div class="brand">
        <h1 class="brand">ONYX</h1>
      </div>
      <div class="links">
        <ul>

          <li> <a href="http://localhost/ONYX_Event_Managment/Event_mangement_system/home_page.php" class="home">Home</a> </li>
          <li> <a href= "http://localhost/ONYX_Event_Managment/Event_mangement_system/about_us.php">About Us</a> </li>
          <li> <a href="http://localhost/ONYX_Event_Managment/Event_mangement_system/services.php">Services</a> </li>
          <li class="us"> <a href='#contact'>Contact Us</a> </li>

            <!-- only if logged in as admin-->
        <?php if ($current_name == "admin") { ?>
          <li> <a href="admin.php" class="home">Admin</a> </li>
        <?php } else { ?>
          <!--<li> <a href="gallery.php"> Gallery</a> </li> -->

        <?php } ?>

        <!-- if logged in as a normal user-->
        <?php if ($current_name) { ?>
          <div class="dropdown">
            <button>
            <i class="far fa-angle-double-down"></i>
            </button>
            <div class="dropdown-content">
            <li> <a href="http://localhost/ONYX_Event_Managment/Event_mangement_system/reservations.php">Schedule a Meeting</a> </li>
            <li> <a href="public/control.php">Book an Event</a> </li>
            <li> <a href="http://localhost/ONYX_Event_Managment/Event_mangement_system/emergency_event.php">Emergency Events</a> </li>
            <li> <a href="http://localhost/ONYX_Event_Managment/Event_mangement_system/testimonials.php">Testimonials</a> </li>
            <li> <a href="http://localhost/ONYX_Event_Managment/Event_mangement_system/view_profile.php">Profile </a> </li>
            <li> <a href="http://localhost/ONYX_Event_Managment/Event_mangement_system/includes/logout.php">Logout</a> </li>

          </div>

        <?php } else { ?> 

          <li> <a href="signup.php">Sign-Up</a> </li>
          <li> <a href="login.php">Login</a> </li>
        <?php } ?>




        </ul>
      </div>




    </div>
  </nav>

  </body>
</html>
