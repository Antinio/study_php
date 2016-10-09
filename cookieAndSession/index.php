<?php

session_start();

function isUser()
{
	return isset($_COOKIE['auth']);
}

function getUser()
{
	return $_COOKIE['auth'];
}

if (!isUser()){
	header('Location: /form.php');
	exit;
}
?>

<h2>Привет, <?php echo getUser(); ?>!</h2>
<a href="logout.php">Выход</a>
