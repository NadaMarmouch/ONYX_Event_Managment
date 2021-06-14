<?php
require_once("classes.php");
include('configure/dbclass.php');
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>event</title> 	
<link rel="stylesheet" href="assets/emergency_events_style.css">
<link rel="stylesheet" href="assets/navbar_styles.css">
<link rel="stylesheet" href="assets/Contact_us_styles.css">
  </head>
<body>
    <div class="nav">
      <?php include("templates/navbar.php")  ?>
    </div>
    <div class="container">
            <div class="title">
                <h4><span>Our Packages</span>Emergency Bookings</h4>
            </div>
	<?php	
	$allEvents=Event::getAllEvents();
	foreach ($allEvents as $Events){?>
		<div class="event">
			<form method="post" action="resreve.php?action=add&id=<?php echo $Events->id; ?>">
						<!--  COMPLETE DONE  -->
						<div class="h4"><strong><?php echo $Events-> packagename; ?></strong></div>
						<div class="single-event"><img src="<?php echo $Events->image; ?>" > <br></div>
						<div class="event-content"> <?php echo $Events->description;  ?> <br>
						<input type="submit" value="Reserve" class="button" /></div>

			</form>
		</div>
		<?php
        
	}
	?>
      <?php include("Contact_us.php") ?>
</div>
</BODY>
</HTML>
