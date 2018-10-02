<?php


//Define variable for connection
$hostname = "localhost";
$username="root";
$pass="";
$db_name="memunat_resume";


//db Connection
$dbM = mysqli_connect($hostname, $username, $pass, $db_name);
if ($dbM)
{
	//echo 'DB Connected';	
}
	else
{
	//echo 'DB not Connected';
}
?>