<?php
		
		include ('connection.php');

		$ReceiptID = $_REQUEST['receiptid'];

		$result = "SELECT * FROM receipt WHERE Receipt_ID='$ReceiptID'";
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

						
			while (($Row = mysqli_fetch_array($QueryResult)))
			{
				echo "<form name='Payment' action='Pay.php' method='POST'>";
				echo "<center><table border='1' style='background-color:silver; color:black; '>
				&nbsp &nbsp &nbsp
					
					<tr class='header'>
						<td >Details</td>
					</tr>
					
					<tr>
						<td><input type='hidden' name='receiptid' value=$Row[Receipt_ID]></td>
					</tr>	
					<tr>
						<td>Ticket ID : $Row[Ticket_ID] </td>
					</tr>

					<tr>
						<td>Concert Date : $Row[ConcertDate]</td>

					</tr>

					<tr>
						<td>Concert Time : $Row[ConcertTime] </td>
					</tr>

					<tr>
						<td>Ticket Type : $Row[TicketType] </td>
					</tr>

					<tr>
						<td>Price per unit : RM$Row[Price] </td>
					</tr>

					<tr>
						<td>Quantity : $Row[quantity] </td>
					</tr>

					<tr>
						<td>Total Price : RM$Row[totalprice] </td>
					</tr>

					<tr>

					</tr>

					<tr>

					</tr>

					<tr>
						<td>Payment </td>
					</tr>

					<tr>
						<td>Please enter your debit/credit card number
						<input type='number' name='card' placeholder='1234567890123456' ></td>
					</tr>

					<tr>
						<td><input type='submit' value='Pay'></td>
					</tr>
					</table><center>";
				echo "</form>";
			echo "</body>";
			echo "</html>";
			
			}
		}
		
?>

