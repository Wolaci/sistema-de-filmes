<?php 	

include 'auth.php';

if(logged()){
	session_destroy();
}
	header('location: home.php');

 ?>