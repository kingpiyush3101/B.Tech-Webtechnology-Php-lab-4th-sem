<!-- Create a HTML form with Name, Address Line 1, Address Line 2, and 
E-mail text fields. On submitting, store the values in MySQL table. 
Retrieve and display the data based on Name -->

<html> 
<h2>Insert  Information</h2> 
<form> 
Name: <input  type=text  name=name><br> 
Address  Line  1: <input  type=text  name=addr1><br> 
Address  Line  2: <input  type=text  name=addr2><br> 
Email-ID:<input  type=email  name=email><br> 
<input  type=submit  value=insert> 
<input  type=reset  value=reset> 
</form> 
<h2>Search  Information</h2> 
<form> 
Name:<input  type=text  name=name><br> 
<input  type=submit  value=search> 
<input  type=reset  value=reset> 
</form> 
</html>

<?php
if(isset($_POST['submit']))
{
$name  =  $_REQUEST['name']; 
$addr1  =  $_REQUEST['addr1']; 
$addr2  =  $_REQUEST['addr2']; 
$email  =  $_REQUEST['email']; 
$con  =  mysql_connect("localhost")  or  die('Could  not  connect'); 
mysql_select_db("test",$con); 
if  (mysql_query("insert  into  student 
values('$name','$addr1','$addr2','$email')"))  { 
echo  "Data  inserted  successfully!"; 
}
mysql_close($con); 
}
?>

<html>
<h2>Search  Result</h2> 
<table  border=1> 
<tr><th>Name</th><th>Address  Line  1</th><th>Address Line 2</th>
<th>Email-ID</th></tr> 
<?php
if(isset($_POST['submit']))
{
$name  =  $_REQUEST['name']; 
$con  =  mysql_connect("localhost")  or die('Could  not  connect');   
mysql_select_db("test",$con); 
$result  =  mysql_query("select  *  from  student 
where  name  like  '%".$name."%'"); 
while  ($row  =  mysql_fetch_array($result)) { 
echo  "<tr>"; 
echo  "<td>".$row['name']."</td>"; 
echo  "<td>".$row['addr1']."</td>"; 
echo  "<td>".$row['addr2']."</td>"; 
echo  "<td>".$row['email']."</td>"; 
echo  "</tr>"; 
} 
mysql_close($con);
}
?>
</table>  
</html> 
 

