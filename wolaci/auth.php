<?php 
session_start();

function logged(){
	return $_SESSION['logged'] ?? false;
}

function login($email, $usuario){
	$_SESSION['logged'] = true;
	$_SESSION['email'] = $email;
	$_SESSION['user'] = $user;

	return true;
}

?>