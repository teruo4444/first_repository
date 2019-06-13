<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
if (is_numeric($num1) && is_numeric($num2)) {
	echo $num1 + $num2;
} else {
	echo "数字以外が含まれています";
}
?>
