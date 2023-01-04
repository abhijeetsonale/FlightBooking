<?php 

	$connect = mysqli_connect("localhost","root","","ftb");
	$x= $_REQUEST['a'];
	$sql="delete from flight where sno=$x";

	$rs=mysqli_query($connect,$sql);
	mysqli_close($connect);
	header("location:displayflight.php");

?>