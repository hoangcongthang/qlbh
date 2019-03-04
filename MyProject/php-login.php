<?php

if (!empty($_GET)) {
	$login_username = $_GET['username'];
	$login_add      = $_GET['address'];

	$cookie_username = $cookie_add = "";

	if (isset($_COOKIE['username'])) {
		$cookie_username = $_COOKIE['username'];
	}

	if (isset($_COOKIE['address'])) {
		$cookie_add = $_COOKIE['address'];
	}

	if ($login_username == $cookie_username && $login_add == $cookie_add && $login_username != "" && $login_add != "") {
		setcookie('login_status', 'true', time()+1000, '/');

		header("Location: welcome.php");
		die();
	}
}

if (isset($_COOKIE['login_status']) && $_COOKIE['login_status'] == "true") {
	header("Location: welcome.php");
	die();
}


	