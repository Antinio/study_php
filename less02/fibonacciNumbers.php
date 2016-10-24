<?php

$start = microtime(true);

// Fibonacci function
function fibonacci($f)
{
	if ($f < 3) {
		return 1;
	} else {
		return fibonacci($f - 1) + fibonacci($f - 2);
	}
}

// Enter Fibonacci number
$fib_num = 35;

// Cycle
for ($f = 1; $f <= $fib_num; $f++) {
	echo(fibonacci($f) . ", ");
}
echo("...\n");

$time = microtime(true) - $start;
printf("<br>" . 'Функция отрабатывает %.4F сек.', $time);
