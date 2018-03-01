<?php 
include("header.php");
?>

<div class="w3-container" style='margin-top:100px;'>
 <div class="w3-container w3-blue">
  <h2>Add answer type question</h2>
</div>
<?php 
include("function/database/insert.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{											
    $question = $_POST['question']; 
	$answer = $_POST['answer']; 
	$category = $_POST['category']; 
	
	$table_name = "longquestion";
	$arr1 = array("Question", "Answer", "Category");
	$arr2 = array("$question","$answer", "$category");
	
    $status = insertdb($table_name, $arr1, $arr2);
	
	if($status == 1)
	{
	echo "<br><center><font color='green'>Question added successfully</font></center>";
	}
	else
	{
	echo "<br><center><font color='red'>Question can not be added into the database.</font></center>";
	}
	
}
?>
<form class="w3-container" method='post'>
  <p>
  <label>Question</label>
  <textarea class="w3-input" name="question" type="text"></textarea> 
  </p>
  <p>
  <label>Answer</label>
  <textarea class="w3-input" name="answer" type="text"></textarea> 
  </p>
  <label>Select a category</label>
  <select name='category' class="w3-input" >
 	 <?php 
	include("function/database/selectall.php");
	
    $tablename = "categories";
	$fetch = "Name";
	
    $status = selectall($tablename,$fetch);
	
	$i = 0;
		
		for($i = 0;$status[$i] != null; $i++)
		{
		echo "<option value='$status[$i]'>$status[$i]</option>";
		}
	?>	
  </select>	
  </p>
  <input class="w3-input" type="submit"></p> 
</form>

</div>

</body>
</html>
