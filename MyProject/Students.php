<?php

	$getUsername = $getPassword = $getEmail = "";
	if(isset($_GET['username'])){
		$getUsername = $_GET['username'];
	}
	if(isset($_GET['password'])){
		$getPassword = $_GET['password'];
	}
	if(isset($_GET['email'])){
		$getEmail = $_GET['email'];
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<style type="text/css">

		*{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
		}

		.management{
			width: 100%;
			border: 1px solid #000;
			border-radius: 4px;
			border-color: #327ab7;
			margin-bottom: 100px;
		}

		.management h3{
			background: #327ab7;
			border-radius: 4px;
			color: #fff;
			font-size: 1rem;
			line-height: 40px;
			padding-left: 10px;
		}
		
		.management table{
			width: 97%;
			margin: 17px;
		}

		.td{
			line-height: 40px;
			padding-left: 10px;
			border: 1px solid #cecece;
		}
		.xoa{
			line-height: 40px;
			width: 60px;
			border: 1px solid #cecece;
		}

		.form-input-std{
			width: 97%;
			margin: 17px;
		}
	</style>
</head>
<body>

	<div class="container">
		<h2 style="text-align: center;">Welcome to PHP tutorial</h2>
		<div class="management">
			<div class="tieude">
				<h3>Management</h3>
			</div>
			<table class="tblShow">
				<thead class="td"> <!--  class="thead-dark" -->
					<tr>
						<th class="td">No</th>
						<th class="td">Username</th>
						<th class="td">Email</th>
						<th class="td">Password</th>
						<th class="xoa"></th>
					</tr>
				</thead>
				<tbody>				
					<tr>
						<td class="td">1</td>
						<td class="td">hcthang</td>
						<td class="td">hcthang@example.com</td>
						<td class="td">123</td>
						<!-- <td><button class="btn btn-danger">Delete</button></td> -->
					</tr>
					<tr>
						<td class="td">2</td>
						<td class="td">Abc</td>
						<td class="td">Abc@example.com</td>
						<td class="td">123</td>
						<td><button class="btn btn-danger">Delete</button></td>
					</tr>
					<tr>
						<td class="td">3</td>
						<td class="td">Def</td>
						<td class="td">Def@example.com</td>
						<td class="td">123</td>
						<td><button class="btn btn-danger">Delete</button></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="management">
			<div class="tieude">
				<h3>Input detail information</h3>
			</div>

			<div class="form-input-std">
				<form method="get">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" placeholder="nhap username" required="">
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="password" name="password" class="form-control" placeholder="nhap email" required>
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="fullname" class="form-control" placeholder="nhap password" required>
					</div>

					<button class="btn btn-success">Dang Ky</button> <!-- mặc định là type="button" -->

				</form>
			</div>
		</div>
		
	</div>
	

	<script type="text/javascript">
		$(function){
			
		}
	</script>
</body>
</html>