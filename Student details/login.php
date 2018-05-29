<?php 
   $x="";
if(isset($_GET['message']))
{
	$x=$_GET['message'];
}
?>
<html>
<head>
<link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="loginstyle.css">
</head>
<body >
<div class="container" style="margin-left:400px;margin-top:50px;font-family:Times New Roman">
<form action="db.php" method="post" class="col-sm-6">
<div class="well col-xl-6">
<h1><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Login</b></h1>
<h3><?php echo $x; ?></h3>
<div class="form-group">
<h3><b>Email :</b></h3><input type="Email" class="form-control"  name="Email" placeholder="Enter Your Email">
</div>
<div class="form-group">
<h3><b>Password :</b></h3><input type="Password" class="form-control"  name="Password" placeholder="Enter your password">
</div>
<input type="checkbox" checked="checked"><b>Remember me</b> <br><br>
<div class="form-group">
<input type="Submit" value="Login" name="login" class="btn btn-primary active form-control"><b></b></input>
</div>
<h3><b style="color:black">If you don't have account. please <br><br><a href="index.php"><b >click here </b></a> for registration</h3>
</div>
</form>
</div>
</body>
</html>
