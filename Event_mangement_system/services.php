<?php
require_once("services_desplay.php");
include('configure/dbclass.php')
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Service</title> <!-- esm el page fl bar-->
    <link rel="stylesheet" href="assets/services_styles.css">
    <link rel="stylesheet" href="assets/navbar_styles.css"> <!-- linking the styles-->
    <link rel="stylesheet" href="assets/Contact_us_styles.css"><!-- linking the styles-->
   
  </head>
  <body>
    <div class="header">
      <?php include("templates/navbar.php")  ?> <!-- linking the navbar-->
      <br>
      <br>
    </div> <!--add-->
    <br><br>
    <div class="services">
      <h1 class="h1">Services</h1><br>
      <p class="p1"><i> “A COMPLETE ARRAY OF PROFESSIONAL SERVICES"</i></p>
      </div>
       <h2 style="text-align:center">Full-service event planning for excepional social and corporate events</h2>
       <div class="row">
       <?php	
	$allServices=SERVICESS::getAllServices();
	foreach ($allServices as $Services){?>
		<div class="Services">
    <div class="column"> 
			<form method="post" action="services.php?action=add&id=<?php echo $Services->id; ?>">
						<!--  COMPLETE DONE  -->
						<div class="h4"><strong><?php echo $Services-> service_name; ?></strong></div>
						<div class="single-Services"><img src="<?php echo $Services->image; ?>" > <br></div>
						<div class="Services-content"> <?php echo $Services->description;  ?> <br>
			</form>
      </div>
		</div>
		<?php
        
	}
	?>
  </div><
      <?php include("Contact_us.php") ?>
</div>
</BODY>
</HTML>
