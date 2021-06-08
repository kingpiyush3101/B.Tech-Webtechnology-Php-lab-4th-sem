<!-- Create an associative array using the countries as keys, the cities as values and transform it into 2-dimensional array and display the data as a table -->

<html>
<head><title>associative array</title></head>
<body> 
<?php 
$a_array=array("India"=>"NewDelhi","Afghanistan"=>"Kabul","Australia"=>"Canberra",
"Bangladesh"=>"Dhaka","Brazil"=>"Brasilia","Canada"=>"Ottawa",
"China"=>"Beijing","France"=>"Paris","Japan"=>"Tokyo","Thailand"=>"Bangkok");
$j=0; 
foreach ($a_array as $x=>$x_value) 
{ 
$newarray[0][$j]=$x;  
$newarray[1][$j]=$x_value; 
$j=$j+1; 
} 
echo "<h3>List of Countries-Capitals</h3>"; 
echo "<table border=1>";
echo "<tr><th>Country</th><th>Capital</th></tr>"; 
for($k=0;$k<$j;$k++) 
{
echo "<tr><td>".$newarray[0][$k]."</td>"; 
echo "<td>".$newarray[1][$k]."</td></tr>"; 
} 
echo "</table>"; 
?> 
</body> 
</html> 