<?php
include'header.php';
include'connect.php';
$q="select * from tbl_course";
$r=mysqli_query($con,$q);
?>


<section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="right-content">
            <div class="top-content">
              <h6>Course Detail</h6>
            </div>
            <form id="contact" action="branch_view.php" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <select name="course_id" class="form-control"required="">
                      <option> Select Course</option>
                      <?php
                      while($t=mysqli_fetch_array($r))
                      {
                        ?>
                      <option value="<?php echo $t['course_id']; ?>"> <?php echo $t['course_name']; ?></option>
                      <?php
                     }
                     ?>
                    </select>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="branch_name" type="text" class="form-control" id="phone-number" placeholder="Enter Branch Name" required="">
                  </fieldset>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">Submit</button>
                    <button id="form-submit" class="button"><a href="branch_view.php" style="color:white">View Branches</a>
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