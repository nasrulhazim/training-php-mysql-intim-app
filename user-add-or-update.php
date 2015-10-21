<?php 

$title = 'My Web Application';
require_once '_include_.php';
require_once 'controller/check-authorization.php';
require_once 'controller/user-cnu.php';
require_once 'templates/header.php';

?>

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
    <form method="POST" role="form">
      <?php if (!empty($id)): ?>
        <?php h('Edit User',1); ?>
      <?php else: ?>
        <?php h('Add New User',1); ?>
      <?php endif ?>
      <hr>
      <div class="form-group">
        <label for="">Username</label>
        <input value="<?= $username; ?>"  type="text" class="form-control" id="username" name="username" placeholder="Username" required>
      </div>
      
      <div class="form-group">
        <label for="">Name</label>
        <input value="<?= $name; ?>"  type="text" class="form-control" id="name" name="name" placeholder="Name" required>
      </div>

      <div class="form-group">
        <label for="">E-mail</label>
        <input value="<?= $email; ?>"  type="text" class="form-control" id="email" name="email" placeholder="E-mail" required>
      </div>

      <div class="form-group">
        <label for="">Password</label>
        <input value="<?= $password; ?>"  type="password" class="form-control" id="password" name="password" placeholder="Password" required>
      </div>

      <?php if (!empty($id)): ?>
        <input type="hidden" name="id" id="id" value="<?= $id; ?>">
      <?php endif ?>
      
      <a href="users.php" class="btn btn-danger">Cancel</a>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<?php require_once 'templates/footer.php'; ?>