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

     <div class="user_feedback.php">
      <br><br><br><br>
<table class="one">
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