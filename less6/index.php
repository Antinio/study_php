<?php

require 'scripts.php';

?>

<html>
<head>
	<title>Файлы директории</title>
</head>
<body>
<h2>Файлы из папки <?php echo "img"; ?></h2>
	<p><?php echo readDirectoryFiles() ?></p>
</body>
</html>

