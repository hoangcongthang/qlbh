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
		<div class="panel panel-primary">
			<div class="panel-heading">
				Dang Nhap Tai Khoan Nguoi Dung
			</div>
			<div class="panel-body">
				<form method="post" action="{{ route('post-login_user') }}">
					{{ csrf_field() }}
					
					@if(count($errors->all()))
					<ul class="error">
						@foreach($errors->all() as $error)
						{{ $error }}
						@endforeach
					</ul>
					@endif

					<div class="form-group">
						<label for="fullname">Ten tai khoan</label>
						<input id="fullname" type="text" name="fullname" class="form-control" placeholder="nhap ten tai khoan" required="">
					</div>
					
					<div class="form-group">
						<label for="password">Mat khau</label>
						<input id="password" type="password" name="password" class="form-control" placeholder="nhap mat khau" required>
					</div>

					
					<button class="btn btn-success" type="submit">Đăng Nhập</button> <!-- mặc định là type="button" -->
				</form>
			</div>
		</div>
	</div>
</body>
</html>