<?php
include'header.php';

?>

<section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="right-content">
            <div class="top-content">
              <h6>Book Information</h6>
            </div>
            <form id="contact" action="book_info_action.php" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="author" type="text" class="form-control" id="phone-number" placeholder="Enter author" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="title" type="text" class="form-control" id="phone-number" placeholder="Enter title" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="edition" type="text" class="form-control" id="phone-number" placeholder="Enter edtion" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="publisher" type="text" class="form-control" id="name" placeholder="Enter Publisher" required="">
                  </fieldset>
                </div>
                 
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">Submit</button>
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