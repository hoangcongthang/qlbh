<?php
// $Username = $Age = $Address = $Email = $PhoneNumber = "";
$_ENV['Username'] = $_ENV['Age'] = $_ENV['Address'] = $_ENV['Email'] =  $_ENV['PhoneNumber'] = '';

	if (isset($_POST['action'])) {
	    switch ($_POST['action']) {
	        case 'add':
	            insert();
	            break;
	        case 'display':
	            select();
	            break;
	        case 'delete':
	            delete();
	            break;    
	    }
	}

	function select() {
		if (isset($_COOKIE['Username'])) {
			$_ENV['Username'] = $_COOKIE['Username'];
		}

		if (isset($_COOKIE['Age'])) {
			$_ENV['Age'] = $_COOKIE['Age'];
		}
		if (isset($_COOKIE['Address'])) {
			$_ENV['Address'] = $_COOKIE['Address'];
		}
		if (isset($_COOKIE['Email'])) {
			$_ENV['Email'] = $_COOKIE['Email'];
		}
		if (isset($_COOKIE['PhoneNumber'])) {
			$_ENV['PhoneNumber'] = $_COOKIE['PhoneNumber'];
		}
	}

	function insert() {
	    if(!empty($_POST))
		{
			$Username = $_POST['Username']; 
			$Age = $_POST['Age'];
			$Address = $_POST['Address'];
			$Email = $_POST['Email'];
			$PhoneNumber = $_POST['PhoneNumber'];

			if ($Username != "" && $Age != "" && $Address != "" && $Email != "" && $PhoneNumber != "") 
			{
				setcookie("Username", $Username, time()+30, '/');
				setcookie("Age", $Age, time()+300, '/');
				setcookie("Address", $Address, time()+30, '/');
				setcookie("Email", $Email, time()+30, '/');
				setcookie("PhoneNumber", $PhoneNumber, time()+30, '/');
			}
		}
	}
	function delete() 
	{
			if (isset($_COOKIE['Username'])) {
				setcookie("Username", '', time()-30, '/');
			}

			if (isset($_COOKIE['Age'])) {
				setcookie("Age", '', time()-30, '/');
			}
			if (isset($_COOKIE['Address'])) {
				setcookie("Address", '', time()-30, '/');
			}
			if (isset($_COOKIE['Email'])) {
				setcookie("Email", '', time()-30, '/');
			}
			if (isset($_COOKIE['Email'])) {
				setcookie("PhoneNumber", '', time()-30, '/');
			}
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form tutorial</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form method="post">
			<div class="form-group">
				<label>User Name</label>
				<input value="<?=$_ENV['Username']?>"  type="text" name="Username" class="form-control" placeholder="Enter User Name">
			</div>
			<div class="form-group">
				<label>Age</label>
				<input value="<?=$_ENV['Age']?>" type="text" name="Age" class="form-control" placeholder="Enter Full Name">
			</div>
			<div class="form-group">
				<label>Address</label>
				<input value="<?=$_ENV['Address']?>" type="text" name="Address" class="form-control" placeholder="Enter Password">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input value="<?=$_ENV['Email']?>" type="text" name="Email" class="form-control" placeholder="Enter Password">
			</div>
			<div class="form-group">
				<label>PhoneNumber</label>
				<input value="<?=$_ENV['PhoneNumber']?>" type="text" name="PhoneNumber" class="form-control" placeholder="Enter Password">
			<br>
			<button type="submit" value="add" class="btn btn-success" name="action">Insert</button>
			<button type="submit" value="display" class="btn btn-success" name="action">Display</button>
			<button type="submit" value="delete" class="btn btn-success" name="action">Delete</button>
		</form>
	</div>
</body>
</html>