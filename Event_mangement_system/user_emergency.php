<!--  Admin page -->
<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="assets/admin_styles.css">
     <link rel="stylesheet" href="assets/nav_admin.css">
     <title></title>
   </head>
   <body>
     <?php
      include("templates/nav.php") ;
      include("includes/admin_inc.php") ;
      ?>

     <div class="user_emergency.php">
      <br><br><br><br>
     <table class="one">
         <h3> Emergency Events</h3>
         <thead>
           <tr>
             <td>ID</td>
             <td>Name </td>
             <td>Email</td>
             <td>package Name</td>
             <td>Reserve Time</td>
             <td>Reserve Date</td>
             <td>Number of Guests</td>
             <td>Comments</td>


           </tr>
         </thead>

         <tbody>

           <?php foreach ($results_assoc5 as $row5){ ?>
             <tr>
               <td><?php echo $row5['id']; ?></td>
               <td>  <?php echo $row5['name']; ?> </td>
               <td>  <?php echo $row5['email']; ?> </td>
               <td>  <?php echo $row5['packagename']; ?> </td>
               <td>  <?php echo $row5['reserve_time']; ?> </td>
               <td>  <?php echo $row5['reserve_date']; ?> </td>
               <td>  <?php echo $row5['numberofguests']; ?> </td>
               <td>  <?php echo $row5['comments']; ?> </td>

             </tr>
     <?php } ?>
