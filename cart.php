<?php
		
		include ('connection.php');

		$custID = $_REQUEST['custid'];

		$result = "SELECT * FROM receipt WHERE CustomerID='$custID'";
		$QueryResult = mysqli_query($connection,$result);

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
				echo "<center><div style='background-color:blue; width:30%; border:3px solid black; border-radius:12px;'> <h2 style='color:white;'>Cart </h2> </div><center>";
				echo "<br><br><br>";
			echo "<table width='100%' border = '1' class='w3-table w3-striped-centered'>
				<tr class='header'>
					<td> Receipt ID </td>
					<td> Customer ID </td>
					<td> Ticket ID </td>
					<td> Concert Date </td>
					<td> Concert Time </td>
					<td> Ticket Type </td>
					<td> Price per unit </td>
					<td> Quantity </td>
					<td> Total Price </td>
					<td> Action </td>
				</tr>";

				while (($Row = mysqli_fetch_row($QueryResult)))
				{
					echo "<tr class='data'>";
						echo "<td> $Row[0] </td>";
						echo "<td> $Row[1] </td>";
						echo "<td> $Row[2] </td>";
						echo "<td> $Row[3] </td>";
						echo "<td> $Row[4] </td>";
						echo "<td> $Row[5] </td>";
						echo "<td> $Row[6] </td>";
						echo "<td> $Row[7] </td>";
						echo "<td> $Row[8] </td>";
						echo "<td> <a href='Payment.php?receiptid=$Row[0]'><button> Check Out </button></a> </td>";
					echo "</tr>";	
				}
			echo "</table>";
			echo "</body>";
			echo "</html>";
			
			}
		
?>

