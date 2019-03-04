<?php

	if (!empty($_POST)) {
	$login_username = $_POST['username'];
	$login_password = $_POST['password'];

	$cookie_username = $cookie_password = "";

	if (isset($_COOKIE['username'])) {
		$cookie_username = $_COOKIE['username'];
	}

	if (isset($_COOKIE['password'])) {
		$cookie_password = $_COOKIE['password'];
	}

	if ($login_username == $cookie_username && $login_password == $cookie_password && $login_username != "" && $login_password != "") {
		setcookie('login_status', 'true', time()+1000, '/');

		header("Location: welcome.php");
		die();
	}
}

// if (isset($_COOKIE['login_status']) && $_COOKIE['login_status'] == "true") {
// 	header("Location: welcome.php");
// 	die();
// }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dang Nhap</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<form method="post">
			<div class="form-group">
				<label for="username">Ten Tai Khoan</label>
				<input id="username" style="width: 20%" type="text" name="username" class="form-control" placeholder="nhap ten tai khoan" required>
			</div>

			<div class="form-group">
				<label for="password">Dia chi</label>
				<input id="password" style="width: 20%" type="password" name="password" class="form-control" placeholder="nhap mat khau" required>

			</div>

			<button class="btn btn-success">Dang nhap</button>
		</form>
	</div>
	
</body>
</html>