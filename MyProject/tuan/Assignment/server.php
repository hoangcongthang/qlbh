<?php
	session_start();


	$username = $email = "";
	$errors = array();

	//connect to the database
	$db = mysqli_connect("localhost", "root", "", "t1801a");

	//if the register button is clicked
	if(isset($_POST['register']))
	{
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password_1 = $_POST['password_1'];
		$password_2 = $_POST['password_2'];

		//ensure that form fields are filled properly
		if(empty($username))
		{
			array_push($errors, "Username is required");
		}

		if(empty($email))
		{
			array_push($errors, "email is required");
		}

		if(empty($password_1))
		{
			array_push($errors, "password is required");
		}

		if($password_1 != $password_2)
		{
			array_push($errors, "The two passwords do not match");
		}

		//if there are no errors, save user to database
		if(count($errors) == 0)
		{
			$password = md5($password_1); // encrypt password before storing in database(security) 
			$query = "INSERT INTO users (username, email, password) 
					VALUES ('$username','$email','$password')";
			mysqli_query($db, $query);		
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php'); //redirect to home page
		}
	}

	if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username))
		{
			array_push($errors, "Username is required");
		}

		if(empty($password))
		{
			array_push($errors, "Password is required");
		}

		if(count($errors) == 0)
		{
			$password = md5($password); // encrypt password before comparing with that from database
			$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$result = mysqli_query($db, $query);
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}
			else
			{
				array_push($errors, "wrong username/password combination");
			}
		}
	}

	if (isset($_GET['logout'])) 
	{
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}
?>