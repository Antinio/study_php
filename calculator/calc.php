<?php
/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 22.09.2016
 * Time: 22:04
 */

if (@preg_match("|^[-0-9\.A-F]{1,12}$|i", $_POST['firstInput'])) {
	if (preg_match("|^[-0-9\.A-F]{1,12}$|i", $_POST['secondInput'])) {
	}
}

$o = $_POST['operation'];
$a = $_POST['firstInput'];
$b = $_POST['secondInput'];
$result = 'Результат: ';

if ($o == "+") {
	echo $result . $a . ' ' . $o . ' ' . $b . ' = ' . ($a + $b);
} elseif ($o == "-") {
	echo $result . $a . ' ' . $o . ' ' . $b . ' = ' . ($a - $b);
} elseif ($o == "*") {
	echo $result . $a . ' ' . $o . ' ' . $b . ' = ' . ($a * $b);
} elseif ($o == "/" && ($b != 0)) {
	echo $result . $a . ' ' . $o . ' ' . $b . ' = ' . ($a / $b);
} else {
	echo 'Деление на ноль запрещено!';
}
?>
<br/>
<a href="form.html">Back</a>


