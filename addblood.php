<?php
$name=$_GET["name"];
$email=$_GET["email"];
$number=$_GET["number"];
$date=$_GET["date"];$time=$_GET["time"];$blood=$_GET["blood"];
$ser="localhost";
$user="root";
$pass="1234";
$db="hos";
$conn=mysqli_connect($ser,$user,$pass,$db);
if($conn)
{echo "";}
else{echo "<script>alert('ERROR in regester')</script>";}





$q="INSERT INTO blood VALUES('$name','$number','$email','$date','$time','$blood')";
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
