<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title> <!-- esm el page fl bar-->
    <link rel="stylesheet" href="assets/navbar_styles.css"> <!-- linking the styles-->
    <link rel="stylesheet" href="assets/home_style.css"><!-- linking the styles-->
    <link rel="stylesheet" href="assets/Contact_us_styles.css"><!-- linking the styles-->
    <script type="text/javascript" src="js/Contact_us_js.js" defer> </script>
  </head>
  <body>
    <div class="header">
      <?php include("templates/navbar.php")  ?> <!-- linking the navbar-->
      <img src="pictures/2.png" alt="" class="logo">
      <br>
      <br>
    </div> 
    <br><br>
    <div class="about_us">
      <h1 class="h1" > About Us</h1><br>
      <p class="p1"><i> ONYX is the premiere full-service event-design planning and management firm in Cairo
       for conferences, exhibitions, corporate and live events.<br>
       ONYX was built on the foundation of fairness, honesty, integrity, and the understanding of the true meaning
       behind building a successful team for every event.<br>
       Learning the ins and outs of the event business and collaborating with top-notch professionals have allowed the team ONYX to make each
       event the most complete experience possible for its clients. </i></p>
       <!--<img src="pictures/6.jpg" alt="" class="logo">-->



        <!-- opening hours section-->

      <div class="table1">
      <h3 class="h3"> Opening Hours</h3>
      <div class=timings1>
        <ul>
          <li class="days">Sunday to Thursday</li>
          <li class="hours"> 9:00AM - 10:00PM </li>
        </ul>
       
      </div>
      <div class="email">
        <h4 class="h4"> Email Address</h4>
        <p class="t2">onyxgroup@live.com</p>
      </div>
        <div class="address">
        <h5 class="h5">Address</h5>
        <p class="t5">17 (A) El-Obour Buildings - Salah Salem Cairo,<br><br><br><br><br><br><br><br><br>
           Cairo Governorate, Egypt 11371</p>
        </div>

    </div>


       <?php include("Contact_us.php")  ?> <!-- linking the footer-->
       <?php include("includes/Contact_us_inc.php")  ?> <!-- linking the footer-->
  </body>
</html>
