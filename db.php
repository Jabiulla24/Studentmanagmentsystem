<?php

$db_host = "localhost"; 
$db_username = "root";  
$db_pass = "";  
$db_name = "studentmgmt"; 

$conn=mysql_connect($db_host,$db_username,$db_pass) or die ("could not connect to mysql");

if($conn)
mysql_select_db($db_name);
else
echo mysql_error();

?>
