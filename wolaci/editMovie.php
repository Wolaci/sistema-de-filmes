<?php 
	include 'conn.php';
	include 'auth.php';
	$id = $_GET['id'];
	$edit=$conn->prepare('SELECT * FROM movies WHERE id = ?');
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
	<form action="updateMovie.php"  method="POST">
		<input type="hidden" name="id" value="<?= $editar['id'] ?>">
		
		<div class="row">
			<div class="col">
				<label>Nome: </label>
				<input type="text" name="name" value="<?= $editar['name'] ?>">
			</div>
			<div class="col">
				<label>Gênero </label>
				<input type="text" name="genre" value="<?= $editar['genre'] ?>">
			</div>
		</div>
		
		<div class="row">
			<div class="col">
				<label>Ano: </label>
				<input type="text" name="year" value="<?= $editar['year'] ?>">
			</div>
			<div class="col">
				<label>Duração </label>
				<input type="text" name="duration" value="<?= $editar['duration'] ?>">
			</div>	
		</div>	
		

		<div class="row">
			<div class="col">
				<label>Sinopse </label>
				<input type="text" name="synopsis" value="<?= $editar['synopsis'] ?>">
			</div>

		<input class="btn btn-outline-primary" role="button" type="submit" value="editar dados">
	</form>
</div>
</body>
</html>