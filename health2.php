<?php
$name=$_POST["name"];
$weight=$_POST["weight"];
$height=$_POST["height"];
$blood=$_POST["blood"];
$oil=$_POST["oil"];
$email=$_POST["email"];
$number=$_POST["number"];
$bmi=($weight/$height)/$height;
?>
<html>
<title>WELCOME to HOSPITAL</title>
<head>
<link rel="stylesheet" type="text/css" href="health.css">
</head>
<body >

<table border="2px" cellspacing="4px" cellpadding="4px" align ="center">
<tr><td>
<h1 align="center" style="text-shadow:2px 2px 10px grey; font-size:33px; font-family:Bodoni MT;">Healthy Food</h1>
<hr>
<form method="get"  action="forth.php">
<p>
<label>Name : <?php
echo "$name";
?>
</label> 
</p>

<fieldset>
<legend><p2>Your BMI Result</p2></legend>
<?php echo "<br>IBM    : $bmi"; ?>
<p><label>CATEGORY : 
<?php
if($bmi<=18.5){echo "UNDER WEIGHT <br><b>Food :</b> Rice ,
Nuts , Nut Butters,
Red Meats , Milk , 
Potatoes , Starches ,  
Salmon , Oily Fish ,
Protein Supplements";}
if($bmi<=24.9&&$bmi>=18.5){echo "NORMAL WEIGHT <br><b>Food :</b> Milk , 
Vegetable , Pulse , Fish , 
Grains , drink water , nuts ";}
if($bmi<=29.9&&$bmi>=25){echo "OVER WEIGHT<br><b>Food :</b> Leafy Greens ,
Salmon ,
Cruciferous Vegetables ,
Lean Beef , Chicken Breast ,
Boiled Potatoes ,
Tuna ,
Beans and Legumes";}
if($bmi>=30){echo "OVER OVER WEIGHT<br><b>Food :</b> Exercise is most important  , Leafy Greens ,
Salmon ,
Cruciferous Vegetables ,
Lean Beef , Chicken Breast ,
Boiled Potatoes ,
Tuna ,
Beans and Legumes";}

?>
 </label></p>
</fieldset>
<br>

<fieldset>
<legend><p2>: Blood result :</p2></legend>
<br>




<p><label>CATEGORY : </label></p>
<?php
if($blood=="HIGH"){echo "HIGH pressure <br><b>Food :</b>Leafy greens , Berries , blueberries , flavonoids ,
Red beets ,
Skim milk , yogurt ,
Oatmeal,
Bananas,
Salmon, mackerel, fish, 
Seeds.";}
if($blood=="LOW"){echo "LOW pressure <br><b>Food :</b>Leafy greens , Berries , blueberries , flavonoids ,
Red beets ,
Skim milk , yogurt ,
Oatmeal,
Bananas,
Salmon, mackerel, fish 
Seeds.";}


if($blood=="NO"){echo "NORMAL pressure <br><b>Food :</b>fruits, vegetables, low-fat dairy, whole grains,
 poultry, fish, and nuts really works. You also need to avoid fats, red meat, and excess sugar,
milk,pulses";}



?>






</fieldset>


<br>
<fieldset>
<legend><p2>: Cholesterol :</p2></legend>

<?php
if($oil=="YES"){echo "Cholesterol <br><b>Food :</b>Oats , 
Barley , other whole grains , 
Beans , 
Eggplant , okra ,
Nuts , 
Vegetable oils , 
Apples , grapes , strawberries , citrus fruits.";}


if($oil=="NO"){echo "NORMAL pressure <br><b>Food :</b>fruits, vegetables,  whole grains ,
 walnut , fish ,  red meat, sweet potato , sugar,
milk , pulses";}

?>

</fieldset>


<input type='hidden' name='name' value="<?php echo '$user';?>">
<br>
<p align="center"><input type="submit" value="OK"></p>

</form>
</td></tr>
</table>
</body>
</html>