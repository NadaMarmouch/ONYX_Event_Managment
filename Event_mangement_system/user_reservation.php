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

     <div class="user_reservation.php">
      <br><br><br><br>

<table class="one">
           <h3> Meeting Reservations</h3>
           <thead>
             <tr>
               <td>ID</td>
               <td>Name</td>
               <td>Email </td>
               <td>Date</td>
               <td>Time</td>
               <td># of Guests</td>
             </tr>
           </thead>

           <tbody>

             <?php foreach ($results_assoc2 as $row2){ ?>
               <tr>
                 <td><?php echo $row2['id']; ?></td>
                 <td><?php echo $row2['name']; ?></td>
                 <td>  <?php echo $row2['email']; ?> </td>
                 <td>  <?php echo $row2['meeting_date']; ?> </td>
                 <td>  <?php echo $row2['meeting_time']; ?> </td>
                 <td>  <?php echo $row2['num_of_per']; ?> </td>
               </tr>
       <?php } ?>