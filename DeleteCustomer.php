<?php
		include ('connection.php');

		$customerid = $_REQUEST['Customerid'];

		$sql = "DELETE FROM customer WHERE CustomerID = '$customerid'";

		if(mysqli_query($connection,$sql))
		{
			echo "<link type='text/css' rel='stylesheet' href='css/delete.css'>";
			echo "<div class='message'><p><strong>Success!.. Record Deleted</strong></p></div>";
			header("refresh:1; url=ViewCustomer.php");
		}	
		else
		{
			echo "<div class='fail'><p><strong>Fail!.. Record not deleted</strong></p></div>";
		}
			
?>