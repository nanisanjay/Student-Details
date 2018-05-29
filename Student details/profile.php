<?php 
$E=$_SESSION['h'];
$sql="SELECT * FROM reg WHERE Email='$E' ";
$reg=mysqli_query($con,$sql);
while($row =mysqli_fetch_array($reg))
{
	 $Name = $row['Name'];
	 $Email = $row['Email'];
	 $Mobile = $row['Mobile'];
	 $Password = $row['Password'];
	 $img=$row['img'];
	 $select=$row['Role'];
}    
	  ?>
<html>
<head>
<title>Admin-profile</title>
<link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body  background="image\15.jpg" style="font-family:Times New Roman">
</ul>
<h1 style="margin-left:400px;margin-top:100px">Welcome <?php echo "$Name"; ?></h1>
<div class="container col-sm-4"style="margin-top:50px;margin-left:400px;border:2px solid black;background-color:white">
<h3>
<?php
	if($select=="2")
		echo "Welcome Student" ;
	else
		echo "Welcome Teacher" ;
?>
</h3>
<form action="db.php" method="POST">
 <img src="<?php echo $img;?>" height="100" width="100" style="margin-top:10px"><br>
<label>Name:-<b><?php echo "$Name"; ?></b></label><br>
<label>Email:-<b><?php echo "$Email"; ?></b></label><br>
<label>Mobile:-<b><?php echo "$Mobile"; ?></b></label><br>
<label>Password:-<b><?php echo "$Password"; ?></b></label><br>
<input type="submit" class="btn btn-primary" name="edit" value="EDIT">
<a href="login.php"><input type="submit" class="btn btn-primary" name="logout" value="LOGOUT"></a>

</form>
</div>
</body>
</html>