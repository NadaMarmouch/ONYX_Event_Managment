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
      <img src="pictures/8.jpg" alt="" class="logo">
      <br>
      <br>
    </div> <!--add-->
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

       <div class="container">
        <div class="history_of_Company">
        <div class="p2">
          <h2 class="h2"> The History of Company</h2><br>
         <img src="pictures\10.jpg" alt="" class="pic1">
          <p class="p2"><i>ONYX is an event management company, they stopped working and hope to return to work professionally through online services. 
         Customers want to use web applications to make it easier for their customers to book events, select dates, track events, and more 
         services. Most content management systems store content in databases. Few general-purpose web servers will tell you how to back up 
         this content. Over time, fewer people still keep a series of backups or can selectively restore specific items that may have been 
         deleted. And most of the hosts still use FTP for file transfer, this is a very insecure protocol, which was outdated ten years ago, 
         which means if your developers use an open WiFi network to copy a single file, someone can get a password and do whatever you want.
         for you. location. We hope to be more professional and become an international application and website for organizing events around 
         the world. The proposed solution is a web application that will become an international application for the organization of very
         useful, valuable, and important events for doctors and ministers.</i></p>
           <br>


        </div>
      

        <!-- opening hours section-->
 
      <div class="table1">
      <h3 class="h3"> Opening Hours</h3>
      <ul>
        <li class="days">Sunday to Thursday</li>
        <li class="hours"> 9:00AM - 10:00PM </li>
      </ul>
      <ul>
        <li class="days">Friday</li>
        <li class="hours"> Closed </li>
      </ul>
        <h4 class="h4"> Email Address</h4>
        <p class="t2">onyxgroup@live.com</p>
        <h5 class="h5">Address</h5>
        <p class="t5">17 (A) El-Obour Buildings - Salah Salem Cairo, Cairo Governorate, Egypt 11371</p>
        
    </div>
    

       <?php include("Contact_us.php")  ?> <!-- linking the footer-->
       <?php include("includes/Contact_us_inc.php")  ?> <!-- linking the footer-->
  </body>
</html>
