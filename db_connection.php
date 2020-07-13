<?php
	$serverName = 'localhost';
	$userName = 'dev';
	$password = 'devops';
	$dataBase = 'blog_app';
	
	try {
		$conn = new PDO('mysql:host=' . $serverName . '; dbname=' . $dataBase, $userName, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	} catch (PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}
	
	$pageContext = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

?>