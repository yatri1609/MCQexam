<?php 
include("header.php");
?>


<div class="w3-container" style='margin-top:100px;'>
 <div class="w3-container w3-blue">
  <h2>Add category</h2>
</div>
<?php 
include("function/database/insert.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{											
    $username = $_POST['username']; 
	

	$table_name = "categories";
	$arr1 = array("Name");
	$arr2 = array("$username");
	
    $status = insertdb($table_name, $arr1, $arr2);
	
	if($status == 1)
	{
	echo "<br><center><font color='green'>Category added successfully</font></center>";
	}
	else
	{
	echo "<br><center><font color='red'>Category can not be added into the database.</font></center>";
	}
	
}
?>
<form class="w3-container" method='post'>
  <p>
 <label>Name</label>
  <input class="w3-input" name="username" type="text"></p> 
  <input class="w3-input" type="submit"></p> 
</form>

</div>

</body>
</html>
