<?php
$orders = [];
if (isset($_COOKIE['orders'])) {
	$orders = $_COOKIE['orders'];
	$orders = json_decode($orders, true);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>BT159 tutorial</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<table class="table table-bordered">
			<tr>
				<th>STT</th>
				<th>Tên Sản Phẩm</th>
				<th>Giá</th>
				<th>Số Lượng</th>
			</tr>
<?php
$count = 1;
foreach ($orders as $item) {
	echo '<tr>
							<td>'.($count++).'</td>
							<td>'.$item['title'].'</td>
							<td>'.$item['price'].'</td>
							<td>'.$item['num'].'</td>
						</tr>';
}
?>
		</table>
	</div>
</div>
</body>
</html>