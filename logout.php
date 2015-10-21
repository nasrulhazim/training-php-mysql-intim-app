<?php
session_start();

session_unset();

$_SESSION['message'] = 'Thank you for using our app ';

setcookie('auth', null, -1, '/');
setcookie('username', null, -1, '/');
setcookie('password', null, -1, '/');
foreach ($_COOKIE as $key => $value) {
	unset($_COOKIE[$key]);
}

header('Location: index.php');