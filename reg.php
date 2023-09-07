<?php
	include ('connection.php');

	$Name = $_REQUEST['custname'];
	$Pass = $_REQUEST['pass'];
	$phone = $_REQUEST['mobile'];
	$email = $_REQUEST['email'];

	$sql = "INSERT INTO customer (Customer_name, Customer_pass, Customer_phone, Customer_email ) VALUES ('$Name', '$Pass', '$phone', '$email')";

	if($result = mysqli_query($connection,$sql))
	{
		echo "<script>alert('You successfully registered');</script>";
		header("refresh:1; url=UserLogin.php");
	}


?>