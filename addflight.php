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

<div class="container">
 <br><center><h2><span class="text-primary"> Add Flight</h2></span></center>
  <form action="addflightdone.php">
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
      <input type="text" class="form-control"  placeholder="" name="txtfno">
      <p id="fname"></p>
    </div>
        <div class="col-lg-4">
      <input type="text" class="form-control"  placeholder="" name="txtfname">
      <p id="fname"></p>
    </div>
            <div class="col-lg-4">
      <input type="text" class="form-control"  placeholder="" name="txtsource">
      <p id="fname"></p>
    </div>

    

</div>
<div class="form-group">
      <div class="row">
        <div class="col-lg-4">
          <b><span class="text-primary">Destination<sup><font color="red">*</font></sup></span></b>
          <input type="text" class="form-control"  placeholder="" name="txtdestination">
      <p id="ano"></p>  
            </div>
        <div class="col-lg-4">
         <b><span class="text-primary">Distance<sup><font color="red">*</font></sup></span></b>
             <input type="text" class="form-control"  placeholder="" name="txtdistance">
      <p id="email"></p>
                      </div>
        <div class="col-lg-4">
      <label for="mobileno"><span class="text-primary">Amount<sup><font color="red">*</font></sup></label></span>
      <input type="text" class="form-control" id="mobno" placeholder="" name="txtamt">
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
      <input type="date" class="form-control"  placeholder="" name="txtdate">
      <p id="fname"></p>
    </div>
        <div class="col-lg-4">
      <input type="time" class="form-control"  placeholder="" name="txttime">
      <p id="fname"></p>
    </div>
            <div class="col-lg-4">
      <input type="text" class="form-control"  placeholder="" name="txtcapacity" value="60" readonly>
      <p id="fname"></p>
    </div>

    

</div>
 <button type="submit" class="btn btn-primary">SUBMIT</button>&nbsp;&nbsp;<a href="admindashboard.php" class="btn btn-primary">Home</a>
  </form>
</div>



</body>
</html>