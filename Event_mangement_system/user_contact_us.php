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

     <div class="user_contact_us.php">
      <br><br><br><br>

     <table class="one">
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