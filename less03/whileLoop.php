<?php

/**
С помощью цикла while выведите все числа от 1 до 100 нацело делящиеся на 3
 */

$a = 0;

while ($a++ < 100) {
	if ($a % 3 == 0) {
		echo $a . ' ';
	}
}