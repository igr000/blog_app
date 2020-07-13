
<?php
   include('db_connection.php');

   $blogId = $_GET['id'];

   $blogSql = $conn->prepare('SELECT * FROM blogger WHERE id= :id ');
   $blogSql->bindParam('id', $blogId);
   $blogSql->execute();
   $blog = $blogSql->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="http://localhost/basic_php/blog_app/style.css" rel="stylesheet" />
</head>
<body>
	<div class="content" >
		<h1>Update Blogger</h1>
		
		<form action="update_save.php" method="POST" >
			<input name="id" type="hidden" value="<?= $blog['id'] ?>" />
		
			<div class="form" >
				<div class="form-label">
					<label>Username:</label>
				</div>
				
				<div class="form-input">
					<input name="username" type="text" value="<?= $blog['username'] ?>" />
				</div>			
			</div>
			
			<div class="form" >
				<div class="form-label">
					<label>Password:</label>
				</div>
				
				<div class="form-input">
					<input name="password" type="text" value="<?= $blog['password'] ?>" />
				</div>			
			</div>
			
			<div class="form" >
				<div class="form-label">
					<label>First Name:</label>
				</div>
				
				<div class="form-input">
					<input name="firstName" type="text" value="<?= $blog['first_name'] ?>" />
				</div>			
			</div>
			
			<div class="form" >
				<div class="form-label">
					<label>Last Name:</label>
				</div>
				
				<div class="form-input">
					<input name="lastName" type="text" value="<?= $blog['last_name'] ?>" />
				</div>			
			</div>
			
			<div class="form" >
				<div class="form-label">
					<label>Age:</label>
				</div>
				
				<div class="form-input">
					<input name="age" type="text" value="<?= $blog['age'] ?>" />
				</div>			
			</div>

			<div class="controls" >
				<button type="submit">Update</button>
				<a href="list.php">Cancel</a>
			</div>
		
		</form>

	</div>
	
</body>
</html>
