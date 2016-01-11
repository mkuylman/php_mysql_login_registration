<?php 
	session_start(); 

	if(isset($_SESSSION['user']) AND $_SESSSION['user']['logged_in'] == TRUE)
		header('Location: sucess.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login And Registration</title>
	<style type="text/css">
		*
		{
			font-family: sans-serif;
		}
	</style>
</head>
<body>
<?php
	if(isset($_SESSSION['errors']))
	{
		foreach($_SESSSION['errors'] as $error)
		{
			echo $error . "<br>";
		}
	}
?>
	<h2>Register</h2>
	<form action="process.php" method="post">
		<label for="first_name">First Name:</label>
 		<input type="text" name="first_name" id="first_name"/><br/>

 		<label for="last_name">Last Name:</label>
		<input type="text" name="last_name" id="last_name"/><br/>

		<label for="email">Email:</label>
		<input type="email" name="email" id="email"/><br/>

		<label for="password">Password:</label>
		<input type="password" name="password" id="password"/><br/>

		<label for="confirm_password">Confirm Password: </label>
		<input type="password" name="confirm_password" id="confirm_password"/><br/>
		
		<input type="hidden" name="action" value="register"/>
		<input type="submit" value="Register"/> 
	</form>

	<h2>Login</h2>
	<form action="process.php" method="post">
		<label for="email">Email:</label>
		<input type="text" name="email" id="email"/><br/>

		<label for="password">Password:</label>
		<input type="password" name="password" id="password"/><br/>

		<input type="hidden" name="action" value="login"/>
		<input type="submit" value="Login"/> 
	</form>
<?php $_SESSSION['errors'] = array(); ?>	
</body>
</html>





























