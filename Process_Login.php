<?php
	require_once('Authantication.php');
	
	if(isset($_POST['submit']))
	{
		echo $_POST['username'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		sanitizeString($username);
		sanitizeString($passowrd);
		if(empty($username))
		{
			header("Location: Login.php?username=empty");
			exit();
		}
		else if(empty($password))
		{
			header("Location: Login.php?password=empty");
			exit();
		}
		else
		{
		$sql1 = "SELECT * FROM details WHERE user_name='$username'";
		$result1 = mysqli_query($mysqli,$sql1);
		$count1 = mysqli_num_rows($result1);
		if($count1>0)
		{
			$sql2 = "SELECT * FROM details WHERE user_password='$password'";
			$result2 = mysqli_query($mysqli,$sql2);
			$count2 = mysqli_num_rows($result2);
			if($count2>0)
			{
				header("Location:Login.php?signup=success");
			}
			else
			{
				header("Location:Login.php?password=wrong");
				exit();
			}
		}
		else
		{
			header("Location:Login.php?username=wrong");
		
			exit();
			}}
	}
function sanitizeString($var) 
{
	if (get_magic_quotes_gpc())
	{
	$var = stripslashes($var);
	$var = strip_tags($var);
	$var = htmlentities($var);
	return $var;     }}


?>