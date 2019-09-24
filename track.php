
<html>

<title>WELCOME to hospital</title>
<head>
<link rel="stylesheet" type="text/css" href="track.css">
</head>

<body style="background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url(i4.jpg);
height:100vh;
background-size:cover;
background-position:center;">

<div class="main">
<div id ="d1" ><br>
<h1 align="center"><b>Hospitality</b></h1>
</div>
<ul>
<li><a href ="s2.php" class ="active">HOME</a></li>
<li><a href ="report.html">REPORT</a></li>
<li><a href ="apoint1.php">APPOINTMENT</a>
</li>
<li><a href ="donation1.php">DONATION</a></li>
<li><a href ="feedback.php">CONTACT</a></li>
</ul>
</div>
<br><br><br><br><br><br>
<h2 class='title' style="color:white;font-size:50px;margin-left:-10%;text-shadow:2px 2px 5px grey;">HISTORY </h2>
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


$p="SELECT * from report";

$cost=mysqli_query($conn,$p);
$result=mysqli_fetch_assoc($cost);


    


    echo "<table border='2px' cellspacing='10px' cellpadding='10px' align ='center' height='40%' width='40%' bgcolor='#D0A9F5' style=' opacity: 0.6;font-size:28px; '>
           <th>id </th>
           <th>id_customer </th>
           <th>disease </th><th>email_customer </th><th>age </th><th>range1 </th><th>range2 </th><th>cost </th><th>value </th>
    ";
        foreach($cost as $row){
        	  
               echo"<tr>".
             "<td align='center'>".$row['id']."</td>".
             "<td align='center'>".$row['pid']."</td>".
             "<td align='center'>".$row['name']."</td>".
              "<td align='center'>".$row['email']."</td>".
              "<td align='center'>".$row['age']."</td>".
              "<td align='center'>".$row['range1']."</td>".
              "<td align='center'>".$row['range2']."</td>".
              "<td align='center'>".$row['cost']."</td>".
              "<td align='center'>".$row['value']."</td>".
              "</tr>" ;
        
  
        }

echo "</table>";





?>
<br><br><br>
</body>
<html>