<?php

include("includes/admin_inc.php") ;

 ?>

 <!--  Admin page -->
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="assets/admin_styles.css">
     <link rel="stylesheet" href="assets/navbar_styles.css">
     <title></title>
   </head>
   <body>
     <?php include("templates/navbar.php")  ?>


     <h2>Admin Page</h2>

     <table>
       <h3> User Accounts</h3>
       <thead>
         <tr>
           <td>ID</td>
           <td>Name</td>
           <td>Email </td>
           <td>Created-At</td>
         </tr>
       </thead>

       <tbody>

         <?php foreach ($results_assoc as $row){ ?>
           <tr>
             <td><?php echo $row['id']; ?></td>
             <td>  <?php echo $row['full_name']; ?> </td>
             <td>  <?php echo $row['email']; ?> </td>
             <td>  <?php echo $row['created_at']; ?> </td>
           </tr>


   <?php } ?>
           <table class="1">
             <h3> Contact-Us</h3>
             <thead>
               <tr>
                 <td>ID</td>
                 <td>Name</td>
                 <td>Email </td>
                 <td>Subject</td>
                 <td>Message</td>
                 <td>Phone Number</td>

               </tr>
             </thead>

             <tbody>

               <?php foreach ($results_assoc1 as $row1){ ?>
                 <tr>
                   <td><?php echo $row1['id']; ?></td>
                   <td>  <?php echo $row1['full_name']; ?> </td>
                   <td>  <?php echo $row1['email']; ?> </td>
                   <td>  <?php echo $row1['subject']; ?> </td>
                   <td>  <?php echo $row1['message']; ?> </td>
                   <td>  <?php echo $row1['phone_number']; ?> </td>
                 </tr>
         <?php } ?>


         <table class="1">
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

       <table class="1">
           <h3> Testimonials</h3>
           <thead>
             <tr>
               <td>ID</td>
               <td>Name</td>
               <td>Feedback </td>

             </tr>
           </thead>

           <tbody>

             <?php foreach ($results_assoc3 as $row3){ ?>
               <tr>
                 <td><?php echo $row3['id']; ?></td>
                 <td><?php echo $row3['name']; ?></td>
                 <td>  <?php echo $row3['feedback']; ?> </td>

               </tr>
       <?php } ?>

       <table class="1">
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
             <td>Derived Day Duration</td>
             <td>Discount</td>
             <td>Amount Paid</td>
             <td>Unpaid Amount</td>
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
               <td>  <?php echo $row4['derivved_day_duration']; ?> </td>
               <td>  <?php echo $row4['discount']; ?> </td>
               <td>  <?php echo $row4['amount_paid']; ?> </td>
               <td>  <?php echo $row4['unpaid_amount']; ?> </td>
               <td>  <?php echo $row4['comments']; ?> </td>

             </tr>
     <?php } ?>
     <table class="1">
         <h3> Emergency Events</h3>
         <thead>
           <tr>
             <td>ID</td>
             <td>Name </td>
             <td>Email</td>
             <td>Phone Number</td>
             <td>package Name</td>
             <td>package Price</td>
             <td>Number of Guests</td>
             <td>Comments</td>


           </tr>
         </thead>

         <tbody>

           <?php foreach ($results_assoc3 as $row5){ ?>
             <tr>
               <td><?php echo $row5['id']; ?></td>
               <td>  <?php echo $row5['name']; ?> </td>
               <td>  <?php echo $row5['email']; ?> </td>
               <td>  <?php echo $row5['phonenumber']; ?> </td>
               <td>  <?php echo $row5['packagename']; ?> </td>
               <td>  <?php echo $row5['packageprice']; ?> </td>
               <td>  <?php echo $row5['numberofguests']; ?> </td>
               <td>  <?php echo $row5['comments']; ?> </td>

             </tr>
     <?php } ?>





 

   </body>
 </html>
