<?php
// $getUsername = $getPassword = $getFullname = "";

// 	if (isset($_POST['username'])) {
// 		$getUsername = $_POST['username'];
// 	}

// 	if (isset($_POST['password'])) {
// 		$getPassword = $_POST['password'];
// 	}

// 	if (isset($_GET['fullname'])) {
// 		$getFullname = $_GET['fullname'];
// 	}
	

// 	// echo $getUsername.'; '.$getPassword.'; '.$getFullname.'; '.$getOld.'; '.$getGender.'; '.$getEmail.'; '.$getPhonenumber.'; '.$getAddress;

// 	if($getUsername != "" && $getPassword != ""){
// 		header('Location: login.php?username='.$getUsername.'&password='.$getPassword);
// 	}

if(!empty($_GET)){
	$getUsername = $_GET['username'];
	$getAddress = $_GET['address'];
	$getFullname = $_GET['fullname'];

	if ($getUsername != "" && $getFullname != "" && $getAddress != "") {
		setcookie("username", $getUsername, time()+300, '/');
		setcookie("address", $getAddress, time()+300, '/');
		setcookie("fullname", $getFullname, time()+300, '/');

		header("Location: login.php");
		die();
	}
}