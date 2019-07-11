<?php 
include 'conn.php';
include 'auth.php';

global $conn;

// name, genre, year, duration, synopsis

try{
	$query = $conn->prepare("INSERT INTO movies (name , genre, year, duration, synopsis) VALUES (?, ?, ?, ?, ?)");
  $query->execute([$_POST['name'], $_POST['genre'], $_POST['year'], $_POST['duration'], $_POST['synopsis']]);
  // print_r($_POST['name']);
  // print_r($_POST['genre']);
  // print_r($_POST['year']);
  // print_r($_POST['duration']);
  // print_r($_POST['synopsis']);
	}catch(Exception $e){
	print_r($e);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a class="btn btn-outline-primary" role="button" href="home.php">Tela inicial</a>
	<a class="btn btn-outline-primary" role="button" href="addMovie.php">Adicionar um novo filme</a>

</body>
</html>