<?php
include'header.php';
?>
 

<section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="right-content">
            <div class="top-content">
              <h6>Student Login</h6>
            </div>
            <form id="contact" method="post" action="student_login_action.php">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>  
                    <input name="username" type="text" class="form-control" id="name" placeholder="Your User Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="password" type="Password" class="form-control" id="phone-number" placeholder="Your Password" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button" >Login</button></form>
                    <button class="button"><a href="student_register.php" style="color:white;">Register</a></button>
                  </fieldset>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section> 


  <?php
 include'footer.php';
 ?>
