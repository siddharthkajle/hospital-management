<html>
<head>
<link rel="stylesheet" href="retrive.css">
<script>setTimeout(function(){window.location.href='s2.php'},3000);</script>
</head>
<body background="g6.gif" style="background-size:cover;background-position:center;">
<?php
$testtype=$_POST["testtype"];
error_reporting(0);
$id='';$email='NULL';
$age=$_POST["age"];
if($_POST["id"]){$id=$_POST['id'];}
if($_POST["email"]){$id=$_POST['email'];}
$value=$_POST["value"];
$ser="localhost";
$user="root";
$pass="1234";
$db="hos";
$name=$testtype;
$conn=mysqli_connect($ser,$user,$pass,$db);
if($conn)
{echo "";}
else{echo "<script>alert('ERROR in regester')</script>";}

$p="SELECT * from des where name='$testtype'";



$cost=mysqli_query($conn,$p);



$result=mysqli_fetch_assoc($cost);



$temp=mysqli_num_rows($cost);
if($temp==1)
{echo "";}
else
{
echo "<script>temp=2;alert('Invalid details');</script>";
}
$range1=$result['range1'];
$range2=$result['range2'];
$c=$result['cost'];
$q="INSERT INTO report (pid,name,email,age,range1,range2,cost,value)VALUES('$id','$name','$email','$age','$range1','$range2','$c','$value')";
mysqli_query($conn,$q);

?>


<body background="g6.gif" style="background-size:cover;background-position:center;">

<div ><br><br><br><h1 id='load' align ='center' style="color:white;">LOADING...<h2></div>
</body>
</html>