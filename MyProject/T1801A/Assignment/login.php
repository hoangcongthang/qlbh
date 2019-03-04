<?php
	require_once ('manager.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
	<meta charset="UTF-8">
	<title>ĐĂNG NHẬP</title>
	<link rel="stylesheet" type = "text/css" href="style.css">
</head>
<body>
	<div class = "header">
		<h2>ĐĂNG NHẬP</h2>
	</div>

	<form method="post">
		<!--display validation errors here-->
		<?php require('errors.php'); ?>
		<div class="input-group">
			<label for="fullname">Tên tài khoản</label>
			<input type="text" name="fullname" id="fullname">
		</div>
		<div class="input-group">
			<label for="password">Mật khẩu</label>
			<input type="password" name="password" id="password">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Đăng Nhập</button>
		</div>
		<p>
			Bạn chưa có tài khoản? <a href="register.php">Đăng ký</a>
		</p>
	</form>

</body>
</html>