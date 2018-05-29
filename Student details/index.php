<?php  
  $y="";
  if(isset($_GET['message']))
  {
	  $y=$_GET['message'];
  }
  ?>
<html>
<head>
<link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
</head>
<body >
<div class="container" style="margin-left:150px;margin-top:50px;font-family:Times New Roman">
<form  action="db.php" method="post" class="col-sm-6">
<div class="well col-sm-12" style="margin-left:200px">
<h1 ><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Registration Form</b></h1>
<h3> <?php echo $y; ?></h3>
<h3 style="color:black">If you are already Register please <a href="login.php"><b> click here</b></a></h3>
<div class="well col-sm-6" style="text-align:center">
<input type="radio"  name="select" value="2" required> <b style="tetx-align:center">Student</b>
</div>
<div class="well col-sm-6" style="text-align:center">
<input type="radio" name="select" value="3" required> <b>Teacher</b>
</div>
<div class=" form-group">
<h4><b>Name :</b><input type="text" class="form-control" id="Name" name="Name" placeholder="Enter your name"></h4>
</div>
<div class="form-group">
<h4><b>Email :</b><input type="email" class="form-control"  id="Email" name="Email" placeholder="Enter your email"></h4>
</div>
<div class="form-group">
<h4><b>Mobile :</b><input type="text" class="form-control" id="Mobile" name="Mobile" placeholder="Enter your mobile number"></h4>
</div>
<div class="form-group">
<h4><b>Password :</b><input type="password" class="form-control" id="Password"  name="Password" placeholder="Enter your password"></h4>
</div>
<div class="form-group">
<h4><b>Confirm Password :</b><input type="password" class="form-control"id="Confirm Password" name="password" placeholder="Confirm your password"></h4>
</div>
<input type="checkbox"  checked="checked">&nbsp<b>Remember me</b><br><br>
<div class="form-group">
<input type="Submit" value="Submit" name="reg1"  class="btn btn-primary active form-control" ></input>
</div>

</form>  
</div>
</body>
</html>