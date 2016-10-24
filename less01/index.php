<?php

$number = 42;
$float = 3.14;
$bool = true;
$string = '20 Word!';
define('NAME', 'Antinio');

echo $number . "<br>";
echo $float . "<br>";
echo $bool . "<br>";
echo $string . "<br>";
echo NAME . "<br>";

//var_dump(NAME);
/**************************************************/
echo "<br>";
$str_1 = '«Славная осень! Здоровый, ядреный';
$str_2 = 'Воздух усталые силы бодрит;';
$str_3 = 'Лед неокрепший на речке студеной';
$str_4 = 'Словно как тающий сахар лежит.»';
$str_5 = "<u>Н. А. Некрасов</u>";

echo $str_1 . "<br>" . $str_2 . "<br>" . $str_3 . "<br>" . $str_4 . "<br>" . $str_5;
/**************************************************/
echo "<br>" . "<br>";

echo $float + $string;
/**************************************************/
echo "<br>" . "<br>";
$x = 10;
$y = 15;

echo $x . "<br>" . $y . "<br>";
echo "-----------" . "<br>";
$x = $x + $y;
$y = $x - $y;
$x = $x - $y;

echo $x . "<br>" . $y . "<br>";
