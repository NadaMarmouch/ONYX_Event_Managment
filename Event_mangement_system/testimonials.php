<div id="contact" class="testimonials">
      <br><br><br><br>
      <h5 class="h5" id="contact">testimonials</h5>
      <div class="border-1"></div>
      <form id="validate" class="testimonials" action="testimonials.php" method="post">

        <input class="testimonials-form" type="text" name="user_name" value="" placeholder="Enter your name..">
        <div class="input_errors"> <p>  </p>  </div>
        <input type="hidden" name="name-v" value="">

        <input class="testimonials-form" type="email" name="email" value="" placeholder="Enter your email..">
        <div class="input_errors"> <p>  </p>  </div>
        <input type="hidden" name="email-v" value="">

        <input class="testimonials-form" type="text" name="feedback" value="" placeholder="Enter your feedback..">
        <div class="input_errors"> <p>  </p>  </div>
        <input type="hidden" name="feedback-v" value="">

       


        <input type="submit" class="testimonials-form-btn" name="submit" value="Submit">
      </form>
      <?php
          include "contact.php";

if(isset($_POST['submit'])){
    $F=new contact();
    $F->addfeedback();
} ?>
</div>

