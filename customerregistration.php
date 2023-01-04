<?php 

	$a="'".$_REQUEST['txtname']."'";
	$b="'".$_REQUEST['txtano']."'";
	$c="'".$_REQUEST['txtemail']."'";
	$d="'".$_REQUEST['txtmobno']."'";
	$e="'".$_REQUEST['txtuname']."'";
	$f="'".$_REQUEST['txtpass']."'";
	$g="'".$_REQUEST['r']."'";
	$connect=mysqli_connect("localhost","root","","ftb");
	$sql="insert into customer(cname,ano,email,mno,uname,password,gender)values($a,$b,$c,$d,$e,$f,$g)";
	echo $sql;
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header("location:customerlogin.html");



?>