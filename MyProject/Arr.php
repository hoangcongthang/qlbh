<?php

//khai báo mảng rỗng
// cách 1
$arr1 = array();

//cách 2
$arr2 = [];


// Adđ phần tử vào mảng
//cách 1
array_push($arr1, 1);
array_push($arr, "sdfsd");

//cách 2
$arr2[] = 2;
$arr2[] = "sdfsd";

//lấy phần tử trong mảng
echo $arr2[0];
var_dump($arr2);

for($i = 0; $i < count($arr2); $i++){
	echo $arr2[$i].'</br>'; //the br xuong dong
}

//xóa phần tử trong mảng
//cách 1
unset($arr2[2]);

for($i = 0; i < count($arr2); $i++){
	if(isset($arr2[$i])){
		echo $arr2[$i].'</br>';
	}
}

//cách 2
array_splice($arr2, 1, 5);

for($i = 0; i < count($arr2); $i++){
	if(isset($arr2[$i])){
		echo $arr2[$i].'</br>';
	}
}

//II mảng nâng cao
