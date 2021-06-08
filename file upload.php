<!-- Create an HTML page with browse and submit to upload an image file. Write a PHP script to upload and display an image file.-->

<html>
<head>
<title>File Upload</title>
</head>
<body>
<form action="file upload.php" enctype="multipart/form-data" method="post">
Select Image :
<input type="file" name="file"><br>
<input type="submit" value="Upload" name="Submit"><br>
</form>

<?php
if(isset($_POST['Submit']))
{ 
$filepath = "./" . $_FILES["file"]["name"];
if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "Sucessfully Uploaded"."<br>";
echo "<img src=".$filepath." height=200 width=300>";
} 
else 
{
echo "Error!";
}
} 
?>
</body>
</html>