<?php
	 require('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User registration system using PHP and MySql</title>
	<link rel="stylesheet" type = "text/css" href="style.css">
</head>
<body>
	<div class = "header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">
		<!--display validation errors here-->
		<?php require('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo ''; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" value="<?php echo ''; ?>">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign in</a>
		</p>
	</form>

</body>
</html>