<?php
$id = $title = $price = '';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
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
	if(!empty($_POST) && $_POST['amount'] > 0)
	{
		$amount = $_POST['amount'];
	}
	for ($i = 0; $i < count($orders); $i++) {
		if ($orders[$i]['id'] == $id) {
			$orders[$i]['num'] = $orders[$i]['num'] + $amount;
			$isFind            = true;
			break;
		}
	}
	
	if (!$isFind) {
		$item = [
			'id'    => $id,
			'title' => $title,
			'price' => $price,
			'num'   => 1
		];

		$orders[] = $item;
	}
	$json = json_encode($orders);
	setcookie('orders', $json, time()+5*60*60*1000, '/');
	header('Location: product.php');
	die();
}