<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" href="bootstrap.min.css">
	<style>
/*		body{
			background-color: ; 
		}
*/	</style>
</head>
<body>	
<!-- name , genre, year, duration, synopsis -->
<div class="container">
	<form action="movie.php" method="POST" class="form-group row">
		<div class="col mr-3">
			
		Nome <input class="form-control " type="text" name="name" required>
		<br><br>Gênero: 
		<input class="form-control " type="text" name="genre" required >
		<br><br>Ano: <input class="form-control " type="text" name="year" required >
		<br><br>Duração: <input class="form-control " type="text" name="duration" required >
		<br><br>Sinopse: <input class="form-control " type="text" name="synopsis" required >
		</div>
		<!-- <div class="col justify-content-between"> -->
		<input class="form-control " type="submit" value="Enviar" style="margin-top: 10px">
		</div>
	</form>

	</div>
</body>
</html>