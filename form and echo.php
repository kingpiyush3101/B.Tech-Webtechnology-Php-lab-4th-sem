<!--Create a simple HTML form and accept the user 
name and display the name through PHP echo 
statement-->

<html> 
<head> 
<title>form and echo</title> 
</head> 
<body> 
<form method='POST'> 
<h2>Please enter your name:</h2> 
<input type="text" name="name"> 
<input type="submit" value="Submit"> 
</form> 
<?php 
$name  =  $_POST['name']; 
echo "<h3> Hello $name </h3>"; 
?> 
</body> 
</html> 