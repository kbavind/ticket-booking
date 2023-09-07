<?php
		include('connection.php');
		if(isset($_SESSION['login_user'])){
		$name = $_SESSION['login_user'];
		$sql = "SELECT CustomerID FROM customer WHERE Customer_name = '$name'";
		$result = mysqli_query($connection, $sql);

		while($row = mysqli_fetch_array($result))
		{
			$_SESSION['Custid'] = $row['CustomerID'];
			
		}

		$id = $_SESSION['Custid'];
		
?>
<html>
<head>
	<title> Main interface for user </title>
	<style>
		body
		{
			margin:0;
			padding:0;
		}
		table
		{
			border:3px solid black;
			width:100%;
			height:100%;
		}

		.header
		{
			border:3px solid black;
			width:100%;
			height:10%;
			background-color: lightblue;
		}

		td
		{
			border:3px solid black;
		}

		iframe
		{
			width:100%;
			height:100%;
		}

		img
		{
			float:right;
			float:top;
			width:60px;
			height:60px;
		}

		p
		{
			font-size:20;
			color:black;
		}

		.navigation
		{
			width:9%;
			background-color: lightblue;
			color:black;
		}

		iframe
		{
			background-color: silver;
		}

		p:hover
		{
			background-color: green;
			color:white;
		}
	</style>
</head>

<body>
	<table>
		<tr>
			<?php echo" <td class='header' colspan='2'> <h1>WELCOME TO ULTRAMUSIC	</h1><a href='cart.php?custid=$id' target='content'><img src='img/cart.png'></a></td>"; ?>
		</tr>

		<tr>
			<td class='navigation'><a href="bc.php" target="content"><p><?php echo $name ?></p></a> <a href="ViewTicketCustomer.php" target="content"><p>Ticket Lists</p></a>
									<a href="ViewProfileUser.php" target="content"><p>Profile</p></a>
									<a href="EditUser.php" target="content"><p>Edit Profile</p></a>
									<a href="UserLogout.php" onClick="return confirm('Are you sure you want to log out?');"><p>Logout </p></a>
									</td>
			<td><iframe name="content" src="bc.php"></iframe> </td>
		</tr>
	</table>
</body>
</html>

<?php } ?>

<?php
	if(!isset($_SESSION['login_user']))
	{
		header('Location: UserLogin.php');
	}
?>