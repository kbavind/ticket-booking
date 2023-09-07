<?php

		include ('connection.php');

		$result = "SELECT * FROM ticket";
		$QueryResult = mysqli_query($connection, $result);

		if(!$result)
		{
			die(mysqli_error);
		}

		else
		{

			echo "<html>";
			echo "<head>";
				echo "<link type='text/css' rel='stylesheet' href='css/ViewTicket.css'>";
				echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
				echo "<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>";
			echo "</head>";

			echo "<body>";
				echo "<br>";
				echo "<center><div style='background-color:blue; width:30%; border:3px solid black; border-radius:12px;'> <h2 style='color:white;'>View Tickets Lists </h2> </div><center>";
				echo "<br><br>";
			echo "<table width='100%' border = '1' class='w3-table w3-striped-centered' >
				<tr class='header'>
					<td>Ticket Picture</td>
					<td> Ticket ID </td>
					<td> Concert Date </td>
					<td> Concert Time </td>
					<td> Ticket Type </td>
					<td> Price </td>
					<td> Description </td>
					<td> Number of ticket available </td>
					<td> Action </td>
				</tr>";

				while (($Row = mysqli_fetch_row($QueryResult)))
				{
					echo "<tr class='data'>";
						echo "<td><img src='ultramusic/$Row[0].$Row[8]' style='width:200px; height:80px;'></td>";
						echo "<td> $Row[0] </td>";
						echo "<td> $Row[1] </td>";
						echo "<td> $Row[2] </td>";
						echo "<td> $Row[3] </td>";
						echo "<td> $Row[4] </td>";
						echo "<td> $Row[5] </td>";
						echo "<td> $Row[6] </td>";
						echo "<td><a href='Booking.php?Ticketid=$Row[0]'><button> Booking </button></a></td>";
					echo "</tr>";	
				}
			echo "</table>";
			echo "</body>";
			echo "</html>";

		}

?>