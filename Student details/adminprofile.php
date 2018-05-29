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
   $page=' ';
	if(isset($_GET['page']))
	{
		$page=$_GET['page'];
	}
	  ?>
<html>
<head>
<title>Admin-profile</title>
<link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
<style>
ul
{
background-color:lightcoral;
text-decoration:none;
border:1px solid black;
margin-left:50px;
padding:30px;
}
li
{
display:block;
display:inline;
margin-left:60px;
}
a
{
text-decoration:none;
color:black;
}
li a:hover
{
color:blue;   
}




#xyz
{
border-right:2px solid black;
padding:30px;
margin-left:50px;
}
</style>
</head>
<body  background="image\15.jpg" style="font-family:Times New Roman">
<h1 style="text-align:center"> Admin Page</h1>
<ul>
<li id="xyz"><a href="db.php?nonverified">Non-Verified User</a><li>
<li id="xyz"><a href="db.php?verified">Verified User</a></li>
<li id="xyz" <?php if ($page=="Profile") echo 'class="active"';?> style="background-color:white"><a href="db.php?profile">Profile</a></li>
<a href="login.php"><li>Logout</a></li>
</ul>
<h1 style="margin-left:400px;margin-top:100px">Welcome <?php echo "$Name"; ?></h1>
<div class="container col-sm-4"style="margin-top:50px;margin-left:400px;border:2px solid black;background-color:white">
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