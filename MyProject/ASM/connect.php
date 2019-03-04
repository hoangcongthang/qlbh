<?php
	const HOST     = 'localhost';
	const USERNAME = 'root';
	const DATABASE = 'asm';	
	const PASSWORD = '';
	
	
		//connection to database
		$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
		mysqli_set_charset($conn, 'utf8');

		
		//query : insert, update, delete
		//mysqli_query($conn, $sql);

		//close connection
		//mysqli_close($conn);
	
