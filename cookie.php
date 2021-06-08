<!-- Write a PHP program to store current date-time in COOKIE and display the “Last visited on” date-time on web page upon reopening of same page. -->

<html> 
<head> 
<title>Last visit : cookies</title> 
</head> 
<body> 
<h1> WebTech Through PHP Lab</h1> 
<p> PHP program to store current date-time in COOKIE and display the “Last visited on” date-time on web page upon reopening of same page. </p> 
<hr> 
<p style="color:blue; font-style: italic"> 
<?php 
date_default_timezone_set('Asia/Calcutta'); 
$inTwoMonths = 60 * 60 * 24 * 60 + time(); 
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths); 
if(isset($_COOKIE['lastVisit'])) 
{ 
$visit = $_COOKIE['lastVisit']; 
echo "Last Visited on : ".$visit; 
} 
else 
echo "You've got some old cookies!";
?> 
</p>  
</body> 
</html> 