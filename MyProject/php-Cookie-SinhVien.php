<?php

if(isset($_GET['add'])){
	
	if(!empty($_GET)){
		$getAge = $_GET['age'];
		$getAddress = $_GET['address'];
		$getFullname = $_GET['fullname'];

		if ($getAge != "" && $getFullname != "" && $getAddress != "") {
			setcookie("age", $getAge, time()+300, '/');
			setcookie("address", $getAddress, time()+300, '/');
			setcookie("fullname", $getFullname, time()+300, '/');
		}
	}
}

if(isset($_GET['show'])){


		$getAge = $_GET['age'];
		$getAddress = $_GET['address'];
		$getFullname = $_GET['fullname'];
	
}



