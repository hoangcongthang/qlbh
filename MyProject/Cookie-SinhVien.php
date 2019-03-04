<?php
	require_once ("php-Cookie-SinhVien.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>T-H-X SV</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
	<style>
		
		.chieungang{
			width: 20%;
		}

		.hienthi{
			margin-left: 17px;
		}
		.xoa{
			margin-left: 17px;
		}
	</style>
</head>
<body>

	<div class="container">
		<form method="get">
			<div class="form-group">
				<label>Ten</label>
				<input type="text" name="fullname" class="form-control chieungang" placeholder="nhap ho ten" required>
			</div>

			<div class="form-group">
				<label>Tuoi</label>
				<input type="number" name="age" class="form-control chieungang" placeholder="nhap tuoi (trên 17 tuổi)" required min="18">
			</div>
			
			<div class="form-group">
				<label>Dia chi</label>
				<input type="text" name="address" class="form-control chieungang" placeholder="nhap dia chi" required>
			</div>
						
			<button class="btn btn-success" name="add">Them</button> <!-- mặc định là type="button" -->
			<button class="btn btn-success hienthi" name="show">Hien thi</button>
			<button class="btn btn-success xoa" name="delete">Xoa</button>
			
		</form>

	</div>

</body>
</html>