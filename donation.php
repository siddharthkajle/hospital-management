
<html>

<title>WELCOME to hospital</title>
<head>
<link rel="stylesheet" type="text/css" href="donation.css">
</head>

<body style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(i8.jpg);
height:100vh;
background-size:cover;
background-position:center;">

<div class="main">
<div id ="d1" ><br>
<h1 align="center"><b>Hospitality</b></h1>
</div>
<ul>
<li><a href ="s1.php" class ="active">HOME</a></li>
<li><a href ="report1.php">REPORT</a></li>
<li><a href ="apoint1.html">APPOINTMENT</a>
</li>
<li><a href ="donation.php">DONATION</a></li>
<li><a href ="contact.php">CONTACT</a></li>
</ul>
</div>
<br><br><br><br><br><br>
<h2 class='title' style="color:white;font-size:50px;margin-left:-10%;text-shadow:2px 2px 5px grey;">BLOOD CAMP </h2>
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


$p="SELECT * from blood";

$cost=mysqli_query($conn,$p);
$result=mysqli_fetch_assoc($cost);


    


    echo "<table border='2px' cellspacing='10px' cellpadding='10px' align ='center' height='40%' width='40%' bgcolor='#D0A9F5' style=' opacity: 0.6;font-size:28px; '>
           <th>Place </th>
           <th>Date </th>
           <th>Time </th><th>Number </th><th>Email </th><th>Most </th>
    ";
        foreach($cost as $row){
        	  
               echo"<tr>".
             "<td align='center'>".$row['name']."</td>".
             "<td align='center'>".$row['date']."</td>".
             "<td align='center'>".$row['time']."</td>".
              "<td align='center'>".$row['num']."</td>".
              "<td align='center'>".$row['email']."</td>".
              "<td align='center'>".$row['rare']."</td>".
              "</tr>" ;
        
  
        }

echo "</table>";





?>
<br><br><br>
</body>
<html>