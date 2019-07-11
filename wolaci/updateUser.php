<?php 
	session_start();
	// name, genre, year, duration, synopsis
	include 'auth.php';
	include 'conn.php';
	$query = $conn->prepare("UPDATE users SET name = ? , email = ? , password = ?  WHERE id = ? ");
	$query->execute([$_POST['name'],$_POST['email'],$_POST['password'], $_SESSION['id']]);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>
<div class="container">
		<div class="card mt-5">
			<div class="card-body">
			<p>Seus dados foram editados</p>
			<a class="btn btn-outline-primary" role="button" href="home.php">Ver dados</a>
			</div>
		</div>
	</div>
	
</body>
</html>