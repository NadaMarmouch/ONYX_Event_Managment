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

     <div class="user_book_event.php">
      <br><br><br><br>
<table class="one">
         <h3> Booked Events</h3>
         <thead>
           <tr>
             <td>ID</td>
             <td>Event Name </td>
             <td>Start Date</td>
             <td>End Date</td>
             <td>Number of Guests</td>
             <td>Event Type</td>
             <td>Venue Name</td>
             <td>Event Status</td>
             <td>Comments</td>


           </tr>
         </thead>

         <tbody>

           <?php foreach ($results_assoc4 as $row4){ ?>
             <tr>
               <td><?php echo $row4['id']; ?></td>
               <td>  <?php echo $row4['event_name']; ?> </td>
               <td>  <?php echo $row4['start_date']; ?> </td>
               <td>  <?php echo $row4['end_date']; ?> </td>
               <td>  <?php echo $row4['num_of_part']; ?> </td>
               <td>  <?php echo $row4['event_type']; ?> </td>
               <td>  <?php echo $row4['venue_name']; ?> </td>
               <td>  <?php echo $row4['event_status']; ?> </td>
               <td>  <?php echo $row4['comments']; ?> </td>

             </tr>
             <?php } ?>

