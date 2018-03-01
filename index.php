<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-top">
  <div class="w3-bar w3-orange">
    <a href="#" class="w3-bar-item w3-button"><img src='images/logo.png' height='60'/></a>
  </div>
</div>


<div class="w3-container" style='margin-top:100px;'>
 <div class="w3-container w3-blue">
  <h2>Login into your account</h2>
</div>

<form class="w3-container" method='post'>
  <p>
  <label>Email</label>
  <input class="w3-input" name="username" type="text"></p>
  <p>
  <label>Password</label>
  <input class="w3-input" name="password" type="password"></p>
  <input class="w3-input" type="submit"></p> 
</form>

</div>

</body>
</html>
<?php 
include("function/database/select.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{											
    $username = $_POST['username']; 
	$password = $_POST['password']; 
    
	$tablename = "users";
	$condition = "Username = '".$username."' && Password = '".$password."'";
	$fetch = "Active";
	
    $status = select($tablename,$condition,$fetch);
	
	if($status == 1)
	{
	echo "<br><center><font color='green'>Login successfully</font></center>";
	}
	else
	{
	echo "<br><center><font color='red'>Invalid Username or Password. Please check.</font></center>";
	}
}

?>