<?php
require_once ('DBHelper.php');

// // $sql = 'update students set fullname="B", address="B", email="B@gmail.com" where id = 28';
// $sql  = 'insert into students(fullname, address, email) values ("T1801A", "Detech", "T1801A@gmail.com")';
// $sql1 = 'insert into students(fullname, address, email) values ("T1801M", "Detech", "T1801M@gmail.com")';

// // execute($sql);
// executeList([$sql, $sql1]);

$sql    = 'select * from students';
$result = executeResult($sql);
foreach ($result as $item) {
	echo '<li>'.$item['fullname'].'</li>';
}