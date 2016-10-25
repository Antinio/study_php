<?php

function dateConverter($dayNumber, $monthNumber){
	if ($monthNumber == 0 || $dayNumber == 0){
		return "Параметры не могут равняться нулю!";
	}
	if ($dayNumber > 31){
		return "Число месяца не может быть больше 31!";
	}
	if ($monthNumber > 12){
		return "Номер месяца не может быть больше 12!";
	}
	switch ($monthNumber){
		case 1:
			$monthName = "Января";
			break;
	}
}