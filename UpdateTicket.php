<?php
		
		include ('connection.php');

		$TicketID = $_REQUEST['Ticketid'];

		$result = "SELECT * FROM ticket WHERE Ticket_ID='$TicketID'";
		$QueryResult = mysqli_query($connection,$result);

		if(!$result)
		{
			die(mysqli_error);
		}

		else
		{
			echo "<html>";
			echo "<head>";
				echo "<link type='text/css' rel='stylesheet' href='css/updatepage.css'>";
			echo "</head>";

			echo "<body>";

						
			while (($Row = mysqli_fetch_row($QueryResult)))
			{
				echo "<a href='ViewTicket.php'><img src='img/back.png' style='width:40px; height:40px;'></a>";
				echo "<form name='UpdateTicket' action='Update.php' method='POST'>";
				echo "<center><table border='1' style='background-color:silver; color:black; '>
				&nbsp &nbsp &nbsp

					<tr>
						<td colspan='2'><img src='ultramusic/$Row[0].$Row[8]'></td>
					</tr>
					
					<tr class='header'>
						<td >Details</td>
						<td>Update</td>
					</tr>
					
					<tr>
						<td>Ticket ID</td>
						<td><input type='text' name='Ticketid' value='$Row[0]' readonly></td>
					</tr>

					<tr>
						<td>Concert Date</td>
						<td><input type='date' name='date' value='$Row[1]'></td>
					</tr>

					<tr>
						<td>Concert Time</td>
						<td><input type='time' name='Time' value='$Row[2]'></td>
					</tr>

					<tr>
						<td>Ticket Type</td>
						<td>$Row[3]</td>
					</tr>

					<tr>
						<td>Price (RM)</td>
						<td><input type='text' name='newprice'  value='$Row[4]'></td>
					</tr>

					<tr>
						<td>Description</td>
						<td>$Row[5]</td>
					</tr>

					<tr>
						<td>Number of ticket available </td>
						<td><input type='number' name='noticket' value='$Row[6]'></td>
					</tr>

					<tr class='button'>
						<td colspan='2'><input type='submit' value='Update' class='btn'>
					&nbsp
						<input type='reset' value='Clear' class='reset' ></td> 
					</tr>
					</table><center>";
				echo "</form>";
			echo "</body>";
			echo "</html>";
			
			}
		}
		
?>

