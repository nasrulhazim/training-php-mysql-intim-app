<?php

// check cookie's remember me if exist and enabled,
// redirect to dashboard
if(isset($_COOKIE['auth']) && $_COOKIE['auth']) {
    $_SESSION['auth'] = $_COOKIE['auth'];
    $_SESSION['user'] = [
        'username' => $_COOKIE['username'], 
        'password' => $_COOKIE['password']
    ];
    header('Location: dashboard.php');
}