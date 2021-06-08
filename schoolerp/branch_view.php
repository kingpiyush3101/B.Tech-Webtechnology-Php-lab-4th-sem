<?php
include'header.php';
include'connect.php';
if(isset($_POST['submit']))
{
$course_id=$_POST['course_id'];
$branch_name=$_POST['branch_name'];
$q="insert into tbl_branch (course_id, branch_name) values ( $course_id,'$branch_name')";
$r=mysqli_query($con,$q);
}
$s="select * from tbl_branch";
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
              <h6>Branch Details</h6>
            </div>
            <form id="contact" action="branch.php" method="post">
              <div class="row">
                <div class="col-md-12">
                  <table border="1" class="col-md-12">
                    <tr>
                      <th>Course Id</th><th>Branch Name</th></tr>
                  <fieldset>
                    <?php
                    while($u=mysqli_fetch_array($t))
                    {
                    echo "<tr><td>".$u['course_id']."</td><td>".$u['branch_name']."</td></tr>";
                    }
                    ?>
                  </table>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">Add New Branch</button>
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
