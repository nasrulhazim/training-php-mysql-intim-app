<?php 

require_once 'config/database.php';
require_once 'utils/query.php';
require_once 'utils/helpers.php';

$sth = $conn->prepare("select * from users");
$sth->execute();

$result = $sth->fetchAll();

$user = fetch('select * from users where username = "nasrul" and password = md5(\'1234\') ');
var_dump($user);
?>
<!DOCTYPE html>
<html>
<head>
	<title>User list</title>
</head>
<body>
<table border="1" cellpadding="0" cellspacing="2">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($result as $key => $value): ?>
			<tr>
				<td><?= $value['name']; ?></td>
				<td><?= $value['email']; ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
</body>
</html>