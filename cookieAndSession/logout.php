<?php

function logout(){
	unset($_COOKIE['auth']);
	setcookie('auth', '', time()-86400);
}

logout();
header('Location: /form.php');
exit;