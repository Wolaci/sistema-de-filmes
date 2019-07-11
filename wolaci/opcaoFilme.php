<?php 
include 'conn.php';

		// assistir mais tarde
		// assistir agora
		// assistidp
		// nao assistir
$query = $conn->prepare("INSERT INTO user_movies (a) VALUES (?)");
$query->execute([$_POST['a']]);
?>