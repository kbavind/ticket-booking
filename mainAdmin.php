<?php
		include('connection.php');
		if(isset($_SESSION['login_user'])){
		$username = $_SESSION['login_user'];
?>

<html>
<head>
	<title> Admin Main Interface </title>
	<style>

		iframe
		{
			background-image: url("img/Background.jpg");
			background-size: cover;
			width:100%;
			height:100%;
			border-style: none;
		}

		button
		{
			border-radius: 4px;
			float: right;
			font-size: 17;
		}

		body
		{
			margin: 0;
			padding: 0;
		}

		.header
		{
			width:99.2%;
			background-color: blue;
			height:12%;
			padding:5px;
			border-bottom: 2px solid black;	

		}


		.menu
		{
			float:left;
			width:100%;
			height:6%;
			background-color: lightblue;
			border-bottom: 1px solid black;
		}

		.content
		{
			background-color: white;
			color:white;
			height:100%;

		}

		img
		{
			width:20px;
			height:20px;
		}

		button:hover
		{
			background-color: green;
			color: white;
		}

		.user
		{
			width:70px;
			height:60px;
		}

		.button 
		{
		  border-radius: 4px;
		  color: white;
		  text-align: center;
		  transition: all 0.5s;
		  cursor: pointer;
		  margin: 5px;
		  color:black;
		}

		.button span 
		{
		  cursor: pointer;
		  display: inline-block;
		  position: relative;
		  transition: 0.5s;
		}

		.button span:after 
		{
		  content: '\00bb';
		  position: absolute;
		  opacity: 0;
		  top: 0;
		  right: -20px;
		  transition: 0.5s;
		}

		.button:hover span 
		{
		  padding-right: 25px;
		}

		.button:hover span:after 
		{
		  opacity: 1;
		  right: 0;
		}

		.button:active 
		{
		  background-color: #3e8e41;
		  box-shadow: 0 5px #666;
		  transform: translateY(4px);
		}

		.logout 
		{
		  border-radius: 4px;
		  color: white;
		  text-align: center;
		  transition: all 0.5s;
		  cursor: pointer;
		  margin: 5px;
		  color:black;
		}

		.logout span 
		{
		  cursor: pointer;
		  display: inline-block;
		  position: relative;
		  transition: 0.5s;
		}

		.logout span:after 
		{
		  content: '\00bb';
		  position: absolute;
		  opacity: 0;
		  top: 0;
		  right: -20px;
		  transition: 0.5s;
		}

		.logout:hover span 
		{
		  padding-right: 25px;
		}

		.logout:hover span:after 
		{
		  opacity: 1;
		  right: 0;
		}

		.logout:active 
		{
		  background-color: red;
		  box-shadow: 0 5px #666;
		  transform: translateY(4px);
		}

		.logout:hover
		{
			background-color: red;
		}
		

	</style>
</head>

<body>
	<div class="main">
		<div class="header">
			<table>
				<tr>
					<td><img class="user" src="img/user.png"></td>
					<td><h3>Welcome <?php echo $_SESSION['login_user']; ?> </h3>
					<?php echo "<a href='EditAdmin.php?user=$username' target='frame' ><button class='button' style='vertical-align:middle'><span>Edit profile</span></button></a></td>"; 
					?>
				</tr>
			</table>
			
		</div>

		<div class="menu" align="right">
			<a href="Adminlogout.php" onClick="return confirm('Are you sure you want to log out?');"><button class='logout' style='vertical-align:middle'><span><img src="img/logout.png"></span> </button> </a>&nbsp	
			<a href="ViewBookingAdmin.php" target="frame"><button class='button' style='vertical-align:middle'><span> View Booking </span> </button></a>&nbsp
			<a href="ViewCustomer.php" target="frame"><button class='button' style='vertical-align:middle'><span> View Customer Details </span></button></a>&nbsp
			<a href= "ViewTicket.php" target="frame"><button class='button' style='vertical-align:middle'><span>View Ticket </span></button></a>&nbsp
			<a href="Ticket.html" target="frame"><button class='button' style='vertical-align:middle'><span> Ticket </span></button></a>&nbsp
			<a href="dashboard.php" target="frame"><button class='button' style='vertical-align:middle'><span><img src="img/home.png"></span></button></a>&nbsp
		</div>

		<center><div class="content">
			<iframe name="frame" src="dashboard.php"></iframe> 
		</div></center>
	</div>
	
</body>
</html>

<?php } ?>

<?php
	if(!isset($_SESSION['login_user']))
	{
		header('Location: Login.php');
	}
	
?>