<?php
$mysqli = new mysqli('localhost', 'root', '', 'site_users'); 
 
if(!$mysqli)
{
	die("connection failed ".mysqli_connect_error());
	
	
}

?>