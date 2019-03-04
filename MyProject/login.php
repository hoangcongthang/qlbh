

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<form method="get">
			<div class="form-group">
				<label>Ten Tai Khoan</label>
				<input style="width: 20%" type="text" name="username" class="form-control" placeholder="nhap ten tai khoan" required>
			</div>

			<div class="form-group">
				<label>Dia chi</label>
				<input style="width: 20%" type="text" name="address" class="form-control" placeholder="nhap dia chi" required>

			</div>

			<button class="btn btn-success">Dang nhap</button>
		</form>
	</div>
	<?php

	require_once ("php-login.php");

	

	?>
</body>
</html>