<?php

function dateConverter($dayNumber, $monthNumber){

	if (($dayNumber == 0) || ($dayNumber > 31) || ($monthNumber > 12)){
		return "Некорректно введён номер месяца или дня! Номер месяца должен быть от 1 до 12, дня от 1 до 31  включительно!";
	}
	if (($dayNumber > 28) && ($monthNumber == 2)){
		return "В феврале 28 дней! А как сделать проверку на 29-й день я ещё не нагуглил)))";
	}
	switch ($monthNumber){
		case 1:
			$month = "Январь";
			break;
		case 2:
			$month = "Февраль";
			break;
		case 3:
			$month = "Март";
			break;
		case 4:
			$month = "Апрель";
			break;
		case 5:
			$month = "Май";
			break;
		case 6:
			$month = "Июнь";
			break;
		case 7:
			$month = "Июль";
			break;
		case 8:
			$month = "Август";
			break;
		case 9:
			$month = "Сентябрь";
			break;
		case 10:
			$month = "Октябрь";
			break;
		case 11:
			$month = "Ноябрь";
			break;
		case 12:
			$month = "Декабрь";
			break;
		default:
			$month = "Неверный месяц!";
	}
	return $dayNumber . ' ' . $month;
}

echo dateConverter(29,2);