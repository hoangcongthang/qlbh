<?php 
	require_once ('manager.php'); 

	if(empty($_SESSION['fullname']))
	 {
	 	header('location: login.php');
	 }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>WELCOME</title>
	<link rel="stylesheet" type = "text/css" href="style.css">
</head>
<body>
	<div class = "header">
		<h2>WELCOME</h2>
	</div>
	
	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
			<div class="error success">
				<h3>
					<?php 
						echo $_SESSION['success'];
					?>
				</h3>
			</div>
		<?php endif ?>
		<?php if (isset($_SESSION["fullname"])): ?>
			<p>Xin chào <strong><?php echo $_SESSION['fullname']; ?></strong></p>
			<p><a href="login.php" style="color: red;">Logout</a></p>
		<?php endif ?>
	</div>
	

</body>
</html>