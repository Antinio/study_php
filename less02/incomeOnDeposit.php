<?php

if (isset($_GET['sum'])) $string_sum = htmlentities($_GET['sum']);
if (isset($_GET['term'])) $string_term = htmlentities($_GET['term']);
if (isset($_GET['annual_interest'])) $string_annual_interest = htmlentities($_GET['annual_interest']);

$isEmpty = false;
if ((empty($string_sum)) && (empty($string_term)) && (empty($string_annual_interest))) $isEmpty = true;

if ($isEmpty == false) {
	$sum = (double)$string_sum;
	$term = (double)$string_term;
	$annual_interest = (double)$string_annual_interest;
	$result = $sum * $term * ($annual_interest / 100) + $sum;
} else {
	$sum = 0;
	$term = 0;
	$annual_interest = 0;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Программа расчёта дохода по вкладу</title>
</head>
<body>
<form id="order_form" name="order_form" action="<?php echo $PHP_SELF?>">
	<h1>Форма расчёта дохода по вкладу</h1>
	<p>Сумма вклада($):<input name="sum" type="text" value="<?php echo $sum; ?>"></p>
	<p>Срок вклада(месяцев):<input name="term" type="text" value="<?php echo $term; ?>"></p>
	<p>Процент вклада(%):<input name="annual_interest" type="text" value="<?php echo $annual_interest; ?>"></p>
	<p style="color: red">NOTE: В качестве разделителя используйте точку(.)</p>
	<p><input type="submit" value="Расчитать"></p>
	<p><input type="reset" name="Reset" value="Очистить форму"></p>
</form>
<?php
if ($isEmpty == false) {
	echo 'Сумма вклада по окончанию срока: ' . $result . '$';
}
?>
</body>
</html>