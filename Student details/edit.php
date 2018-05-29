<?php 
$con=mysqli_connect("localhost","root","","Student");
$id=$_SESSION['h'];
$sql="SELECT * FROM reg WHERE Email='$id'";
$reg=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($reg))
{
	 $Name = $row['Name'];
	 $Email = $row['Email'];
	 $Mobile = $row['Mobile'];
	 $Password = $row['Password'];
	  $img=$row['img'];
}       
?>
<html>
<head>
<link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
</head>
<body >
<div class="container" style="margin-left:20px;margin-top:50px;font-family:Times New Roman">
<form action="db.php" method="post" class="col-sm-6">
<div class="well col-sm-6" style="margin-left:200px">
<h1 ><b>&nbsp&nbsp&nbsp  EditPage</b></h1>
<div class=" form-group">
<h4><b>Name :<input type="text" class="form-control" id="Name" name="Name" placeholder="Enter your name" value="<?php echo "$Name"; ?>"></b></h4>
</div>
<div class="form-group">
<h4><b>Email :<input type="email" class="form-control"  id="Email" name="Email" placeholder="Enter your email" value="<?php echo "$Email"; ?>"></b></h4>
</div>
<div class="form-group">
<h4><b>Mobile :<input type="text" class="form-control" id="Mobile" name="Mobile" placeholder="Enter your mobile number" value="<?php echo "$Mobile"; ?>"></b></h4>
</div>
<div class="form-group">
<h4><b>Password :</b><input type="password" class="form-control" id="Password"  name="Password" placeholder="Enter your password" value="<?php echo "$Password"; ?>"></h4>
</div>
<br>
<div class="form-group">
<input type="Submit" value="Update" name="update" class="btn btn-primary active form-control">
</div>
</form>  
</div>
<div class="col-sm-2">
<form action="db.php" method="post" enctype="multipart/form-data">
        <br><br><br>
       <img src="<?php echo $img;?>" height="400" width="400" style="margin-top:-50px"><br>
      <b>Select image to upload:</b><br>
        
    <input type="file" name="img" class="btn btn-primary" > <br>
    <input type="submit" value="Upload Image" name="img_upload" class="btn btn-primary">
	
</form>
</div>
</body>
</html>