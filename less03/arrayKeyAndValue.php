<?php

/**
Создайте массив, в котором ключи - название регионов РФ, значения - массивы городов, входящих в эти регионы.
 * Выведите на экран примерно в таком виде:
 * Московская область:
 * - Клин
 * - Реутов
 */

$regionAndCityArray = [
	'Ленинградская область' => ['Кировск', 'Выборг', 'Гатчина'],
	'Московская область' => ['Мытищи', 'Домодедово', 'Коломна'],
	'Астраханская область' => ['Харабали', 'Ахтубинск', 'Знаменск']
];
	foreach ($regionAndCityArray as $key => $value){
		echo "<ul>" . $key . ':' . "</ul>";
		foreach ($value as $item){
			echo "<li>" . $item . "</li>";
		}
	}