<!-- Write a Program to check and print whether a 
given number is even or odd -->

<html> 
<body> 
<form method="post"> 
Enter a number: 
<input type="number" name="number"> 
<input type="submit" value="Submit"> 
</form> 
</body> 
</html>
<?php 
if($_POST){ 
$number = $_POST['number']; 
if(($number % 2) == 0){ 
echo "$number is an Even number"; 
}
else{ 
echo "$number is Odd number"; 
} 
} 
?> 