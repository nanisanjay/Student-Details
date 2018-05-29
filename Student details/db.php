<?php 
$con=mysqli_connect("localhost","root","","Student");
session_start();
//regdb.php//
if(isset($_POST['reg1']))
{
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Mobile=$_POST['Mobile'];
$Password=$_POST['Password'];
$select=$_POST['select'];
if($Name=='' && $Email==''&& $Mobile==''&& $Password=='')
{
	$msg="Registration failed";
	$mg=urlencode['$msg'];
	header("Location:http://localhost/abc/index.php?message=$msg");
}
else
{
$sql="INSERT INTO reg(Name,Email,Mobile,Password,Role) VALUES ('$Name','$Email','$Mobile','$Password','$select')";
}
$reg=mysqli_query($con,$sql);
if($reg>0)
{
  require'login.php';
}
}
//logindb.php//
elseif(isset($_POST['login']))
{
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$_SESSION['h']=$Email;

$sql="SELECT * FROM reg WHERE Email='$Email' AND  Password='$Password'";
$reg=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($reg))
	{
	if($row['Role']=='0')
	{
		require 'adminprofile.php';
	}
else
{
	require 'profile.php';
}
}
}
//editdb.php//
elseif(isset($_POST['edit']))
{

	require'edit.php';
}
elseif(isset($_POST['update']))
{
	 $Name = $_POST['Name'];
	 $Email = $_POST['Email'];
	 $Mobile = $_POST['Mobile'];
	 $Password = $_POST['Password'];
	$sql="UPDATE reg SET Mobile='$Mobile' ,Name='$Name',Email='$Email',Mobile='$Mobile' ,Password='$Password' WHERE Email='$Email'";
	$reg=mysqli_query($con,$sql);
	require'profile.php';
}
else if(isset($_POST['img_upload']))
	{
		$a=$_SESSION['h'];
		$target_dir = "image/";
		$target_file = $target_dir.basename($_FILES["img"]["name"]);
		$sql="UPDATE reg SET img='$target_file' WHERE Email='$a'";
		mysqli_query($con,$sql);
		move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
		require'edit.php';
		
	}
	else if(isset($_GET['profile']))
	{
    
		require'adminprofile.php';
	}
	else if(isset($_GET['nonverified']))
	{
		require'nonverified.php';
	}
	elseif(isset($_POST['nonverify']))
	{
		$p=$_POST['new'];
		foreach($p as $row)
		{	
		$sql="update reg SET Is_verfied='1' where Uid='$row'";
		$res=mysqli_query($con,$sql);
		}
				require'verified.php';
	}
	
	else if(isset($_GET['verified']))
	{
		require'verified.php';
	}
	elseif(isset($_POST['verify']))
	{
		$q=$_POST['new'];
		foreach($q as $row)
		{
		$sql="update reg SET Is_verfied='0' where Uid='$row'";
		$res=mysqli_query($con,$sql);
		}
		require 'nonverified.php';
	}
elseif(isset($_POST['logout']))
{

	require'login.php';
}?>