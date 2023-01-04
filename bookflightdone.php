<?php 

 


	$x = "'".$_REQUEST['txtfno']."'";
	$y = "'".$_REQUEST['txtfname']."'";
	$z = "'".$_REQUEST['txtsource']."'";
	$a = "'".$_REQUEST['txtdestination']."'";
	$b = "'".$_REQUEST['txtdistance']."'";
	$c = $_REQUEST['txtamt'];
	$d = "'".$_REQUEST['txtdate']."'";
	$e = "'".$_REQUEST['txttime']."'";
	$f = "'".$_REQUEST['txtcname']."'";
	$g = "'".$_REQUEST['txtemail']."'";
	$h = "'".$_REQUEST['txtmno']."'";
	$i = $_REQUEST['txttotal'];
	$j="'".date("Y-m-d")."'";
	session_start();
	$k="'".$_SESSION['cname']."'";
	
	$connect = mysqli_connect("localhost","root","","ftb");
	$sql="insert into booking (fno,fname,source,destination,distance,amt,date,time,cname,email,mno,total,dob)values($x,$y,$z,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j)";
	echo $sql;
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header("location:customerdashboard.php");








?>




