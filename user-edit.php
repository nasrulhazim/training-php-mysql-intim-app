<?php 

  $title = 'My Web Application';
  require_once '_include_.php';
  require_once 'controller/check-authorization.php';
  message();
  $user = fetch('select * from users where id = '. $_GET['id']);

  // if user not found, redirect to user list
  if(!$user) {
  	$_SESSION['message'] = 'User not found.';
  	header('Location: users.php');
  }
?>
<!-- Display user form details -->