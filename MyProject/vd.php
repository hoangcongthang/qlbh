<html>
<body>
<form action="functioncalling.php">
    <input type="text" name="txt" />
    <input type="submit" name="insert" value="insert" onclick="insert()" />
    <input type="submit" name="select" value="select" onclick="select()" />
</form>

<?php

//khai bào hằng. 2 cách :
const BASE_URL = 'facebook.com';
define('PI', 3.14);

echo BASE_URL;
echo PI;

function select(){
   echo "The select function is called.";
}
function add($x, $y){
   return $x + $y;
}

$ketqua = add(1, 2);
echo $ketqua;

$a = "123";
$a.= "45";
echo $a;

$c = "1";

$z = $a + $c;

echo $z;

?>

</body>
</html>