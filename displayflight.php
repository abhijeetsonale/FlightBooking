<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body style="background-color:black;">
	<table class="table table-striped">
		<tr class=text-danger><th>Serial Number<th>FlightNumber<th>FlightName<th>Source<th>Destination<th>Distance<th>Amount<th>Date<th>Time<th>Capacity<th>Remove</tr>
<?php
	$connect = mysqli_connect("localhost","root","","ftb");
	$sql="select * from flight";

	$rs=mysqli_query($connect,$sql);
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
		
		echo "<td><a href=removeflight.php?a=$array[0]>Delete</a>";
		echo "<tr>";
	}
	mysqli_close($connect);
	echo "</table><p align=center><a href=admindashboard.php class=btn btn-primary>Dashboard</a>";
?>

</body>
</html>