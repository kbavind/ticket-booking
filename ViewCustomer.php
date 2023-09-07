<?php
		include ('connection.php');

		$result = "SELECT * FROM customer";
		$QueryResult = mysqli_query($connection, $result);

		if(!$result)
		{
			die(mysqli_error);
		}

		else
		{
			echo "<html>";
			echo "<head>";
				echo "<link type='text/css' rel='stylesheet' href='css/ViewCustomer.css'>";
			echo "</head>";
			echo "<body>";
			echo "<center><div style='background-color:blue; width:30%; border:3px solid black; border-radius:12px;'> <h2 style='color:white;'>View Customers Details </h2> </div><center>";
			echo "<br><br><br>";
			echo "<table width='100%' border = '1' style='text-align:center' >
				<tr class='header'>
					<td> Customer ID </td>
					<td> Customer Name </td>
					<td> Customer Phone number </td>
					<td> Customer Email </td>
					<td> Action </td>
				</tr>";

				while (($Row = mysqli_fetch_row($QueryResult)))
				{
					echo "<tr class='detail'>";
						echo "<td> {$Row[0]} </td>";
						echo "<td> {$Row[1]} </td>";
						echo "<td> {$Row[3]} </td>";
						echo "<td> {$Row[4]} </td>";
						echo "<td><a href=\"DeleteCustomer.php?Customerid=$Row[0]\" onclick=\"return confirm('You sure want to delete this data?')\"><button class='button'><img src='img/delete.png' style='width:20px; height:20px;'></button></a></td>";
					echo "</tr>";	
				}
			echo "</table>";
			echo "</body>";
			echo "</html>";

		}

?>