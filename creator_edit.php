<!DOCTYPE html>
<html>
<head>
	<title>Account Details</title>
</head>
<body>
<style type="text/css">
.block0 {
  padding: 6px 12px;
  margin-bottom: 3px;
}
body
{
	background-image: url('clou.jpeg');
}
h3
{
	font-family: cambria;
}
button
{
  border: 2.5px solid darkgrey;
  border-radius: 8px;
  font-size: 16px;
  font-family: cambria;
}
button:hover
{
  transform: scale(1.02);
  background-color: #E3E3E3;
}		
</style>

	<?php

	session_start();

	$x=$_SESSION["id"];
	$y=$_SESSION["name"];

	$con = new mysqli('localhost', 'root', '', 'mov_gallery');
	$query="select * from creator where cr_id='".$x."'";
	$result=mysqli_query($con,$query);

	$row = mysqli_fetch_assoc($result);
	{
		echo'<form method="post">';
		echo'<h3>CREATOR NAME:</h3><input type="text" class=block0 name="new_cname" value='.$row['cr_name'].'></input>';  
		echo'<br>';
		echo'<h3>GENDER:</h3><input type="text" class=block0 name="new_gender" value='.$row['gender'].'></input>';  
		echo'<br>';
		echo'<h3>COUNTRY:</h3><input type="text" class=block0 name="new_country" value='.$row['country'].'></input>';  
		echo'<br>';
		echo'<h3>PHONE NUMBER:</h3><input type="text" class=block0 name="new_phone" value='.$row['phone'].'></input>'; 
		echo'<br>';
		echo'<br>';
		echo'<input class=block0 name="sub" type="submit">';
		echo'</form>';    	
	}
	?>

	<?php

	if(isset($_POST['sub']))
	{
		$new_cname=$_POST['new_cname'];
		$new_gender=$_POST['new_gender'];
		$new_country=$_POST['new_country'];
		$new_phone=$_POST['new_phone'];

		$query2="update creator set cr_name='$new_cname',gender='$new_gender',country='$new_country',phone='$new_phone' where cr_id='$x'";
		$result2=mysqli_query($con,$query2);
		if($result2)
		{
			header("refresh:0.01; url=creator_lobby.php?x=$x&y=$new_cname");
			echo'<script>alert("Details successfully updated!")</script>';
		}
		

	}

	?>



</body>
</html>