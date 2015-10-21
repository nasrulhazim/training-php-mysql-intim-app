<?php 

  $title = 'My Web Application';
  require_once '_include_.php';
  require_once 'controller/check-authorization.php';
  message();
  $users = fetchAll('select * from users');
?>

  <div class="btn-group pull-right">
    <a href="dashboard.php" class="btn btn-primary">Home</a>
    <a href="logout.php" class="btn btn-primary" >Logout</a>
  </div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
		<?php h('User List',1); ?>
		<hr>
		<a href="user-add-or-update.php" class="btn btn-success btn-sm pull-right">&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
		<table class="table table-hover table-condensed">
			<thead>
				<tr>
					<th>Username</th>
					<th>Name</th>
					<th>Email</th>
					<th>&nbsp;</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $key => $value): ?>
					<tr>
						<td><?= $value['username']; ?></td>
						<td><?= $value['name']; ?></td>
						<td><?= $value['email']; ?></td>
						<td><a class="btn btn-primary btn-xs" href="user-add-or-update.php?id=<?= $value['id']; ?>">Edit</a></td>
						<td><div class="btn btn-danger btn-xs" onclick="confirm_delete(<?= $value['id']; ?>);">Delete</div></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>		
	</div>
</div>


<script type="text/javascript">
	
	function confirm_delete(id) {
		var c = confirm('Are you sure want to delete the user?');

		if(c) {
			window.location = 'user-delete.php?id='+id;
		}
	}
</script>

<?php require_once 'templates/footer.php'; ?>
