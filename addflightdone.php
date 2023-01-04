<?php 


	$x = "'".$_REQUEST['txtfno']."'";
	$y = "'".$_REQUEST['txtfname']."'";
	$z = "'".$_REQUEST['txtsource']."'";
	$a = "'".$_REQUEST['txtdestination']."'";
	$b = "'".$_REQUEST['txtdistance']."'";
	$c = "'".$_REQUEST['txtamt']."'";
	$d = "'".$_REQUEST['txtdate']."'";
	$e = "'".$_REQUEST['txttime']."'";
	$f = "'".$_REQUEST['txtcapacity']."'";
	
	$connect = mysqli_connect("localhost","root","","ftb");
	$sql="insert into flight (flightno,flightname,source,destination,distance,amount,date,time,capacity)values($x,$y,$z,$a,$b,$c,$d,$e,$f)";

	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header("location:admindashboard.php");








?>