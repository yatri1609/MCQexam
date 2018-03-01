<?php
include_once ("siteroot.php");
include_once($SITEROOT."modules/database/connectdb.php");

function update($tablename, $tablerow, $value, $condition){

//include("database/connectdb.php"); 
connectdb();
 
$query = "UPDATE $tablename SET $tablerow = '$value' WHERE $condition";	

$result=mysql_query($query);
$num_of_affected = mysql_affected_rows();

	if(!$result || $num_of_affected == 0)
	{
	//echo mysql_error();//echo $result;
	  echo "
	  <br><div class='alert alert-danger' role='alert'>
        <strong>Oh snap!</strong> Error updating !! Check your input.</strong>
      </div>";
    return 0;
	}
    else {
	//echo mysql_error();echo $result;
	//echo "Total row updated : ". $num_of_affected;
	echo '<div class="alert alert-success" role="alert">
        <strong>Well done!</strong> Successfully Done.</strong>
      </div>';
     return 1;
	}
}