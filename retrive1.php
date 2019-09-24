<script>var temp=0;</script>
<?php
$email=$_POST["email"];
$password=$_POST["password"];
$ser="localhost";
$user="root";
$pass="1234";
$db="hos";
$temp=2;
$conn=mysqli_connect($ser,$user,$pass,$db);
if($conn)
{echo "";}
else{echo "<script>alert('ERROR in regester')</script>";}

$p="SELECT password from admin where email='$email' && password='$password'";
$q=mysqli_query($conn,$p);
$temp=mysqli_num_rows($q);
if($temp==1)
{echo "<script>temp=1;</script>";}
else
{
echo "<script>temp=2;alert('Invalid details');</script>";
}


?>

<html>
<head>
<link rel="stylesheet" href="retrive.css">
<script>if(temp==1){setTimeout(function(){window.location.href='s2.php'},3000);}</script>
<script>if(temp==2){setTimeout(function(){window.location.href='first1.php'},3000);}</script>
</head>
<body background="g6.gif" style="background-size:cover;background-position:center;">
<div ><br><br><br><h1 id='load' align ='center' style="color:white;">LOADING...<h2></div>
</body>
</html>
