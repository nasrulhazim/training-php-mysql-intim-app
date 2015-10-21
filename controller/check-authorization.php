<?php

if(!isset($_SESSION['auth'])) {
    $_SESSION['auth'] = false;
    $_SESSION['message'] = 'Go away hackers!';
    header('Location: index.php');
}