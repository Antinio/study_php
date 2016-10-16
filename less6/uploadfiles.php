<?php

/* Каталог в который мы будем принемать файлы */
$uploaddir = './less6/files/';
$uploadfile = $uploaddir.basename($_FILES['uplosdfile']['name']);

/* Копируем файл из каталога для времменого хранения файлов */
if (copy($_FILES['uplosdfile']['tmp_name'], $uploadfile)){
	echo "<h3>Файл успешно загружен на сервер!</h3>>";
} else {
	echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";
	exit;
}

// Выводим информацию о загруженном файле: !!!TEST!!!
echo "<h3>Информация о загруженном на сервер файле: </h3>";
echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['uploadfile']['name']."</b></p>";
echo "<p><b>Mime-тип загруженного файла: ".$_FILES['uploadfile']['type']."</b></p>";
echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['uploadfile']['size']."</b></p>";
echo "<p><b>Временное имя файла: ".$_FILES['uploadfile']['tmp_name']."</b></p>";