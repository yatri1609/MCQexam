<?php
include_once("connectdb.php");
function selectall($tablename, $fetch){
 connectdb();
 
 $sql = "SELECT $fetch FROM $tablename;"
											 or die("Couldnt find the table");
											 
											 $sql_result = mysql_query($sql) or die ( mysql_error());											 											
											 $i=0;
											 
											 $num_rows = mysql_num_rows($sql_result);
											 											
											if($num_rows > 1)
										    {
											 while($row = mysql_fetch_array($sql_result))
											    {											 
												$value[$i]=$row["$fetch"];	
												$i++;		
												}	
											}
											elseif($num_rows == 0)
											{
											$value = false;
											}
											elseif($num_rows == 1)
											{											   
												$row = mysql_fetch_assoc($sql_result);
												$value=$row["$fetch"];																			
											}
											else
											{
											$value = false;
											}
											
											return $value;
}
?>

<?php

function selectallsort($tablename,$fetch, $sortby, $order){
 connectdb();
 
 $sql = "SELECT $fetch FROM $tablename ORDER BY $sortby $order;"
											 or die("Couldnt find the table");
											 
											 $sql_result = mysql_query($sql) or die ( mysql_error());											 											
											 $i=0;
											 
											 $num_rows = mysql_num_rows($sql_result);
											 
											 if($num_rows > 1){
											 while($row = mysql_fetch_array($sql_result))
											 {
											 
											$value[$i]=$row["$fetch"];	
											$i++;		
											}	
											}
											else{
											while($row = mysql_fetch_array($sql_result))
											 {											 
											$value=$row["$fetch"];			
											}	
											}
return $value;
}
?>