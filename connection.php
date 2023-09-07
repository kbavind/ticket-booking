<?php
	$servername = "localhost";
	$username = "root";
	$password = "Abc123";
	$db = "ultramusic";

	$connection = mysqli_connect($servername, $username, $password, $db);
	session_start();
?>