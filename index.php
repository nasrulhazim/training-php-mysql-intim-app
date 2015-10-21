<?php 
    $title = 'My Web Application';
    require_once '_include_.php';
    require_once 'controller/check-cookie.php';
?>

<?php message(); ?>
<?php p(UPLOAD_URL); ?>
<form class="form-signin" method="post" action="login.php">
    <input type="text" class="form-control" name="username" placeholder="Username" required autofocus />
    <input type="password" class="form-control" name="password" placeholder="Password" required/>
    <input type="checkbox" class="form-conrol" name="remember-me">Remember Me
    <button class="btn btn-lg btn-defualt btn-block" type="submit">Log in</button>   
</form>
	
<?php require_once 'templates/footer.php'; ?>