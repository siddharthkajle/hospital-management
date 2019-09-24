
<html>
<title>WELCOME to HOSPITAL</title>
<head>
<link rel="stylesheet" type="text/css" href="health.css">
</head>
<body backgound="i1.jpg">

<table border="2px" cellspacing="4px" cellpadding="4px" align ="center">
<tr><td>
<h1 align="center" style="text-shadow:2px 2px 10px grey; font-size:33px; font-family:Bodoni MT;">Healthy Food</h1>
<hr>
<form method="post"  action="health2.php">
<p>
<label>Name
<input type="text" name="name" required>
</label> 
</p>

<p>
<label>Phone 
<input type="tel" name="number">
</label>
</p>

<p>
<label>Email 
<input type="email" name="email">
</label>
</p>

<fieldset>
<legend><p2>INDEX</p2></legend>
<p><label>WEIGHT :  <input type="text" name="weight" placeholder='Kilogram'> kg  </label></p>
<p><label>HEIGHT :  &nbsp<input type="text" name="height" placeholder="Meters"> m </label></p>
</fieldset>
<br>

<fieldset>
<legend><p2>Do you have any blood related problem?</p2></legend>
<p><label> <input type="radio" name="blood" required value="HIGH"> HIGH </label></p>
<p><label> <input type="radio" name="blood" required value="LOW"> LOW </label></p>
<p><label> <input type="radio" name="blood" required value="NO"> NO </label></p>
</fieldset>


<br>
<fieldset>
<legend><p2>Do you have colestrol?</p2></legend>
<p><label> <input type="radio" name="oil" required value="YES"> YES </label></p>
<p><label> <input type="radio" name="oil" required value="NO"> NO </label></p>
</fieldset>



<br>
<p align="center"><input type="submit" value="Submit"></p>

</form>
</td></tr>
</table>
</body>
</html>