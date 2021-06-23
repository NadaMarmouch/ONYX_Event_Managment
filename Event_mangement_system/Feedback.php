<!DOCTYPE html>
<html lang="
" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>View Feedback</title>
    <link rel="stylesheet" href="assets/sign_up_styles.css"> <!-- hena by linked styling bt3 sign up -->
    <link rel="stylesheet" href="assets/navbar_styles.css"> <!-- hena by linked el navbar-->
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
    margin-left:400px;
    margin-top:50px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr {
  background-color: #ffffff;
}
</style>
<body>
    <?php include('templates/navbar.php')?> <!-- link bl navbar-->

    <h1>View Feedback</h1>

    <!-- sign-up form -->

 <table>
  <tr>
    <th>Feedbacks</th>
    
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
     </tr>
</table>



    <?php include "user.php";

if(isset($_POST['submit'])){  
    $u=new user();
    $u->EditProfile($_POST['email'],$_POST['name'],$_POST['password1']);
} ?>
    <script type="text/javascript" src="js/form_validation_signup.js"> </script>
</body>

</html>