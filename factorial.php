<!--Factorial-->
<html>
<head><title>Factorial</title></head>
<body>
<form method="GET">
<input type="number" name="abc">
<input type="submit">
</form>
</body>
</html>
<?php
$fact=1;
$num=$_GET["abc"];
for($i=1;$i<=$num;$i++)
{
	$fact=$fact*$i;
}
echo $num." factorial is ".$fact;
?>




















