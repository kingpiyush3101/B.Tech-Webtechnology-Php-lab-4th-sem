<!-- Create a login form with two text fields called “login” and “password”. When user enters “UUCSE” as a user name and “university” as a password. It should be redirected to a Welcome.HTML page or to Sorry.HTML in case of 
wrong username/password -->

<html> 
<head><title>Login Page</title></head> 
<body> 
<center><h3>LOGIN</h3><hr> 
<form method="post" action="login.php" > 
<table border="0" > 
<tr><td><B>Username</B></td><td><input type="text" name="userid"></tr> 
<tr><td><B>Password</B></td><td><input name="password" type="password"></input></td></tr><br/> 
<tr><td><input type="submit" value="Submit"/> 
<td><input type="reset" value="Reset"/></tr> 
</table></form></center> 
</body></html> 
<?php 
$f_usr= $_POST["userid"]; 
$f_pswd= $_POST["password"]; 
$con=mysql_connect("localhost","root",""); 
if(! $con) { 
die('Connection Failed'.mysql_error()); } 
mysql_select_db("abc",$con); 
$result=mysql_query("select * from login1"); 
while($row=mysql_fetch_array($result)) { 
if($row ["username"]==$f_usr && $row["password"]==$f_pswd) { 
echo"Welcome : $f_usr";
}
else{ 
echo"Sorry $f_usr, your user id or password is not correct"; 
include("login1.html"); } 
} ?> 
</h1></center> 
</body></html>  