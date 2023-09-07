<?php
		
		include ('connection.php');

		$user=$_REQUEST['user'];

		$result = "SELECT * FROM admin WHERE Username='$user'";
		$QueryResult = mysqli_query($connection,$result);

		if(!$result)
		{
			die(mysqli_error());
		}

		else
		{
			echo "<html>";
			echo "<head>";
				echo "<link type='text/css' rel='stylesheet' href='css/Edit.css'>";
			echo "</head>";

			echo "<body>";

						
			while (($Row = mysqli_fetch_row($QueryResult)))
			{
				echo "<a href='dashboard.php'><img src='img/back.png' style='width:40px; height:40px;'></a>";
				echo "<form name='EditProfile' action='EditProfileAdmin.php' method='POST'>";
				echo "<center><table border='1'>
				&nbsp &nbsp &nbsp
					
					<tr class='header'>
						<td >Details</td>
						<td>Update</td>
					</tr>
					
					<tr>
						<td>Admin ID</td>
						<td><input type='text' name='adminid' value='$Row[0]' readonly></td>
					</tr>

					<tr>
						<td>Username</td>
						<td><input type='text' name='username' value='$Row[1]' readonly></td>
					</tr>

					<tr>
						<td>Password</td>
						<td><input type='text' name='password' value='$Row[2]'></td>
					</tr>

					<tr>
						<td>Email</td>
						<td><input type='text' name='email'  value='$Row[3]'></td>
					</tr>


					<tr class='button'>
						<td colspan='2'><input type='submit' value='Edit' class='btn'>
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