<?php
include'header.php';
include'connect.php';
if(isset($_POST['submit']))
{
$course_name=$_POST['course_name'];
$course_year=$_POST['course_year'];
$q="insert into tbl_course (course_name, course_year) values('$course_name',$course_year)";
$r=mysqli_query($con,$q);
}
$s="select * from tbl_course";
$t=mysqli_query($con,$s);

?>

<html>
<head>
  <style>
    td
    {
      color:white;
    }
    th
    {
      color:yellow;
    }
  </style>
</head>


<section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="right-content">
            <div class="top-content">
              <h6>Course Information</h6>
            </div>
            <form id="contact" action="" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                   <table border="1" class="col-md-12">
                    <tr>
                      <th>Course Id</th><th>Cousre Name</th><th>Course Year</th></tr>
                      <?php
                      while($u=mysqli_fetch_array($t))
                      {
                        echo"<tr><td>".$u['course_id']."</td><td>".$u['course_name']."</td><td>".$u['course_year']."</td></tr>";
                      }
                      ?>
                    </table>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button class="button"><a href="course_1.php" style="color:white;">Add New Courses</a></button></form>
                  </fieldset>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</html>

  <?php
 include'footer.php';
 ?>