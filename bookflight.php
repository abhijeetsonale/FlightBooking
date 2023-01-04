<?php
  $x="'".$_REQUEST["a"]."'";
  $connect = mysqli_connect("localhost","root","","ftb");
  $sql="select * from flight where sno=$x";

  $rs=mysqli_query($connect,$sql);
  $array=mysqli_fetch_array($rs);
  //print_r($array);
  session_start();
  $c ="'".$_SESSION['cname']."'";
  //echo $x;
  $con = mysqli_connect("localhost","root","","ftb");
  $sql1="select * from customer where uname=$c";

  $rs1=mysqli_query($connect,$sql1);
  $array1=mysqli_fetch_array($rs1);
  //print_r($array1);
  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

	  <body style="background-color: black;">
<form action="bookflightdone.php">
<div class="container">
 <br><center><h2><span class="text-primary"> Book Flight</h2></span></center>
  
    <br><div class="form-group">
      <div class="row">
        <div class="col-lg-4">
      <label for="fname"><span class="text-primary">Flight Number<sup><font color="red">*</font></sup></label></span>
    </div>
    <div class="col-lg-4">
      <label for="mname"><span class="text-primary">Flight Name<sup><font color="red">*</font></sup></label></span>
    </div>
    <div class="col-lg-4">
      <label for="lname"><span class="text-primary">Source<sup><font color="red">*</font></sup></label></span>
    </div>
  </div>
      <div class="row">
        <div class="col-lg-4">
      <input type="text" class="form-control"  placeholder="" name="txtfno" value="<?php echo $array[1];?>">
      <p id="fname"></p>
    </div>
        <div class="col-lg-4">
      <input type="text" class="form-control"  placeholder="" name="txtfname" value="<?php echo $array[2];?>">
      <p id="fname"></p>
    </div>
            <div class="col-lg-4">
      <input type="text" class="form-control"  placeholder="" name="txtsource" value="<?php echo $array[3];?>">
      <p id="fname"></p>
    </div>

    

</div>
<div class="form-group">
      <div class="row">
        <div class="col-lg-4">
          <b><span class="text-primary">Destination<sup><font color="red">*</font></sup></span></b>
          <input type="text" class="form-control"  placeholder="" name="txtdestination" value="<?php echo $array[4];?>">
      <p id="ano"></p>  
            </div>
        <div class="col-lg-4">
         <b><span class="text-primary">Distance<sup><font color="red">*</font></sup></span></b>
             <input type="text" class="form-control"  placeholder="" name="txtdistance" value="<?php echo $array[5];?>">
      <p id="email"></p>
                      </div>
        <div class="col-lg-4">
      <label for="mobileno"><span class="text-primary">Amount<sup><font color="red">*</font></sup></label></span>
      <input type="text" class="form-control" id="mobno" placeholder="" name="txtamt" value="<?php echo $array[6];?>">
      <p id="mobileno"></p>
    </div>
  </div>
</div>
      <div class="row">
        <div class="col-lg-4">
      <label for="fname"><span class="text-primary">Date<sup><font color="red">*</font></sup></label></span>
    </div>
    <div class="col-lg-4">
      <label for="mname"><span class="text-primary">Time<sup><font color="red">*</font></sup></label></span>
    </div>
    <div class="col-lg-4">
      <label for="mname"><span class="text-primary">Capacity<sup><font color="red">*</font></sup></label></span>
    </div>
  </div>
<div class="row">
        <div class="col-lg-4">
      <input type="date" class="form-control"  placeholder="" name="txtdate" value="<?php echo $array[7];?>">
      <p id="fname"></p>
    </div>
        <div class="col-lg-4">
      <input type="time" class="form-control"  placeholder="" name="txttime" value="<?php echo $array[8];?>">
      <p id="fname"></p>
    </div>
            <div class="col-lg-4">
      <input type="text" class="form-control"  placeholder="" name="txtcapacity" value="60" readonly>
      <p id="fname"></p>
    </div>
<div class="row">
        <div class="col-lg-4">
      <label for="fname"><span class="text-primary">Customer Name<sup><font color="red">*</font></sup></label></span>
    </div>
    <div class="col-lg-4">
      <label for="mname"><span class="text-primary">Email<sup><font color="red">*</font></sup></label></span>
    </div>
    <div class="col-lg-4">
      <label for="lname"><span class="text-primary">Mobile Number<sup><font color="red">*</font></sup></label></span>
    </div>
  </div>
    <div class="row">
        <div class="col-lg-4">
      <input type="text" class="form-control"  placeholder="" name="txtcname" value="<?php echo $array1[1];?>">
      <p id="fname"></p>
    </div>
        <div class="col-lg-4">
      <input type="text" class="form-control"  placeholder="" name="txtemail" value="<?php echo $array1[3];?>">
      <p id="fname"></p>
    </div>
            <div class="col-lg-4">
      <input type="text" class="form-control"  placeholder="" name="txtmno" value="<?php echo $array1[4];?>">
      <p id="fname"></p>
    </div>

    

</div>

</div>
<div class="row">
        <div class="col-lg-4">
      <label for="fname"><span class="text-primary">Total Tickets<sup><font color="red">*</font></sup></label></span>
    </div>
</div>
<div class="row">
        <div class="col-lg-4">
<select name="txttotal" class="form-control">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
    </div>
</div>
<br><br>
<div class="row">
  <div class="col-lg-4"></div>
  <div class="col-lg-4">
 <button type="submit" class="btn btn-primary">SUBMIT</button>&nbsp;&nbsp;<a href="customerdashboard.php" class="btn btn-primary">Dashboard</a>
</div>
</div>
  </form>
</div>



</body>
</html>