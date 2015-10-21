<?php
// Create & Update

// $username = isset($_REQUEST['username']) ? $_REQUEST['username'] : null;
// above are equivalent to the below one
// if(isset($_REQUEST['username'])) {
//   $username = $_REQUEST['username'];
// } else {
//   $username = null;
// }

$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : null;
$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;
$id = isset($_REQUEST['id']) ? (int) $_REQUEST['id'] : null;

// If request method is post
//     then we know it's process to update or add new record
// else
//     display empty form(for add new record) / filled form (for update)
if($_SERVER['REQUEST_METHOD'] == 'POST') {

  // if id is not empty, 
  //    then it's a process to update the user details
  // else
  //    then it's a process to insert new record
  if(!empty($id)) { 

    $sql = "UPDATE `users` SET 
    `username` = '".$username."',
    `name` = '".$name."',
    ".($password == '******' ? '':'`password` = \''.$password.'\',') ."
    `email` = '".$email."',
    `updated_at` = NOW()
    WHERE `id` = '".$id."'";
    
    $stmt = $conn->prepare($sql);
    $user = $stmt->execute();

  } else {
    $sql = "INSERT INTO `users`
    ( `username`,`name`,`password`,`email`,`created_at`,`updated_at` ) 
    VALUES 
    ( :username, :name, :password, :email, NOW(), NOW())";

    $data = [
      ':username' => $username,
      ':name' => $name,
      ':password' => md5($password),
      ':email' => $email
    ];

    $sth = $conn->prepare($sql);
    $sth->bindParam(':username', $_POST['username']);
    $sth->bindParam(':name', $_POST['name']);
    $sth->bindParam(':password', md5($_POST['password']));
    $sth->bindParam(':email', $_POST['email']);
    
    if($sth->execute()) {
      $user = $conn->lastInsertId();
    } else {
      $user = false;
    }
    //$user = execute($sql, $data);
  }
  
  if($user) {
    if(!empty($id)) {
      $_SESSION['message'] = 'User has been update.';  
    } else {
      $_SESSION['message'] = 'User has been added.';
    }
  } else {
    if(!empty($id)) { 
      $_SESSION['message'] = 'Failed to update user details.';
    } else {
      $_SESSION['message'] = 'Failed to add new user.';  
    }
  }

  header('Location: users.php'); 

} else {
  // if not empty,
  //    we know it's to edit user and need to display the current user details
  if(!empty($id)) {
    $user = fetch('select * from users where id = '.$id);
    $username = $user['username'];
    $name = $user['name'];
    $email = $user['email'];
    $password = '******';
  }
}
