<?php
include('db_connection.php');

$blogSql = $conn->prepare('SELECT * FROM blogger');
$blogSql->execute();
$blogList = $blogSql->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
	<link href="http://localhost/basic_php/blog_app/style.css" rel="stylesheet" />
</head>
<body>
	<div class="content" >
		<h1>Blogger List</h1>
		
		<div class="menu" >
			<a href="create_form.php" >Create Blogger</a>	
		</div>
		
		<table class="tbl" >
			<thead>
				<tr>
					<th>Username</th>
					<th>Password</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Age</th>
					
					<th colspan="2" class="text-center">Action</th>
					
				</tr>
			</thead>
			<tbody>
			    <?php 
                   foreach ($blogList as $blogger):
                ?>
                <tr>
                    <td><?= $blogger['username'] ?></td>
                    <td><?= $blogger['password'] ?></td>
                    <td><?= $blogger['first_name'] ?></td>
                    <td><?= $blogger['last_name'] ?></td>
                    <td><?= $blogger['age'] ?></td>
                    <td><a href="update_form.php?id=<?= $blogger['id']?>"> Updated</a></td>
                    <td><a href="delete_form.php?id=<?= $blogger['id']?>"> Delete</a></td>

                </tr>
                <?php
                endforeach;
                ?>
			</tbody>
		
		</table>
	</div>
	
</body>
</html>
