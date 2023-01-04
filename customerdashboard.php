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
	$x=$_SESSION['cname'];
	echo "<h2 align=center><font color=red>Welcome&nbsp;&nbsp;".$x."</h2>";
	echo "<h4 align=right><a href=customersignout.php>Signout</a></h4>";
	
	echo "<tr><td><font size=5><a href=searchflight.php>Search Flight</a>";
echo "<tr><td><font size=5><a href=displaybookedflight.php> Mybookings</a>";



?>
</table>
</body>
</html>