<?php


function readDirectoryFiles()
{
	$dir = "img/";
	$files = array_diff(scandir($dir), array('.', '..'));
	echo "Файлы папки $dir" . "<br>";
	foreach ($files as $i => $filename) {
		echo $filename . "<br>";
	}
}

echo readDirectoryFiles();
