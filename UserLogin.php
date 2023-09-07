<html>
<head>
	<title> Login</title>
	<style>
		div
		{
			border:3px solid black;
			padding: 100;
			width:20%;
			border-radius: 12px;
			background-color: lightblue;
		}

		p
		{
			font-size: 20;
			font-family: Arial, Helvetica, sans-serif;
		}

		input
		{
			width:100%;
			height: 7%;
			border-radius: 8px;
		}

		input[type=submit]
		{
			background-color:blue;
			color:white;
			width:100%;
			padding: 10px 20px;
			text-decoration: bold;
			cursor: pointer;
			margin: 2px 2px;
			border-radius:6px;
		}

		input[type=submit]:hover
		{
			background-color: green;
			color:white;
		}

		body
		{
			margin:0;
			padding:0;
			background-image: url("img/LoginBackground.jpg");
			background-size: cover;
		}
	</style>
</head>

<body>
	<form name="login" method="post" action="indexUser.php">
		<br><br><br>
		<center><div>
		<h2> MEMBER LOGIN </h2>
		<input type="hidden" name="act" id="act" value="login">
		<input type="text" name="user" id="user" placeholder="Username">
		<input type="password" name="password" id="password" placeholder="Password">
		<br><br>
		<input type="submit" value="Login">
		<a href="MainPage.html"><p>Click to return to main page </p></a>
		<p>No account?</p><a href="Register.php"><p>Click here</a> to register</p>
		</div></center>
 	</form>
	
</body>
</html>