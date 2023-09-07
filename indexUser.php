<?php
	include('connection.php');
	

	$act = $_REQUEST['act'];

	if($act == "login")
	{
		session_start();
		$username = $_REQUEST['user'];
		$password = $_REQUEST['password'];
		$_SESSION['login_user'] = $username;
		$sql = "SELECT Customer_name FROM customer WHERE Customer_name='$username' AND Customer_pass='$password'";

		$query = mysqli_query($connection,$sql);
			if(mysqli_num_rows($query) != 0)
		{
			header('Location: UserInterface.php');
		}
		else
		{
			
			echo "<script language='javascript' type='text/javascript'>alert('Username and password invalid'); window.history.back(-1);</script>";
		}
	}
?>