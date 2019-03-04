


<!DOCTYPE html>
<html>
<head>
	<title>Dang Ky</title>
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
				<label for="username">Ten tai khoan</label>
				<input id="username" style="width: 20%" type="text" name="username" class="form-control" placeholder="nhap ten tai khoan" required="">
			</div>
			
			<div class="form-group">
				<label for="password">Mat khau</label>
				<input id="password" style="width: 20%" type="password" name="password" class="form-control" placeholder="nhap mat khau" required>
			</div>

			
			<button class="btn btn-success" type="submit">Dang Ky</button> <!-- mặc định là type="button" -->
		</form>

<?php

	require_once ("connect.php");
	if(isset($_POST['submit'])){
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$password = md5($password);

		$sql = "insert into users(username, password) values ('$username', '$password')";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
	}
?>

	</div>
</body>
</html>