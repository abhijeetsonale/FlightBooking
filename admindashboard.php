<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<title></title>
</head>
<body style="background-color:black">
<table class=table-striped>


<?php 

	session_start();
	$x=$_SESSION['auname'];
	echo "<h2 align=center><font color=red>Welcome".ucfirst($x)."</h2>";
	echo "<h5 align=right><a href=adminsignout.php>Signout</a></h5>";
	
	echo "<tr><td><font size=5><a href=addflight.php>Add Flight</a>";
echo "<tr><td><font size=5><a href=displayflight.php>Remove Flight</a>";
echo "<tr><td><font size=5><a href=flightnumtimerep.php>ViewFlight NumberWise and FlightTimeWiseReport</a>";



?>
</table>
</body>
</html>