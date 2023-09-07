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
				echo "<a href='ViewTicketCustomer.php'><img src='img/back.png' style='width:40px; height:40px;'></a>";
				echo "<center><div style='background-color:blue; width:30%; border:3px solid black; border-radius:12px;'> <h2 style='color:white;'>Booking </h2> </div><center>";
				echo "<form name='Booking' action='Book.php' method='POST'>";
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
						<td><input type='date' name='date' value='$Row[1]' readonly></td>
					</tr>

					<tr>
						<td>Concert Time</td>
						<td><input type='time' name='Time' value='$Row[2]' readonly></td>
					</tr>

					<tr>
						<td>Ticket Type</td>
						<td><input type='text' name='TicketType' value='$Row[3]' readonly></td>
					</tr>

					<tr>
						<td>Price (RM)</td>
						<td><input type='text' name='newprice'  value='$Row[4]' readonly></td>
					</tr>

					<tr>
						<td>Description</td>
						<td><input type='text' name='desc' value='$Row[5]' readonly</td>
					</tr>

					<tr>
						<td>Number of ticket available </td>
						<td><input type='number' name='noticket' value='$Row[6]' readonly></td>
					</tr>

					<tr>
						<td>Quantity </td>
						<td><input type='number' name='quantity'></td>

					</tr>
					<tr class='button'>
						<td colspan='2'><input type='submit' name='book' value='Book' class='btn'></td> 
					</tr>
					</table><center>";
				echo "</form>";
			echo "</body>";
			echo "</html>";
			
			}
		}
		
?>


