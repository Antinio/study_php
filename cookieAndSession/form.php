<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookies and Sessions</title>
	<link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<?php if (!empty($_SESSION['error'])){
	echo $_SESSION['error'];
	unset($_SESSION['error']);
} ?>
	<form class="contact_form" action="login.php" method="post" name="contact_form">
		<ul>
			<h2>Login form</h2>
			<li>
				<input type="text" name="login" placeholder="Введите Ваше имя" required>
			</li>
			<li>
				<input type="password" name="password" placeholder="Введите Ваш пароль" required>
			</li>
			<li>
				<button class="submit" type="submit">Отправить</button>
			</li>
		</ul>
	</form>
</body>
</html>