<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<title></title>
</head>
<body style="background-color:black">
	<h2 align="center"><font color=red>FlightNumber and FlightTime Wise Report</font></h2>
	<form action="flightnumtimerep.php" method="post">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-4"><font color=green>Flight Number</div>
			<div class="col-lg-4"><font color=green>Time of Journey</div>
			<div class="col-lg-2"></div>
		</div>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-4"><input type="text" name="txtdate" class="form-control"></div>
			<div class="col-lg-4"><input type="time" name="txttime" class="form-control"></div>
			<div class="col-lg-2"></div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-4"></div>
			<div class="col-lg-4"><input type="submit" class="btn btn-primary">&nbsp;&nbsp;<a href="admindashboard.php" class="btn btn-primary">Dashboard</a></div>
		</div>
	</form>
	<table class="table table-striped">
		<tr class=text-danger><th>Booking Id<th>FlightNumber<th>FlightName<th>Source<th>Destination<th>Distance<th>Amount/Ticket<th>DateofJourney<th>Time<th>CustomerName<th>Email<th>MobileNumber<th>TotalTicketsBought<th>Dateofbooking</tr>
		<?php
		$a="'".$_REQUEST["txtdate"]."'";
		$b="'".$_REQUEST["txttime"]."'";
	$connect = mysqli_connect("localhost","root","","ftb");
	$sql="select * from booking where fno=$a and time=$b";
	//echo $sql;
	$rs=mysqli_query($connect,$sql);
	$tot=0;
	while($array=mysqli_fetch_array($rs))
	{
		echo "<tr class=text-primary>";
		echo "<td>$array[0]";
		echo "<td>$array[1]";
		echo "<td>$array[2]";
		echo "<td>$array[3]";
		echo "<td>$array[4]";
		echo "<td>$array[5]";
		echo "<td>$array[6]";
		echo "<td>$array[7]";
		echo "<td>$array[8]";
		echo "<td>$array[9]";
		echo "<td>$array[10]";
		echo "<td>$array[11]";
		echo "<td>$array[12]";
		echo "<td>$array[13]";
		$tot=$tot+$array[12];
		echo "</tr>";
	}
echo "</table>";
echo "<table class=table table-striped><tr><th>Vacant Seats<th>Occupied Seats<th><th>Total Capacity";
	$vacant=60-$tot;
	echo "<tr><td>$vacant<td>$tot<td>=<td>60</table>";
	mysqli_close($connect);
	?>
	<br>
	<a href="admindashboard.php" class="btn btn-primary">Dashboard</a>
</body>
</html>