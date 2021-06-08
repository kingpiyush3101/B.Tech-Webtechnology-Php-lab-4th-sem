 
 
 <?php
 include'connect.php';
 $course_id=$_POST['course_id'];
$branch_arr = array();
$q= "select * from tbl_branch where course_id=$course_id";
$r=mysqli_query($con,$q);
while( $row = mysqli_fetch_array($r) ){
      $branch_id = $row['branch_id'];
      $branch_name = $row['branch_name'];

      $branch_arr[] = array("branch_id" => $branch_id, "branch_name" => "$branch_name");
     
   }

// encoding array to json format
echo json_encode($branch_arr);
?>

 