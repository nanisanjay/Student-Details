<?php

$y=$_SESSION['a'];
$sql="SELECT * FROM table1 where uid='$y'";
$reg=mysqli_query($con,$sql);
while($row=(mysqli_fetch_array($reg)))
{
	
	$Name=$row['Name'];
	$Email=$row['Email'];
	$Mobile=$row['Mobile'];
	$Password=$row['Password'];
	$img=$row['img'];
	$role=$row['role'];
	
}

?>

<!DOCTYPE html>
<html>
<head><title>Application form</title>
<link href='https://fonts.googleapis.com/css?family=Baloo Bhai' rel='stylesheet'>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/bootstrap.css" type="text/css" rel="stylesheet" /> 
  <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" /> 
</head>


<body >
<div class="container col-sm-6" style="background-color:crimson; margin-top:100px;margin-left:400px;font-family:Baloo Bhai">

<div class="row-well ">
<h1 align="center">Profile page</h1>
<form class="form-horizontal" role="form" method="post" action="#">
<h3>
<?php
	if($role=="2")
		echo "Welcome Student" ;
	else
		echo "Welcome Teacher" ;
?>
</h3>
<div class="row well">
<div class="form-group">
<label for="Name" class="col-sm-2 control-label">Name:</label>
<div class="col-sm-6">
<?php
	echo "$Name";

?>
</div>

 </div>
<div class="form-group">
<label for="Name" class="col-sm-2 control-label">Email:</label>
<div class="col-sm-6">
<?php

	echo "$Email";
?>
</div>
</div>
<div class="form-group">
<label for="Name" class="col-sm-2 control-label">Mobile No:</label>
<div class="col-sm-6">
<?php
	echo "$Mobile";
?>
</div>
</div>
<div class="form-group">
<label for="Name" class="col-sm-2 control-label">Password:</label>
<div class="col-sm-6">
<?php
	echo "$Password";
?>
</div>
</div>
<div class="form-group">
<div class="col-sm-4" style="margin-top:-150px; margin-left:300px;">
<img src="<?php echo $img;?>" height="130" width="130"><br>
</div>
</div>
<div class="form-group-horizontal col-sm-6">
<form method="post">
    <input type="submit" class="btn btn-active" name="edit" value="EDIT">
    <input type="submit" class="btn btn-danger" name="login" value="LOGOUT">
</div>
</div>

</div>
</form>
</body>
</html>