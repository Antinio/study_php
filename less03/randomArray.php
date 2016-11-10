<?php
/**
 Напишите массив который создаёт массив из $n случайных чисел
 * и возвращает его в отсортированном по убыванию порядке
 */

function randAndSortArray($n)
{
	$arr = [];
	for ($i = 0; $i < $n; $i++) {
		$arr[] = rand(0, $n*2);
	}
	return $arr;
}
$sortArray = randAndSortArray(20);
arsort($sortArray);
//var_dump($sortArray);
foreach ($sortArray as $value){
	echo $value . "\n";
}