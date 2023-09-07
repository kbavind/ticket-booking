<?php
		include ('connection.php');

		$TicketID = $_REQUEST['Ticketid'];

		$sql = "DELETE FROM ticket WHERE Ticket_ID = '$TicketID'";

		if(mysqli_query($connection,$sql))
		{
			echo "<link type='text/css' rel='stylesheet' href='css/delete.css'>";
			echo "<div class='message'><p><strong>Success!.. Record Deleted</strong></p></div>";
			header("refresh:1; url=ViewTicket.php");
		}	
		else
		{
			echo "<div class='fail'><p><strong>Fail!.. Record not deleted</strong></p></div>";
		}
			
?>