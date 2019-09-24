<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password='';


$ser="localhost";
$user="root";
$pass="1234";
$db="hos";
$conn=mysqli_connect($ser,$user,$pass,$db);
if($conn)
{echo "";}
else{echo "<script>alert('ERROR in regester')</script>";}



$q="SELECT password from admin where name='$name' and email='$email'";
$data=mysqli_query($conn,$q);
$result=mysqli_fetch_assoc($data);







?>

<html>
<body style="background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(a4.jpg);background-size:cover;background-position:center;">
<br><br><br><br><br>
<br><br><br>
<table border="2px" cellspacing="4px" cellpadding="4px" align ="center" height="40%" width="40%" bgcolor="#F5F6CE" style=" opacity: 0.7;">
<tr><td colspan='2'>
<p align="center">Your Password</p>
<h1 align="center" style="text-shadow:2px 2px 10px grey; font-size:33px; font-family:Bodoni MT;font-size:50px;"><?php echo $result['password'];?></h1>


</td></tr>
<tr><td>
<p align="center" style="font-size:18px;">
Name of Owner :</p></td><td>
<?php echo $name;?></td><tr><td>
<p align="center" style="font-size:18px;">
Email of Owner :</td><td>
<?php echo $email;?>
<br>
</td></tr>
<tr><td colspan='2'><br><h2 align="center"><?php echo"<a href='first1.php' style='text-decoration:none;top:50%;left:50%; color:white;background-color:#FE2E64;spacing:10px;padding:10px;box-shadow:2px 2px 5px grey;text-shadow:2px 2px 5px black;box-radius:5px;'>LOGIN</a>";?></h2></td></tr>
</table>





</body>
</html>