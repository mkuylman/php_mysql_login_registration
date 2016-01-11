<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Success Page</title>
</head>
<body>
	<form action="process.php" method="post">
		<input type="hidden" name="action" value="logout" />
		<input type="submit" value="Logout" />
	</form>
	<h3>Welcome, <?php echo $_SESSION['user']['first_name']; ?></h3>
	<h4><?php echo $_SESSION['user']['email']; ?> </h4>
</body>
</html>



