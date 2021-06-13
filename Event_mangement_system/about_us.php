<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>about us</title> <!-- esm el page fl bar-->
    <link rel="stylesheet" href="assets/navbar_styles.css"> <!-- linking the styles-->
    <link rel="stylesheet" href="assets/Aboutus_styles.css"><!-- linking the styles-->
    <link rel="stylesheet" href="assets/Contact_us_styles.css"><!-- linking the styles-->
    <script type="text/javascript" src="js/Contact_us_js.js" defer> </script>
  </head>
  <body>
    <div class="header">
      <?php include("templates/navbar.php")  ?> <!-- linking the navbar-->
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
       </div>
       <h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
  <div class="card">

    <img src="pictures/35.jpeg" alt=""style="width:100%">

      <div class="container">
        <h2>Salma Sharara</h2>
        <p class="title">Marketing specialist/manager/coordinator</p>
     <p>salma.salmaosama.zaki@gmail.com</p>
      </div>
    </div>
  </div>
  
  <div class="row">
  <div class="column">
  <div class="card">
    <img src="pictures/34.jpeg" alt=""style="width:100%">
      <div class="container">
        <h2>Doaa Fouad Salem</h2>
        <p class="title">General manager </p>
     <p>Doaafouadsalem@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="row">
  <div class="column">
  <div class="card">
    <img src="pictures/36.jpeg" alt=""style="width:100%">
      <div class="container">
        <h2>Wesam Atif</h2>
        <p class="title">Chief executive officer  </p>
     <p>Wesamatif@hotmail.com</p>
      </div>
    </div>
  </div>


       <?php include("Contact_us.php")  ?> <!-- linking the footer-->
       <?php include("includes/Contact_us_inc.php")  ?> <!-- linking the footer-->
  </body>
</html>