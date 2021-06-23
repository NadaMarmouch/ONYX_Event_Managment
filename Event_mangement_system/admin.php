<?php

include("includes/admin_inc.php") ;

 ?>

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
     <?php include("templates/nav.php")  ?>


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
          


        

      

      


 

   </body>
 </html>
