<?php

		include ('connection.php');

		$TicketID = $_REQUEST['Ticketid'];

		date_default_timezone_set('Asia/Kuching');
		$LastUpdate = date("Y.m.d h:i:sa ");

		$result = "UPDATE ticket SET ConcertDate='$_POST[date]', ConcertTime='$_POST[Time]', Price='$_POST[newprice]', TicketCount='$_POST[noticket]', LastUpdate='$LastUpdate' WHERE Ticket_ID='$TicketID'";

		

		if(!mysqli_query($connection,$result))
		{
			die(mysqli_error);
		}
		else
		{
			echo "<link type='text/css' rel='stylesheet' href='css/update.css'>";
			echo "<div class='message'><p><strong>Success!.. Ticket Details Updated</strong></p></div>";
			header("refresh:1; url=ViewTicket.php");
		}
?>