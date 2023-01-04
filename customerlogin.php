<?php
	$username=$_REQUEST['txtuname'];
	$password=$_REQUEST['txtpass'];
	//echo "$username $password";
	$connect = mysqli_connect("localhost","root","","ftb") or die("connection failed");
	$rs=mysqli_query($connect,"select uname,password from customer") or die("connection failed");
	$flag=0;
	while ($array=mysqli_fetch_array($rs))
	 {
		if ($array[0]==$username && $array[1]==$password)
		 {
			$flag=1;
			break;
		}
	}
	mysql_close($connect);
	if($flag==1)
	{
		session_start();
		$_SESSION['cname']=$username;
		header("location:customerdashboard.php");
	}
	else
	{
		header("location:customerlogin.html");
	}



?>