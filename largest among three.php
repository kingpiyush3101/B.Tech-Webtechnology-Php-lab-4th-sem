<!-- Write a PHP script to find largest among three 
numbers -->

<html> 
<body> 
<form method="post"> 
Enter numbers: <br>
<input type="number" name="number1"><br>
<input type="number" name="number2"><br>
<input type="number" name="number3"><br>
<input type="submit" value="Submit"> 
</form> 
</body> 
</html> 
<?php 
if($_POST){ 
$num1 = $_POST['number1'];
$num2 = $_POST['number2'];
$num3 = $_POST['number3'];
if($num1>$num2 && $num1>$num3){ 
echo "Gretest number is ".$num1; 
} 
else{ 
if($num2>$num1 && $num2>$num3){ 
echo "Gretest number is ".$num2; 
} 
else 
echo "Gretest number is ".$num3; 
}
}
?> 