<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Signup Form</title>
	</head>
	<body>
		<div class="Content-holder" style="margin: 10px; margin-left: 40%; margin-top: 5%">
			<div class="Form-container" style="padding: 20px; border: 2px solid #000000; width: 30%">
				<h1> Registration Form </h1>
				<div class="Form-details">
					<form action="Process_Registration.php" method="post">
						<label for="Username">Username</label><br><br>
						<input type="text" name="username" id="username" placeholder="Enter Username"><br><br>
						
						<label for="Password">Password</label><br><br>	
						<input type="password" name="password" id="password" placeholder="Enter Password"><br><br>
						<label for="Confirm-Password">Confirm Password</label><br><br>	
						<input type="password" name="confirm-password" id="password" placeholder="Confirm Your Password"><br><br>
						<input type="submit" name="submit" value="submit"><br><br>
						<p>Already have an account | <a href="Login.php">Login here</a></p>
						<?php 
						$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					if(strpos($fullUrl,"username=empty")== true)
					{ 
						echo "Your Username cannot be empty. Try again!";
					}
					elseif(strpos($fullUrl,"password=empty")== true)
					{
						echo "Your password cannot be empty. Try again!";
					}
					elseif(strpos($fullUrl,"confirmpassword=false")==true)
					{
						echo "You entered 2 different passwords. Try again!";
					}
					elseif(strpos($fullUrl,"user=alreadyexist")==true)
					{
						echo "This account already exists. Try again!";
					}
						elseif(strpos($fullUrl,"Registration=sucess")==true)
					{
						echo "Your account was successfully created. Welcome! Please Login";
					}
						elseif(strpos($fullUrl,"Registration=failed")==true)
						{
							echo "Your data not inserted please try again!";
						}
						?>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>