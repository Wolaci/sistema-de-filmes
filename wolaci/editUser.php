<?php 
	include 'conn.php';
	include 'auth.php';
	$id = $_GET['id'];
	$edit=$conn->prepare('SELECT * FROM users WHERE id = ?');

	print_r($edit);
	$edit->execute([$id]);
	$editar = $edit->fetch(PDO::FETCH_ASSOC);
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
	<form action="editar.php"  method="POST">
		<input type="hidden" name="id" value="<?= $editar['id'] ?>">
		
		<div class="row">
			<div class="col">
				<label>Nome: </label>
				<input type="text" name="name" value="<?= $editar['name'] ?>">
			</div>
			<div class="col">
				<label>E-mail </label>
				<input type="text" name="email" value="<?= $editar['email'] ?>">
			</div>
		</div>
		
		<div class="row">
			<div class="col">
				<label>Password </label>
				<input type="password" name="password" value="<?= $editar['password'] ?>">

		<input class="btn btn-outline-primary" role="button" type="submit" value="editar dados">
	</form>
</div>
</body>
</html>