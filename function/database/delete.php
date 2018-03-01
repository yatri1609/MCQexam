<?php 
 include_once("siteroot.php");
 include_once($SITEROOT."modules/database/connectdb.php");

 function deletedb($table_name, $table_column, $column_values)
{   
    $string1= $table_column; $string2 = $column_values; 

	connectdb();
	$query = "DELETE FROM $table_name WHERE $string1 = '$string2'";
	
	$result=mysql_query($query);
	if(!$result)
	{
	 echo mysql_error();
	  echo(" <br>    <div class='alert alert-danger' role='alert'>
        <strong>Oh snap!</strong> Record already present.Try again with some other name.
      </div>
   ");
    return 0;
	}
    else {
	//echo '<br><div class="alert alert-success" role="alert">      <strong>Well done!</strong> Successfully Done.     </div>';
	  return 1 ;

	}
} 