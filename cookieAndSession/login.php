<?php

session_start();

function checkLoginPassword($login, $password)
{
	$_SESSION['error'] = 'Пустой логин или пароль!';
	$users = ['admin' => '123', 'user' => '123456'];
	return isset($users[$login]) && $password == $users[$login];
}

function login($login)
{
	setcookie('auth', $login, time()+86400);
}

//assert(true == checkLoginPassword('admin', '123'));
//assert(false == checkLoginPassword('admi', '123'));
//assert(false == checkLoginPassword('admin', '1123'));

if (empty($_POST['login']) || empty($_POST['password'])){
	$_SESSION['error'] = 'Неверный логин или пароль';
	header('Location: /form.php');
	exit;
}

$login = $_POST['login'];
$password = $_POST['password'];

if (!checkLoginPassword($login, $password)){
	header('Location: /form.php');
	exit;
}

login($login);
header('Location: /index.php');
exit;