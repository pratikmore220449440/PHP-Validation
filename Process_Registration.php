<?php
require('Authantication.php');
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$confirmpass=$_POST['confirm-password'];
	if(empty($username))
	{
		header("Location:Signup.php?username=empty");
		exit();
	}
	else if(empty($password))
	{
		header("Location: Signup.php?password=empty");
		exit();
	}
	else if($password!=$confirmpass)
	{
		header("Location:Signup.php?confirmpassword=false");
		exit();
	}
	else
	{
		$sql1 = "SELECT * FROM details WHERE user_name='$username'";
		$result1 = mysqli_query($mysqli,$sql1);
		$count1 = mysqli_num_rows($result1);
		if($count1>0)
		{
			header("Location:Signup.php?user=alreadyexist");
			exit();
		}
		else
		{
			$query= "INSERT INTO details(user_id,user_name,user_password)VALUES('','$username','$password')";
			if(mysqli_query($mysqli,$query))
			{
				header("Location:Signup.php?Registration=sucess");
				exit();
			}
			else
			{
				header("Locatioin:Signup.php?Registration=failed");
				exit();
			}
		}
	}
	
	
}

?>