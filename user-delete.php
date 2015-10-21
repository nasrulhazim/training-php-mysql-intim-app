<?php 

  $title = 'My Web Application';
  require_once '_include_.php';
  require_once 'controller/check-authorization.php';
  
  $user = query('DELETE FROM `users` WHERE id = '. $_GET['id']);

  // if user not found, redirect to user list
  if(!$user) {
  	$_SESSION['message'] = 'User not found.';
  } else {
    $_SESSION['message'] = 'User has been removed.';
  }

    header('Location: users.php');
?>