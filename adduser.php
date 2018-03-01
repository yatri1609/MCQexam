<?php 
include("header.php");
?>

<div class="w3-container" style='margin-top:100px;'>
 <div class="w3-container w3-blue">
  <h2>Add users</h2>
</div>
<?php 
include("function/database/insert.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{											
    $username = $_POST['username']; 
	$useremail = $_POST['useremail']; 
	$userpassword = $_POST['password']; 
	$userrepassword = $_POST['repassword']; 
	
	if($userpassword != $userrepassword)
	{
	echo "Error ! Passwords don't match. Please try again.";exit();	
	}
	else
	{
	$table_name = "users";
	$arr1 = array("Username", "Password", "Name");
	$arr2 = array("$useremail","$userpassword", "$username");
	
    $status = insertdb($table_name, $arr1, $arr2);
	
	if($status == 1)
	{
	echo "<br><center><font color='green'>User added successfully</font></center>";
	}
	else
	{
	echo "<br><center><font color='red'>User can not be added into the database.</font></center>";
	}
	
	}
}
?>
<form class="w3-container" method='post'>
  <p>
 <label>Name</label>
  <input class="w3-input" name="username" type="text"></p> 
 <label>Email</label>
  <input class="w3-input" name="useremail" type="text"></p>
  <p>
  <label>Password</label>
  <input class="w3-input" name="password" type="password"></p>
  <label>Re-enter Password</label>
  <input class="w3-input" name="repassword" type="password"></p>
  <input class="w3-input" type="submit"></p> 
</form>

</div>

</body>
</html>
