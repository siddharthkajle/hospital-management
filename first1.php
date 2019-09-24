

<!DOCTYPE html>
<html>
<head>

<title>Login page</title>
<link rel="stylesheet" href="style.css">
</head>
<script>
function add(){
  window.location.href='retrive2.php';
}
</script>
<body>



<h1 align="center" style='text-shadow:5px 5px 10px black;color:white;'>

<span>Work To Give Healthy Life</span>
</h1>

<cenetr>  
  <div class="login" >
     <div class="avatar">
  <i class="fa fa-user"></i>
</div>
<br><br><br>
<h2>Log In Form</h2>
<form action="retrive1.php" method="post">
<div class="box-login" >
  <i class="fa fa-envelope" aria-hidden="true"></i>
  <input type="text" placeholder="Admin Email" name='email' required>
</div>

<div class="box-login">
  <i class="fa fa-lock" aria-hidden="true"></i>
  <input type="text" placeholder="Password" name='password' required>

</div>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Log In"  id="login"> 
</form>
<br><br>
<div class="bottom">
  <a href="register1.php">Register</a>
  <a href="forget1.php">Forgot Password</a>
</div>

</div>

</center>
</body>
</html>

