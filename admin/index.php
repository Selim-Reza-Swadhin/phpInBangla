<?php
session_start();
if(isset($_SESSION['admin']))
{
	redirect('dashboard.php');
}
function redirect($page)
{
	echo '<script>window.location = "'.$page.'";</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - Login</title>
</head>
<body>
	<h1>Admin Login</h1>
	<form method="post" action="verify.php">
		<b>Username</b> : <input type="text" name="username"><br><br>
		<b>Password</b> : <input type="password" name="password"><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>