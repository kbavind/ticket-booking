<?php
		include('connection.php');
		

		session_destroy();
		unset($_SESSION['login_user']);
		unset($_SESSION['Custid']);
		header('Location: UserLogin.php');
?>