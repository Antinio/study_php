<?php

function readDirectoryFiles()
{
	$dir = __DIR__ . '\img';
	$files = array_diff(scandir($dir), array('.', '..'));
	foreach ($files as $i => $filename) {
		echo "<p>$filename</p>";
	}
}