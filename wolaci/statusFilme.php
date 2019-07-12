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
	<form action="addStatusFilme.php"  method="POST">
		<input type="hidden" name="name" value="<?= $editar['name'] ?>">


				<div class="col">
				<div class="form-group">
  <label for="sel1">Status do Filme</label>
  <select class="form-control" id="sel1">
    <option value="assistir">Assistir</option>
    <option value="naoassistir">Não assistir</option>
    <option value="assistirmaistarde">Assistir mais tarde</option>
    <option value="jaassisti">Assistido</option>
  </select>
</div>
			</div>



		<input class="btn btn-outline-primary" role="button" type="submit" value="enviar">
	</form>
</div>
</body>
</html>