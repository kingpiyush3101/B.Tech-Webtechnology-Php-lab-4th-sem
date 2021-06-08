<?php
include'header.php';
?>


<section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="right-content">
            <div class="top-content">
              <h6>Course Detail</h6>
            </div>
            <form id="contact" action="course_view.php" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="course_name" type="text" class="form-control" id="phone-number" placeholder="Enter Course Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="course_year" type="text" class="form-control" id="phone-number" placeholder="Enter Course Year" required="">
                  </fieldset>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">Submit</button>
                    <button id="form-submit" class="button"><a href="course_view.php" style="color:white">View Coures</a>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> 


  <?php
 include'footer.php';
 ?>