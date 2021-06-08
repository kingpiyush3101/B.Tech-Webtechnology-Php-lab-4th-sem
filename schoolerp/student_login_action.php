 <?php
 include'connect.php';
 session_start();
 $username=$_POST['username'];
 $password=$_POST['password'];
 $q="select * from tbl_student where username='$username' and password='$password'";
 $r=mysqli_query($con,$q);
 if(mysqli_num_rows($r)>0)
 {

 	$_SESSION['username']=$username;
 	header('Location:student_dashboard.php');
 }
 else
 {
 	header('Location:student_login.php');
 }
 ?>