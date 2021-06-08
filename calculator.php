<!-- Write a Menu-Driven program to implement a calculator. The operation should happen based on the user choice -->

<html>
<head><title>Calculator</title></head>
<body>
<form method="POST">Calculator<br>
<input type="number" name="abc"> 
<select name="qwe">
<option>Operator</option>
<option value='+'>+</option>
<option value='-'>-</option>
<option value='*'>*</option>
<option value='/'>/</option></select>
<input type="number" name="xyz"><br>
<input type="submit" name="submit">
</form>
</body></html>
<?php
$a=$_POST["abc"];
$op=$_POST["qwe"];
$b=$_POST["xyz"];
switch($op){
case '+': 
$c= $a + $b;
echo "Result is $c"; break;
case '-': 
$c= $a - $b;
echo "Result is $c"; break;
case '*': 
$c= $a * $b;
echo "Result is $c"; break;
case '/': 
$c= $a / $b;
echo "Result is $c"; break;
default:
echo "Error";
}?>