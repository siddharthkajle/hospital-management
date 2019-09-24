
<html>
<title>WELCOME to HOSPITAL</title>
<head>
<link rel="stylesheet" type="text/css" href="donation1.css">
</head>
<body backgound="s1.png">

<table border="2px" cellspacing="4px" cellpadding="4px" align ="center">
<tr><td>
<h1 align="center" style="text-shadow:2px 2px 10px grey; font-size:33px; font-family:Bodoni MT;">Few Drops Of Blood can Save someones Life</h1>
<hr>
<form method="get"  action="addblood.php">
<p>
<fieldset>
<legend><p2>INFORMATION</p2></legend>
<label>Name
<input type="text" name="name" required placeholder='Place of Camp'>
</label> 
</p>

<p>
<label>Phone 
<input type="tel" name="number" placeholder='Number of cordinator' required>
</label>
</p>

<p>
<label>Email 
<input type="email" name="email" placeholder='Email of cordinator' required>
</label>
</p>
</fieldset>
<fieldset>
<legend><p2>DATES</p2></legend>
<p><label>DATE :  <input type="text" name="date" placeholder='D/M/Y'>  </label></p>
<p><label>TIME :  &nbsp<input type="text" name="time" placeholder="O' clock"> </label></p>
</fieldset>
<br>

<fieldset>
<legend><p2>Requirement of blood group most</p2></legend>
<p><label> <input type="radio" name="blood" required value="o+"> O+ </label></p>
<p><label> <input type="radio" name="blood" required value="abo"> ABO </label></p>
<p><label> <input type="radio" name="blood" required value="rh"> RH </label></p>
</fieldset>





<br>
<p align="center"><input type="submit" value="Submit"></p>

</form>
</td></tr>
</table>
</body>
</html>