<html>
<head>
	<title>Registration for member </title>
	<style>
		body
		{
			background-image: url("img/bc.jpg");
			background-size: cover;
		}
		.main
		{
			background-color: silver;
			text-align: center;
			width:30%;
			margin:30px;
			border-radius: 12px;
			border:3px solid black;
		}

		.detail
		{
			font-size: 20;
		}

		input
		{
			border-radius: 4px;
			height:4%;
			width:70%;
		}

		input[type=submit]:hover
		{
			background-color: green;
			color:white;
		}

		input[type=reset]:hover
		{
			background-color: red;
			color:white;
		}

		input[type=submit]
		{
			width:50%;
		}

		input[type=reset]
		{
			width:50%;
		}
	</style>

	<script>
		<script src="register.js">
			
		</script>
	</script>
</head>

<body>
	<form name="register" action="reg.php" action="post">
	<center><div class="main">
		<div><h2>Registration </h2></div>
		<div class="detail">Name</div>
		<div><input type="text" id="custname" name="custname"></div>
		<br>
		<div class="detail">Password </div>
		<div><input type="password" id="pass" name="pass"></div>
		<br>
		<div class="detail">Confirm Password</div>
		<div><input type="password" id="confirmpass" name="confirmpass"></div>
		<br>
		<div class="detail">Mobile number</div>
		<div><input type="number" id="mobile" name="mobile"></div>
		<br>
		<div class="detail">Customer Email	</div>
		<div><input type="text" id="email" name="email" placeholder="example@gmail.com"></div>
		<br>
		<div><input type="submit" value="Register" onclick="validate()"></div>
		<br>
		<div> <input type="reset" value="Clear"></div>
		<br><br>
	</div></center>
	</form>
</body>
</html>