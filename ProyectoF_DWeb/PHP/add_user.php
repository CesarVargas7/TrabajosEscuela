<?php

include "config.php";

if($_POST) {
	$nombre = $_POST['name'];
	$apellido = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "INSERT INTO `register`(`name`, `lastName`, `email`, `password`) VALUES ('".$name."','".$lastName."','".$email."','".$password."')";

	$query = mysqli_query($conn,$sql);
	if($query) {
		session_start();
		$_SESSION['name'] = $name;
		header('Location: login.php');
	}
	else{
		echo "Algo salió mal";
	}

}
?>