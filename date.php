<?php
error_reporting(0);
$name=$_GET["name"];
$test=$_GET["test"];
$date=$_GET["date"];
$slot=$_GET["slot"];
$ser="localhost";
$user="root";
$pass="1234";
$db="hos";
$conn=mysqli_connect($ser,$user,$pass,$db);
if($conn)
{echo "";}
else{echo "<script>alert('ERROR in regester')</script>";}





$q="INSERT INTO appoint (name,test,date,slot)VALUES('$name','$test','$date','$slot')";
mysqli_query($conn,$q);
?>

<html>
<head>
<link rel="stylesheet" href="retrive.css">
<script>setTimeout(function(){window.location.href='s1.php'},3000);</script>
</head>
<body background="g7.gif" style="background-size:cover;background-position:center;">
<div ><br><br><br><h1 id='load' align ='center' style="color:white;">LOADING...<h2></div>
</body>
</html>
