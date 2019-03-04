<?php
$products = [];
for ($i = 1; $i <= 15; $i++) {
	$products[] = [
		'id'        => $i,
		'thumbnail' => 'http://pngimg.com/uploads/smartphone/smartphone_PNG8523.png',
		'title'     => 'HTC '.$i,
		'price'     => 1000000*$i
	];
}

require_once ('order.php');
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
<?php
foreach ($products as $item) {
	echo '<div class="col-md-4">
				<img src="'.$item['thumbnail'].'" style="max-width: 200px">
				<p>
					'.$item['title'].'
				</p>
				<p>
					Giá : '.$item['price'].' VNĐ
				</p>
				<form method="post">
				    <div class="form-group">
				      <input type="amount" class="form-control" id="email" placeholder="Enter Amount" name="amount">
				    </div>
				</form>
				<p>
					<a href="?id='.$item['id'].'&title='.$item['title'].'&price='.$item['price'].'"><button class="btn btn-warning" type="button">Đặt Mua</button></a>
				</p>
			</div>';
}
// <button type="submit" class="btn btn-primary">Submit</button>
?>
	</div>
</div>
</body>
</html>