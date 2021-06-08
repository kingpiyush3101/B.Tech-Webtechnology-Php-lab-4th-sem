 
<?php
include'header.php';
include'connect.php';
$q="select * from tbl_course";
$r=mysqli_query($con,$q);

?>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>

<section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="right-content">
            <div class="top-content">
              <h6>Student Register</h6>
            </div>
            <form id="contact" action="student_dashboard.php" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="phone-number" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="class_roll" type="text" class="form-control" id="phone-number" placeholder="Your Class Roll No." required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="roll_no" type="text" class="form-control" id="phone-number" placeholder="Your University Roll No." required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="username" type="text" class="form-control" id="name" placeholder="Your Email" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="password" type="Password" class="form-control" id="phone-number" placeholder="Your Password" required="">
                  </fieldset>
                </div>

                <div class="col-md-6">
                  <fieldset>
                    <select name="course" class="form-control" id="course_id">
                      <option>Select Course</option>
                      <?php
                      while($t=mysqli_fetch_array($r))
                      {
                        echo"<option value=".$t['course_id'].">".$t['course_name']."</option>";
                      }
                      ?>
                    </select>
                  </fieldset>
                </div>

                <div class="col-md-6">
                  <fieldset>
                    <select name="branch" class="form-control" id="branch_id">
                      <option>No Selected</option>
                    </select>
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <select name="year" class="form-control" id="year">
                      <option>Select Year</option>
                      <option value="btech">B.Tech</option>
                      <option value="mtech">M.Tech</option>
                    </select>
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <select name="section" class="form-control" id="section_id">
                      <option>Select Section</option>
                      <option value="btech">B.Tech</option>
                      <option value="mtech">M.Tech</option>
                    </select>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">Register</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> 
<script type="text/javascript">
    $(document).ready(function(){
        $('#course_id').change(function(){ 
                var course_id=$(this).val();
                $.ajax({
                    url : "get_branch.php",
                    method : "POST",
                    data : {course_id: course_id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                    var html='<option> Select Branch </option>';
                    var i;
                    for(i=0; i<data.length; i++){
                    html += '<option value='+data[i].branch_id+'>'+data[i].branch_name+'</option>';
                    }
                    $('#branch_id').html(html);
                    }
                });
            return false;
            }); 
    });
  </script>

  <?php
 include'footer.php';
 ?>
</body>
</html>