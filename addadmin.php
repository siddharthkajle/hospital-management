<?php
$name=$_GET["name"];
$email=$_GET["email"];
$password=$_GET["password"];
$ser="localhost";
$user="root";
$pass="1234";
$db="hos";
$conn=mysqli_connect($ser,$user,$pass,$db);
if($conn)
{echo "";}
else{echo "<script>alert('ERROR in regester')</script>";}







$p="SELECT password from admin where email='$email'";
$q=mysqli_query($conn,$p);
$temp=mysqli_num_rows($q);
if($temp==1)
{echo "<script>temp=2;alert('Admin  is already register');</script>";}
else
{



$q="INSERT INTO admin (name,email,password) VALUES('$name','$email','$password')";
mysqli_query($conn,$q);}
?>




<html>
<head>
<link rel="stylesheet" href="retrive.css">
<script>setTimeout(function(){window.location.href='first1.php'},3000);</script>
</head>
<body background="g6.gif" style="background-size:cover;background-position:center;">
<div ><br><br><br><h1 id='load' align ='center' style="color:white;">LOADING...<h2></div>
</body>
</html>
