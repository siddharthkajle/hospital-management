<!DOCTYPE html>
<html>
<head>
<title>Login page</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<h1 align="center" style='text-shadow:5px 5px 10px black;color:white;'>
Work To Give Healthy Life
</h1>
<cenetr>	
	<div class="login" >
		<div class="avatar" >
	<i class="fa fa-user"></i>
</div>
<br><br><br>
<h2>Submit Details for Admin </h2>

<div class="box-login">
	
	<input type="text" placeholder="Name" name="name" id="name" required>

</div>
<div class="box-login" >
	
	<input type="text" placeholder="Email" name="email" id="email" required>
</div>

<div class="box-login">
	
	<input type="text" placeholder="Password" name="password" id="password" required>

</div>
<div class="box-login">
	
	<input type="text" placeholder="Confirm" id="b" required>

</div>
<br><center>
<buton  type="submit" class="btn-login" onclick='add()'>
	
	Submit
</buton></center>
<br><br>
<div class="bottom">
	<a href="first1.php">Log in</a>
</div>

</div>

</center>
<script>
function add(){
	if(document.getElementById("password").value!=document.getElementById("b").value)
          {alert("Password should match with Confirm Password");}
  else{  
  	alert('Ready To Give Service');
    add2();
  }
}
</script>

   



<script>
   function add2(){ 
    var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    var password=document.getElementById("password").value;
    window.location.href='addadmin.php?name='+name+"&password="+password+"&email="+email;
   }</script>
</body>

<br><br><br><br>
</html>


































