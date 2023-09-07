<?php
		include ('connection.php');
				
		echo "<style>
			.message
			{
				background-color: #ddffdd;
			  	border-left: 6px solid #4CAF50;
			  	text-align:center;
			}
		</style>";

		$ticketid = $_POST['Ticketid'];
		$tickettype = $_POST['TicketType'];
		$quantity = $_POST['quantity'];
		$price = $_POST['newprice'];
		$totalprice = $quantity*$price;

		date_default_timezone_set('Asia/Kuching');
		$LastUpdate = date("Y.m.d h:i:sa ");
		$bookingdate = date("Y.m.d h:i:sa ");
		$concertDate = "2021-11-14";
		$concertTime ="17:00:00";

		$custid = $_SESSION['Custid'];


		$sql = "INSERT INTO booking (Customer_ID, Ticket_ID, TicketType, quantity, Price, DateBook, LastUpdate) VALUES ('$custid', '$ticketid', '$tickettype', '$quantity', '$price', '$bookingdate','$LastUpdate')";


		if(mysqli_query($connection, $sql))
		{
			echo "<div class='message'><p><strong>Booking Success!!</strong></p></div>";
			echo "<div class='message'><p><strong>Please go to cart to proceed with your payment. Thank you</strong></p></div>";	
			header("refresh:1; url=ViewTicketCustomer.php");
		}
		else
		{
			die(mysqli_connect_error() . mysqli_connect_errno() );
		}

		$sql2 = "INSERT INTO receipt (CustomerID, Ticket_ID, ConcertDate, ConcertTime, TicketType, Price, quantity, totalprice, LastUpdate) VALUES ('$custid', '$ticketid', '$concertDate', '$concertTime','$tickettype', '$price', '$quantity', '$totalprice ','$LastUpdate')";
		$result = mysqli_query($connection,$sql2);

		$sql3 = "SELECT TicketCount FROM ticket WHERE Ticket_ID = '$ticketid'";
		$result = mysqli_query($connection, $sql3);

		$newTicketN = 0;
		$newN;
		while($row = mysqli_fetch_array($result))
		{
			$newTicketN = $row['TicketCount'];
		}

		$newN = $newTicketN - $quantity;

		$sql4 = "UPDATE ticket SET TicketCount='$newN' WHERE Ticket_ID = '$ticketid'";
		$result1 = mysqli_query($connection,$sql4);
?>