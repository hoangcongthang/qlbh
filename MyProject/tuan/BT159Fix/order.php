<?php
$id  = $title  = $price  = '';
$num = 1;

if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

if (isset($_GET['num'])) {
	$num = $_GET['num'];
}

if (isset($_GET['title'])) {
	$title = $_GET['title'];
}

if (isset($_GET['price'])) {
	$price = $_GET['price'];
}

if ($id != '' && $title != '' && $price != '') {
	$orders = [];
	if (isset($_COOKIE['orders'])) {
		$orders = $_COOKIE['orders'];
		$orders = json_decode($orders, true);
	}

	//save into cookie
	$isFind = false;
	for ($i = 0; $i < count($orders); $i++) {
		if ($orders[$i]['id'] == $id) {
			$orders[$i]['num'] = $orders[$i]['num']+$num;
			$isFind            = true;
			break;
		}
	}
	if (!$isFind) {
		$item = [
			'id'    => $id,
			'title' => $title,
			'price' => $price,
			'num'   => $num
		];

		$orders[] = $item;
	}
	$json = json_encode($orders);
	setcookie('orders', $json, time()+5*60*60*1000, '/');
	header('Location: product.php');
	die();
}