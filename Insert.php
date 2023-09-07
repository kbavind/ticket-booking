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

		if($_POST['ticketType'] == 'Normal')
		{
			$price = 188.00;
			$description = 'Normal';
		}

		else if($_POST['ticketType'] == 'Premium')
		{
			$price = 218.00;
			$description = 'Premium';
		}

		else if($_POST['ticketType'] == 'VIP')
		{
			$price = 238.00;
			$description = 'VIP';
		}

		$concertDate = "2021-11-14";
		$concertTime ="17:00:00";

		date_default_timezone_set('Asia/Kuching');
		$LastUpdate = date("Y.m.d h:i:sa ");

		$name = $_POST['ticketID'];

		$target_dir = "ultramusic/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$newname = $name.'.'.$imageFileType;

		$sql = "INSERT INTO ticket (Ticket_ID, ConcertDate, ConcertTime, TicketType, Price, Description, TicketCount, LastUpdate, extension) VALUES ('$_POST[ticketID]', '$concertDate', '$concertTime', '$_POST[ticketType]', '$price', '$description', '$_POST[ticketN]', '$LastUpdate', '$imageFileType')";


		if(mysqli_query($connection, $sql))
		{
			echo "<div class='message'><p><strong>Success!.. New Record inserted</strong></p></div>";	
			header("refresh:1; url=ViewTicket.php");
		}
		else
		{
			die(mysqli_connect_error() . mysqli_connect_errno() );
		}


		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
		}

		// Check if file already exists
		if (file_exists($target_file)) {
		  echo "Sorry, file already exists.";
		  $uploadOk = 0;
		}

		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 1000000000) {
		  echo "Sorry, your file is too large.";
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$newname)) {
		    echo "<div class='message'><p><strong>The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.</strong></p></div>";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}
		

?>


		
		


