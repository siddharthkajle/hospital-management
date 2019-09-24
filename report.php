
<html>

<title>WELCOME to hospital</title>
<head>
<link rel="stylesheet" type="text/css" href="donation.css">
</head>

<body style="background:white;
height:100vh;
background-size:cover;
background-position:center;">

<div class="main" style='background: #D0A9F5;'>
<div id ="d1" ><br>
<h1 align="center"><b>Hospitality</b></h1>
</div>
<ul style='background: #D0A9F5;'>
<li><a href ="s1.php" class ="active">HOME</a></li>
<li><a href ="report1.php">REPORT</a></li>
<li><a href ="apoint1.html">APPOINTMENT</a>
</li>
<li><a href ="donation.php">DONATION</a></li>
<li><a href ="contact.php">CONTACT</a></li>
</ul>
</div>
<br><br><br><br><br><br>
<h2 class='title' style="color:white;font-size:50px;margin-left:-10%;text-shadow:2px 2px 5px grey;">REPORT </h2>
<br><br><br><br><br><br><br>
<?php

	$ser="localhost";
$user="root";
$pass="1234";
$db="hos";
$name='';
$conn=mysqli_connect($ser,$user,$pass,$db);
if($conn)
{echo "";}
else{echo "<script>alert('ERROR in regester')</script>";}


$p="SELECT * from report where id in (select max(id) from report)";

$cost=mysqli_query($conn,$p);
$result=mysqli_fetch_assoc($cost);

if($result['email']=='NULL')
{$result['email']='';}   

?>
<table border='1px'  align ='center' height='40%' width='65%' bgcolor='white' style=' font-size:18px; '>
<tr><td align='center'><img src='f1.png' width='70px'></td><td colspan='4' align='right'>Contact:<br>8966575245,9956489467<br>hospital@gmail.com</td></tr>
<tr><td align='center' colspan='3'>Identity=<?php echo $result['email'];echo $result['pid'];?></td><td colspan='2' align='center'>Age:<?php echo $result['age']?></td></tr>

<th>Test Type </th>
<th>Max </th>
<th>Min </th><th>Value </th><th>Total </th>
<tr align='center'><td><?php echo $result['name']?></td>
<td><?php echo $result['range1']?></td>
<td><?php echo $result['range2']?></td>
<td><?php echo $result['value']?></td>
<td><?php echo $result['cost']?></td>
</tr>
<br>
<button onclick="window.location.href='s1.php'" style="position:absolute;top:85%;left:50%;background:skyblue;color:white;box-shadow:2px 2px 5px black;padding:8px;
font-size:18px; width:100px;">OK</button>
<br><br>
</body>
<html>