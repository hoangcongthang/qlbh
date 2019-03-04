<?php
	session_start();
	$fullname = '';
	$errors = array();

	//connect to the database
	$db = mysqli_connect("localhost", "root", "", "asm");

	if(isset($_POST['register']))
	{
		$fullname = $_POST['fullname'];
		$password = $_POST['password'];
				
		$sql    = "SELECT * FROM users WHERE fullname = '$fullname'";
		$result = mysqli_query($db, $sql);

		if(mysqli_num_rows($result) > 0)
		{
			array_push($errors, "Tên tài khoản này đã tồn tại");
		}

		if(empty($fullname))
		{
			array_push($errors, "Tên tài khoản là trường bắt buộc!");
		}
		
		if(empty($password))
		{
			array_push($errors, "Mật khẩu là trường bắt buộc!");
		}

		if(count($errors) == 0)
		{ 
			$query = "INSERT INTO users (fullname, password) 
					VALUES ('$fullname','$password')";
			mysqli_query($db, $query);		

			$_SESSION['fullname'] = $fullname;
			header('location: login.php');
		}
	}



	if(isset($_POST['login']))
	{
		$fullname = $_POST['fullname'];
		$password = $_POST['password'];

		if(empty($fullname))
		{
			array_push($errors, "Tên tài khoản là trường bắt buộc!");
		}

		if(empty($password))
		{
			array_push($errors, "Mật khẩu là trường bắt buộc!");
		}

		if(count($errors) == 0)
		{
			$sql = "SELECT * FROM users WHERE fullname = '$fullname' AND password = '$password'";
			$result = mysqli_query($db, $sql);
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['fullname'] = $fullname;
				$_SESSION['success'] = "Đăng nhập thành công";
				header('location: welcome.php');
			}
			else
			{
				array_push($errors, "Tên tài khoản / Mật khẩu chưa chính xác !!!");
			}
		}
	}

	if (isset($_GET['logout'])) 
	{
		session_destroy();
		header('location: login.php');
	}
?>