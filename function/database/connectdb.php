<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
function connectdb()
{

	$connection= mysql_connect("localhost","root","")
	or die("Error : Couldn't connect to the server.");      

	//select a database to work with
	$db = mysql_select_db("exams",$connection)
	or die("Error : Could not connect to database.");      

}
