<?php
    include ('connection.php');
?>

<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/showprofile.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
	// Load google charts
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	// Draw the chart and set the chart values
	function drawChart() {
	  var data = google.visualization.arrayToDataTable([
		 ['TicketType','quantity'],

     <?php
      $sql = "SELECT * FROM booking";
      $result = mysqli_query($connection, $sql);

      $countNormal = 0;
      $countPremium = 0;
      $countVIP = 0;

      while($row = mysqli_fetch_array($result))
              {

                if($row['TicketType'] == 'Normal')
                {
                  $countNormal = $countNormal + $row['quantity']; 
                }
                else if($row['TicketType'] == 'Premium')
                {
                  $countPremium = $countPremium + $row['quantity'];
                }

                else if($row['TicketType'] == 'VIP')
                {
                  $countVIP = $countVIP + $row['quantity'];
                }
              }

      echo "['Normal Ticket',$countNormal],";
      echo "['Premium Ticket',$countPremium],";
      echo "['VIP Ticket',$countVIP]";

      ?>
 
	]);

	  // Optional; add a title and set the width and height of the chart
	  var options = {'title':'Ticket sold by the type of ticket', 'width':430, 'height':300, is3D: true,};

	  // Display the chart inside the <div> element with id="piechart"
	  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
	  chart.draw(data, options);
	}
	</script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
            ['TicketType','TicketCount'],
         <?php 
            $sql2 = "SELECT * FROM ticket";
            $result = mysqli_query($connection,$sql2);

           while($row = mysqli_fetch_array($result))
          {
            echo "['".$row['TicketType']."', '".$row['TicketCount']."'],";
          }

         ?>
        ]);

        var options = {
          width: 400, height: 250,
          legend: { position: 'none' },
          chart: {
            title: 'Ticket uploaded',
            subtitle: 'Number of ticket based on ticket type' },
          axes: {
            x: {
              0: { side: 'top', label: 'Ticket Type'} // Top x-axis.
            }
          },
          bar: { groupWidth: "40%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

  <style>
    .main
    {
      
      height:100%;
    }

    .chart
    {
      background-color: white;
      border:3px solid black;
      width:33%;
      border-radius: 8px;
    }

    .bar
    {

      float:right;
      width:65%;
      height:98%;
      border-radius: 8px;
    }

    .content
    {
      background-color: white;
      position: fixed;
      bottom: 10px;
      float:right;
      border:3px solid black;
      width:33%;
      height:45%;
      border-radius: 8px;
    }

    .sales
    {
      float:left;
      border-radius: 8px;
      width:50%;
      height:50%;
    }

    .Customer
    {
      position: fixed;
      bottom: 10px;
      float:left;
      width:32%;
      height:45%;
      border-radius: 8px;
    }

    .Admin
    {
      background-color: white;
      float:right;
      border:3px solid black;
      width:45%;
      height:99%;
      border-radius: 8px;
      text-align: center;
    }

    .total
    {
      background-color: white;
      margin: auto;
      width: 30%;
      height:26%;
      border-radius: 12px;
      padding: 110px;
      text-align: center;
      border:3px solid black;
    }

    img
    {
      width:50px;
      height:50px;
    }

    .totalC
    {
      background-color: white;
      margin: auto;
      width: 30%;
      height:20%;
      border-radius: 12px;
      padding: 110px;
      text-align: center;
      border:3px solid black;
    }

    button
    {
      width:30%;
      height:6%;
      border-radius: 8px;
    }

    button:hover
    {
      background-color: green;
      color:white;
    }
  </style>
  </head>
<body>
  <div class="main">
      <div class="bar">
        <div class="sales">
          <div class="total">
              <center><img src="img/sales.png"></center>
              <center><h3> Total Sales </h3></center>
              <?php
              $sql = "SELECT quantity,Price FROM booking";
              $result = mysqli_query($connection,$sql);

              $total = 0;

              while($row = mysqli_fetch_array($result))
              {
                $total = $total + ($row['quantity']*$row['Price']);
              }
              echo "<center><p>= RM $total <p><center>" ;


              ?>
          </div>
        </div>

        <div class="Admin">
        <?php
          $sql = "SELECT * FROM admin";
          $result = mysqli_query($connection,$sql);
       

        echo "<h3>Admin Details</h3>";
        echo "<br><br><br>";

        while($row = mysqli_fetch_array($result))
        {
          echo "Admin ID = ". $row['Admin_ID'];
          echo "<br><br>";
          echo "Admin Username = ". $row['Username'];
          echo "<br><br>";
          echo "Admin Email = ". $row['Email'];
        }

         ?>
         <br><br><br><br><br><br><br><br>
         <img src="img/ticket.png">
         <h3> Total ticket sold </h3>
         <?php
          $sql2 = "SELECT quantity FROM booking";
          $result2 = mysqli_query($connection,$sql2);

         $totalC = 0;

          while($row2 = mysqli_fetch_array($result2))
          {
            $totalC = $totalC + $row2['quantity'];
          }
          echo "<center><p>= $totalC units <p><center>" ;
         ?>

         <br><br><br>
         <a href="dashboard.php" target="_blank"><button>Print </button></a>

        </div>

        <div class="Customer">
          <div class="totalC">
           <center><img src="img/Customer.png"></center>
            <center><h3> Total Customer </h3></center>
              <?php
              $sql = "SELECT CustomerID FROM customer";
              $result = mysqli_query($connection,$sql);

              $count = 0;

              while($row = mysqli_fetch_array($result))
              {
                $count = $count + 1;
              }
              echo "<center><p>= $count customers<p><center>" ;              


              ?>
          </div>
        </div>

        
      </div>
      <div class="content" id="top_x_div""></div>
			<div class="chart" id="piechart"></div>
      
  </div>
</body>
</html>