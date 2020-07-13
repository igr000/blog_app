<!DOCTYPE html>
<html>
<head>
	<link href="http://localhost/basic_php/blog_app/style.css" rel="stylesheet" />
</head>
<body>
	<div class="content" >
		<h1>Create Blogger</h1>
		
		<form action="create_save.php" method="POST" >
			<input name="id" type="hidden" value="" />
		
			<div class="form" >
				<div class="form-label">
					<label>Username:</label>
				</div>
				
				<div class="form-input">
					<input name="username" type="text" />
				</div>			
			</div>
			
			<div class="form" >
				<div class="form-label">
					<label>Password:</label>
				</div>
				
				<div class="form-input">
					<input name="password" type="password" />
				</div>			
			</div>
			
			<div class="form" >
				<div class="form-label">
					<label>First Name:</label>
				</div>
				
				<div class="form-input">
					<input name="first_name" type="text" />
				</div>			
			</div>
			
			<div class="form" >
				<div class="form-label">
					<label>Last Name:</label>
				</div>
				
				<div class="form-input">
					<input name="last_name" type="text" />
				</div>			
			</div>
			
			<div class="form" >
				<div class="form-label">
					<label>Age:</label>
				</div>
				
				<div class="form-input">
					<input name="age" type="text" />
				</div>			
			</div>

			<div class="controls" >
				<button type="submit" >Save</button>
				<a href="list.php">Cancel</a>
			</div>
		
		</form>

	</div>
	
</body>
</html>