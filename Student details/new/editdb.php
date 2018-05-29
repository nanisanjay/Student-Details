<?php 
$con=mysqli_connect("localhost","root","","student");
$sql="SELECT * FROM reg WHERE Email='$Email' ";
$reg=mysqli_query($con,$sql);
while($row =mysqli_fetch_array($reg))
{
	 $Name = $row['Name'];
	 $Email = $row['Email'];
	 $Mobile = $row['Mobile'];
	 $Password = $row['Password'];
}       

	  ?>