 
<?php
include'header.php';
include'connect.php';
session_start();
$username=$_SESSION['username'];
$q="select * from tbl_student where username='$username'";
$r=mysqli_query($con,$q);
$t=mysqli_fetch_array($r);
$year=$t['student_year'];
$course_id=$t['course_id'];
$branch_id=$t['branch_id'];
if(date('n')>=8)
{
  $sem=$year*2-1;
}
else  
{
  $sem=$year*2;
}

$s="select * from tbl_subject where sem=$sem and course_id=$course_id and branch_id=$branch_id";
$u=mysqli_query($con,$s);

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
  </style>font-family: 
</head>


<section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="right-content">
            <div class="top-content">
              <h6>Welcome <?php echo $t['student_name']; ?></h6>
            </div>
            <form id="contact">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>  
                     <table class="col-md-12">
                      <tr>
                        <th>Name</th><th>Class Roll No.</th><th>Sem</th></tr>
                        <?php echo"<tr><td>".$t['student_name']."</td><td>".$t['class_roll']."</td><td>".$sem."</td></tr>"; ?>
                       <tr><td colspan="3"><div class="top-content">
              <h6>Subject Details</h6>
            </div></td></tr>
                      <tr>
                        <th>S.No</th><th>Subject Name</th><th>Action</th></tr>
                        <?php
                        $i=1;
                     while($v=mysqli_fetch_array($u))
                     {
                        echo"<tr><td>".$i."</td><td>".$v['subject_name']."</td></tr>";
                     }
                     ?>
                   </table>
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



