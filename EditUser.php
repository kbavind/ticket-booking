<?php
		
		include ('connection.php');

		$id = $_SESSION['Custid'];

		$result = "SELECT * FROM customer WHERE CustomerID = '$id'";
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
				echo "<form name='EditProfile' action='Edit.php' method='POST'>";
				echo "<center><table border='1' style='background-color:silver; color:black; '>
				&nbsp &nbsp &nbsp
					
					<tr class='header'>
						<td >Customer Details</td>
						<td>Update</td>
					</tr>
					
					<tr>
						<td>Customer ID</td>
						<td><input type='text' name='customerid' value='$Row[0]' readonly></td>
					</tr>

					<tr>
						<td>Customer Name</td>
						<td><input type='text' name='namecust' value='$Row[1]'></td>
					</tr>

					<tr>
						<td>Customer Password</td>
						<td><input type='text' name='pass' value='$Row[2]'></td>
					</tr>

					<tr>
						<td>Customer mobilephone</td>
						<td><input type='number' name='mobile' value='$Row[3]'></td>
					</tr>

					<tr>
						<td>Customer email</td>
						<td><input type='text' name='email' value='$Row[4]'></td>
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