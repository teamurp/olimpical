<?php 
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'mpit');
	mysqli_query($con, "INSERT INTO notif (olymp_id) VALUES ('{$_POST["olymp_id"]}')");
	header("Location: index.php");
 ?>
