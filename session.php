<!-- Write a PHP program to store page views count in SESSION, to increment the count on each refresh, and to show the count on web page. -->

<html> 
<head> 
<title>Page views : session</title> 
</head> 
<body> 
<h1> WebTech Through PHP Lab</h1> 
<p> PHP program to store page views count in SESSION, to increment the count on each refresh, and to show the count on web page. </p> 
<hr> 
<p style="color:blue; font-style: italic"> 
<?php 
session_start();
$_session["count"] = 0; 
if(isset($_session["count"])) 
{  
echo "Counter initialized... <br />"; 
} 
else { $_session["count"]++; } 
echo "Number of Page Views : <b>$_session["count"]</b>"; 
?></p> 
<p>Reload this page to increment</p> 
</body> 
</html> 