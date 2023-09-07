<?php

		include ('connection.php');

		$user=$_REQUEST['username'];

		date_default_timezone_set('Asia/Kuching');
		$LastUpdate = date("Y.m.d h:i:sa ");

		$result = "UPDATE admin SET Admin_ID='$_POST[adminid]', Username='$_POST[username]', Password='$_POST[password]', Email='$_POST[email]', LastUpdate='$LastUpdate' WHERE Username='$user'";

		

		if(!mysqli_query($connection,$result))
		{
			die(mysqli_error());
		}
		else
		{
			echo "<link type='text/css' rel='stylesheet' href='css/update.css'>";
			echo "<div class='message'><p><strong>Success!.. Profile Details Updated</strong></p></div>";
			header("refresh:1; url=dashboard.php");
		}
?>