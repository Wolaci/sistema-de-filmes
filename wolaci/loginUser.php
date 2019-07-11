<?php 
session_start();

include 'auth.php';
include 'conn.php';

global $conn;

try{
$teste = $conn -> prepare("SELECT email, name, password FROM users WHERE email = ? and password = ?");
$teste -> execute([$_POST['email'],$_POST['password']]);
}catch(Exception $e){
	print_r($e);
}

$email_go= $_POST['email'];
$pass_go = $_POST['password'];

if($teste->rowCount() == 1){
	login($email_go, $pass_go);
	echo "Parabéns, você está logado";
header('location: home.php'); 

}
else{
	header('location: login.php');
}
?>