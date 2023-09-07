<?php

		include ('connection.php');

		$custid = $_REQUEST['customerid'];

		date_default_timezone_set('Asia/Kuching');
		$LastUpdate = date("Y.m.d h:i:sa ");

		$result = "UPDATE customer SET Customer_name='$_POST[namecust]', Customer_pass='$_POST[pass]', Customer_phone='$_POST[mobile]', Customer_email='$_POST[email]', LastUpdate='$LastUpdate' WHERE CustomerID='$custid'";

		

		if(!mysqli_query($connection,$result))
		{
			die(mysqli_error);
		}
		else
		{
			echo "<link type='text/css' rel='stylesheet' href='css/update.css'>";
			echo "<div class='message'><p><strong>Success!.. Updated/strong></p></div>";
			//header("refresh:1; url=ViewTicket.php");
		}
?>