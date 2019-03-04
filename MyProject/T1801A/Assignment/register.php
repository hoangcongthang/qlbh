<?php 
	require_once ('manager.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ĐĂNG KÝ</title>
	<link rel="stylesheet" type = "text/css" href="style.css">	
</head>
<body>
	<div class = "header">
		<h2>ĐĂNG KÝ</h2>
	</div>

	<form method="post">
		
		<?php require_once ('errors.php'); ?>
		<div class="input-group">
			<label for="fullname">Tên tài khoản</label>
			<input type="text" name="fullname" id="fullname">
		</div>

		<div class="input-group">
			<label for="password">Mật khẩu</label>
			<input type="password" name="password" id="password">
		</div>

		<div class="input-group">
			<button type="submit" name="register" class="btn">Đăng Ký</button>
		</div>
		
		<p>
			Bạn đã có tài khoản? <a href="login.php">Đăng Nhập</a>
		</p>
	</form>
</body>
</html>