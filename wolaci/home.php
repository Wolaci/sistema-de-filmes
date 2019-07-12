<?php 
	include 'conn.php';
	include 'auth.php';
	$dados=$conn->prepare('SELECT * FROM movies');
	$dados->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="bootstrap.min.css">
		    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body style="background-color: #bbdefb blue lighten-4
">

	<div class="container">
	<table class="table">
		<tr>
			<th>Código</th>
			<th>movie_id</th>
			<th>Nome</th>
			<th>Gênero</th>
			<th>Ano</th>
			<th>Duração</th>
			<th>Sinopse</th>
		</tr>
			<?php  foreach ($dados as $dado):?>
		<tr>
				<td><?=$dado[0]?></td>
				<td><?=$dado[1]?></td>
				<td><?=$dado[2]?></td>
				<td><?=$dado[3]?></td>
				<td><?=$dado[4]?></td>
				<td><?=$dado[5]?></td>
				<td><?=$dado[6]?></td>
				<td><a href="statusFilme.php?id=<?=$dado[0]?>">Status<a></td>
				<td><a href="editMovie.php?id=<?=$dado[0]?>">editar</a></td>	
		</tr>
			<?php  endforeach; ?>
	</table>
	</div>
	<?php 
		if(!logged()):
	 ?> 

	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
			<p>Cadastre-se e Explore a interface.</p>
			<a class="btn btn-outline-primary" role="button" href="index.php">Clique aqui</a>
			</div>
		</div>
	</div>
<?php else: ?>
<center>	<a class="btn btn-outline-primary" role="button" href="addMovie.php">Adicionar filme</a> </center>
<br>
<center>	<a class="btn btn-outline-primary" role="button" href="editUser.php">Editar seus dados de cadastro</a> </center>
<br>
<center>	<a class="btn btn-outline-primary" role="button" href="logout.php">Sair</a> </center>
 <?php endif; ?> 

	
	
</body>
</htm