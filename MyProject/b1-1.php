

<?php
require_once ("php-b1-1.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form tutorial</title>
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
				<label for="username">Ten tai khoan</label>
				<input id="username" style="width: 20%" type="text" name="username" class="form-control" placeholder="nhap ten tai khoan" required="">
			</div>
			
			<div class="form-group">
				<label for="address">Dia chi</label>
				<input id="address" style="width: 20%" type="text" name="address" class="form-control" placeholder="nhap dia chi" required>
			</div>

			<div class="form-group">
				<label for="fullname">Full Name</label>
				<input id="fullname" style="width: 20%" type="text" name="fullname" class="form-control" placeholder="nhap ho ten" required>
			</div>

			

			<button class="btn btn-success">Dang Ky</button> <!-- mặc định là type="button" -->
		</form>

	</div>
</body>
</html>