<?php
require_once '_include_.php';

// redirect if not post
if($_SERVER['REQUEST_METHOD'] != 'POST') {
	header('Location: index.php');
}

// redirect if not have password or username
if(!isset($_POST['password']) || !isset($_POST['username'])) {
	header('Location: index.php');	
}

// assumed we have user data to authenticate
// later can migrate using database approach
// $user_list = [
// 	'username' => 'nasrul',
// 	'password' => '1234'
// ];
$username = $_POST['username'];
$password = md5($_POST['password']);
$user = fetch('select * from users where username = "'.$username.'" and password = "'.$password.'"');



// Check if username & password is same in the record,
// if true
	// set $_session['auth'] is true, 
	// assign $_session['user'] info to session,
	// and add a welcome message in $_session['message']
// else
	// set $_session['auth'] is false,
	// set invalid message in $_session['message']
if($user != false) {
	$_SESSION['auth'] = true;
	$_SESSION['user'] = $user;
	$_SESSION['message'] = 'Welcome back ' . $username . '!';

	// check remember me is selected
	// if selected enable cookie
	// if(!empty($_POST['remember-me'])) {
	// 	setcookie('auth', true, time() + (86400 * 30), "/");
	// 	setcookie('username', $user_list['username'], time() + (86400 * 30), "/");
	// 	setcookie('password', $user_list['password'], time() + (86400 * 30), "/");
	// }

	header('Location: dashboard.php');
} else {
	$_SESSION['auth'] = false;
	$_SESSION['message'] = 'Invalid username or password!';
	header('Location: index.php');
}
