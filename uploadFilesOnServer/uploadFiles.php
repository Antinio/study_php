<?php

$dir = __DIR__ . '/img/';

if (move_uploaded_file($_FILES['userFile']['tmp_name'], $dir . $_FILES['userFile']['name'])){
	echo 'Файл загружен успешно!';
} else {
	echo 'Ошибка! Файл не загружен';
}