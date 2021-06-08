<!--Armstrong Number-->
<html>
<head><title>Armstrong Number</title></head>
<body>
<form method="POST">
<input type="number" name="abc">
<input type="submit">
</form>
</body>
</html>
<?php
$num=$_POST["abc"];
$a=$num;
$sum=0;
while($num!=0)
{
	$b=$num%10;
	$sum=$sum+$b*$b*$b;
	$num=$num/10;
}
if($sum==$a)
{
	echo $a." is Armstrong No.";
}
else
echo $a." is not Armstrong No.";
?>




















