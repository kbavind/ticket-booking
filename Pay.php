<?php
		
		include ('connection.php');

		$_cardnumber = $_POST['card'];
		$receiptid = $_POST['receiptid'];

		echo "<style>
			.message
			{
				background-color: #ddffdd;
			  	border-left: 6px solid #4CAF50;
			  	text-align:center;
			}
		</style>";

		echo "<div class='message'><p><strong>You successfully pay for the ticket.. An email will be sent to you.. Thank youuuu!!</strong></p></div>";	
		header("refresh:1; url=ViewTicketCustomer.php");

		$sql = "DELETE FROM receipt WHERE Receipt_ID = '$receiptid'";

		$result = mysqli_query($connection,$sql);
		


		
?>