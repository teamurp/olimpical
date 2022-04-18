<?php 
	session_start();
	$con = mysqli_connect('Jino.ru', 'j32021264', '4uTXa8bYv', 'j26533641');
	mysqli_query($con, "INSERT INTO notif (olymp_id) VALUES ('{$_POST["olymp_id"]}')");
	header("Location: index.php");
 ?>