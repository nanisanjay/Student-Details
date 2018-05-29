<?php 
   
  
  $sql="SELECT * FROM reg WHERE Is_verfied='1'";
    $reg=mysqli_query($con,$sql);
	
	?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<title>Admin-profile</title>
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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 2px solid black;
    text-align: left;
    padding: 8px;
}
</style>
</head>
<body  background="image\15.jpg" style="font-family:Times New Roman">
<h1 style="text-align:center"> Admin Page</h1>
<ul>
<li id="xyz"> <a href="db.php?nonverified">Non-Verified User</a></li>
<li id="xyz" class="active" style="background-color:white"><a href="db.php?verified">Verified User</a></li>
<li><a href="db.php?profile">Profile</a></li>
<li>Logout</li>
</ul>
<form action="db.php" method="POST">
<input type="submit" name="verify" class="btn btn-primary" value="Non-Verified">
<table style="width:100%">
<tr>
<th><input type="checkbox" class="style1"></th> 
<th>Uid</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Password</th>
<th>Role</th>
</tr>
<?php
while($row=mysqli_fetch_array($reg))
{
echo"<tr>";
echo"<td><input type='checkbox' name='new[]' value=".$row['uid']." class='style'></td>";
echo"<td>".$row['uid']."</td>";
echo"<td>".$row['Name']."</td>";
echo"<td>".$row['Email']."</td>";
echo"<td>".$row['Mobile']."</td>";
echo"<td>".$row['Password']."</td>";
echo"<td>".$row['Role']."</td>";
echo"</tr>";
}
?>

</table>
</form>
<script>
	$('input[type="checkbox"].style1').click(function(){$(".style").prop('checked', $(this).prop('checked'));});
</script>
</body>
</html>