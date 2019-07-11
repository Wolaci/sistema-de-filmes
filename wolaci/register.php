<?php 
include 'conn.php';

try{
	$query = $conn -> prepare("SELECT email FROM users WHERE email = ? ");
	$query -> execute([$_POST["email"]]);
	$req = $query -> fetch();
	if($req){
		echo "E-mail já cadastrado no banco, se registre novamente.";
		header('location: index.php?req="E-mail já cadastrado no banco, se registre novamente."');

	}
	else{
			$query = $conn->prepare("INSERT INTO users (name , email, password) VALUES (?, ?, ?)");
  $query->execute([$_POST['name'],$_POST['email'],$_POST['password']]);
	}
}catch(Exception $e){
	print_r($e);
}

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
			<p>Você está registrado, realize seu login</p>
			<a href="login.php">Login</a>
			</div>
		</div>
	</div>
</body>
</html>
