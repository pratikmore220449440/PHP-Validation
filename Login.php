
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Login Form</title>
	</head>
	<body>
		<div class="Content-holder" style="margin: 10px; margin-left: 40%; margin-top: 10%">
			<div class="Form-container" style="padding: 20px; border: 2px solid #000000; width: 30%">
				<h1> Login Form </h1>
				<div class="Form-details">
					<form action="Process_Login.php" method="post">
						<label for="Username">Username</label><br><br>
						<input type="text" name="username" id="username" placeholder="Enter Username"><br><br>
						<label for="Password">Password</label><br><br>
						<input type="password" name="password" id="password" placeholder="Enter Password"><br><br>
						<input type="submit" name="submit" value="submit"><br><br>
						<p>Create New Account | <a href="Signup.php">Signup here</a></p>
					</form>
					<?php
					$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					if(strpos($fullUrl,"username=empty")== true){
						echo "Your Username cannot be empty. Try again!";
					}
					elseif(strpos($fullUrl,"password=empty")== true){
						echo "Your password cannot be empty. Try again!";
					}
					elseif(strpos($fullUrl,"signup=success")==true){
						echo "You are successfully connected. Welcome back!";
						echo "<html><a href='formcheckdate.php'>Please click here to goto checkform</a></html>";
					}
					elseif(strpos($fullUrl,"username=wrong")==true)
					{
						echo "You entered a wrong username!";
					}
					elseif(strpos($fullUrl,"password=wrong")==true)
					{
						echo "You entered a wrong password!";
					}
					?>
				</div>
			</div>
		</div>
	</body>
</html>