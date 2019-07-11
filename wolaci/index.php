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
<div class="container">
		<?php 
		 $req=$_GET['req'];
		 echo $req;
	 ?>
	<form action="register.php" method="POST" class="form-group row">
		<div class="col mr-3">
			
		Nome: <input class="form-control " type="text" name="name" required >
		<br><br>E-mail: 
		<input class="form-control " type="text" name="email" required >
		<br><br>Password <input class="form-control " type="password" name="password" required >
		</div>
		<!-- <div class="col justify-content-between"> -->
		<input class="form-control" type="submit" value="Enviar" style="margin-top: 10px">
		</div>
	</form>
	<center><a class="btn btn-outline-primary" role="button" href="home.php">Voltar</a></center>
	<center><a class="btn btn-outline-primary" role="button" href="login.php">Login</a></center>



	</div>
</body>
</html>