<?php
		include ('connection.php');

		$result = "SELECT * FROM booking";
		$QueryResult = mysqli_query($connection, $result);

		if(!$result)
		{
			die(mysqli_error);
		}

		else
		{
			echo "<html>";
			echo "<head>";
				echo "<link type='text/css' rel='stylesheet' href='css/ViewBooking.css'>";
			echo "</head>";
			echo "<body>";
			echo "<center><div style='background-color:blue; width:30%; border:3px solid black; border-radius:12px;'> <h2 style='color:white;'>View Booking Lists </h2> </div><center>";
			echo "<br><br><br>";
			echo "<table width='100%' border = '1' style='text-align:center' >
				<tr class='header'>
					<td> Booking ID </td>
					<td> Customer ID </td>
					<td> Ticket ID </td>
					<td> Ticket Type </td>
					<td> Quantity</td>
					<td> Price per unit</td>
					<td> Last Update </td>
				</tr>";

				while (($Row = mysqli_fetch_row($QueryResult)))
				{
					echo "<tr class='detail'>";
						echo "<td> {$Row[0]} </td>";
						echo "<td> {$Row[1]} </td>";
						echo "<td> {$Row[2]} </td>";
						echo "<td> {$Row[3]} </td>";
						echo "<td> {$Row[4]} </td>";
						echo "<td> {$Row[5]} </td>";
						echo "<td> {$Row[6]} </td>";
					echo "</tr>";	
				}
			echo "</table>";
			echo "</body>";
			echo "</html>";

		}

?>