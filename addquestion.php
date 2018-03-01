<?php 
include("header.php");
?>
<div class="w3-container" style='margin-top:100px;'>
 <div class="w3-container w3-blue">
  <h2>Add A Question</h2>
</div>
<?php 
include("function/database/insert.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{					
	$question = $_POST['question']; 						
    $option1 = $_POST['option1']; 
	$option2 = $_POST['option2']; 
	$option3 = $_POST['option3']; 
	$option4 = $_POST['option4']; 
	$option5 = $_POST['option5']; 
	$option6 = $_POST['option6']; 
	$correctoption = $_POST['correctoption']; 
	$category = $_POST['category'];
	
	if($correctoption == "Option 1")
	{
	$correctoption = $option1;
	}
	else if ($correctoption == "Option 2")
	{
	$correctoption = $option2;
	}
	else if($correctoption == "Option 3")
	{
	$correctoption = $option3;
	}
	else if($correctoption == "Option 4")
	{
	$correctoption = $option4;
	}
	else if($correctoption == "Option 5")
	{
	$correctoption = $option5;
	}
	else if($correctoption == "Option 6")
	{
	$correctoption = $option6;
	}

	$table_name = "questions";
	$arr1 = array("Question", "Option1", "Option2", "Option3", "Option4", "Option5", "Option6", "Answer", "Category");
	$arr2 = array("$question", "$option1", "$option2", "$option3", "$option4", "$option5", "$option6", "$correctoption", "$category");
	
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
  <p>
  <label>Correct Option</label>
  <select name='correctoption' class="w3-input" >
	<option value='Option 1'>Option 1</option>
	<option value='Option 2'>Option 2</option>
	<option value='Option 3'>Option 3</option>
	<option value='Option 4'>Option 4</option>
	<option value='Option 5'>Option 5</option>
	<option value='Option 6'>Option 6</option>
  </select>	
  </p>
  <p>
  <label>Option 1</label> 
 <input class="w3-input" name="option1" type="text">
  </p>
  <p>
  <label>Option 2</label>
  <input class="w3-input" name="option2" type="text">
  </p>
  <p>
  <label>Option 3</label>
  <input class="w3-input" name="option3" type="text">
  </p>
  <p>
  <label>Option 4</label>
  <input class="w3-input" name="option4" type="text">  
  </p>
  <p>
  <label>Option 5</label>
  <input class="w3-input" name="option5" type="text">
  </p>
  <p>
  <label>Option 6</label>
  <input class="w3-input" name="option6" type="text">  
  </p>
  
  <input class="w3-input" type="submit"></p> 
</form>

</div>

</body>
</html>
