<?php
include'header.php';
include'connect.php';
if(isset($_POST['submit']))
{
$course_name=$_POST['course_name'];
$course_year=$_POST['course_year'];
$q="insert into tbl_course (course_name, course_year) values ( '$course_name',$course_year)";
$r=mysqli_query($con,$q);
}

$s="select * from tbl_course";
$t=mysqli_query($con,$s);

?>
<html>
<head>
  <style>
    td,th
    {
      color:white;
    }
  </style>
</head>


<section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="right-content">
            <div class="top-content">
              <h6>Course Detail</h6>
            </div>
            <form id="contact" action="course.php" method="post">
              <div class="row">
                <div class="col-md-12">
                  <table border="1" class="col-md-12">
                    <tr>
                      <th>Course Id</th><th>Course Name</th><th> Course Year</th></tr>
                  <fieldset>
                    <?php
                    while($u=mysqli_fetch_array($t))
                    {
                    echo "<tr><td>".$u['course_id']."</td><td>".$u['course_name']."</td><td>".$u['course_year']."</td></tr>";
                    }
                    ?>
                  </table>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">Add New Courses</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </html>


  <?php
 include'footer.php';
 ?>