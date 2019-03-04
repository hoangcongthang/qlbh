<?php
//define connection
const HOST     = 'localhost';
const DATABASE = 'test';
const USERNAME = 'root';
const PASSWORD = '';

function execute($sql) {
	//connection to database
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//query : insert, update, delete
	mysqli_query($conn, $sql);

	//close connection
	mysqli_close($conn);
}

function executeList($list) {
	//connection to database
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//query : insert, update, delete
	foreach ($list as $sql) {
		mysqli_query($conn, $sql);
	}

	//close connection
	mysqli_close($conn);
}

function executeResult($sql) {
	//connection to database
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//query : insert, update, delete
	$result = mysqli_query($conn, $sql);
	$data   = [];
	while ($row = mysqli_fetch_array($result, 1)) {
		// var_dump($row);
		$data[] = $row;
	}
	// var_dump($data);

	//close connection
	mysqli_close($conn);
	return $data;
}