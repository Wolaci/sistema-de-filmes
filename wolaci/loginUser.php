<?php 
session_start();

include 'auth.php';
include 'conn.php';

global $conn;

try{
	$teste = $conn -> prepare("SELECT * FROM users WHERE email = ? and password = ?");
	$teste -> execute([$_POST['email'],$_POST['password']]);
	$userData = $teste -> fetch(PDO::FETCH_ASSOC);
}catch(Exception $e){
	print_r($e);
}

$email_go= $userData['email'];
$pass_go = $userData['password'];
$id_go = $userData['id'];
if($teste->rowCount() == 1){
	login($email_go, $pass_go, $id_go);
	header('location: home.php'); 

}
else{
	header('location: login.php');
}
?>