<!DOCTYPE html>
<html>
<head>
	<title>E-WALLET</title>
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<style type="text/css">
.block00 {
  padding: 4px 12px;
  margin-bottom: 3px;
}
body
{
	background-image: url('clou.jpeg');
}
input
{
  border-radius: 10px;
  border: 2px solid grey;
} 
#sub:hover
{
  transform: scale(1.02);
  cursor: pointer;
}
h3,h4
{
	font-family: cambria;
}	
</style>
	<form method="post">
	<h3>HOW WOULD LIKE TO DEPOSIT TO YOUR E-WALLET?</h3>
	<input type="number" id="amount" class="block00" name="amount">
	<input type="submit" id="sub" class="block00" name="submit" value="SUBMIT">
	</form>

	<?php
	session_start();

	$c_id=$_SESSION["id"];	

	$con = new mysqli('localhost', 'root', '', 'mov_gallery');
	$sql2="select balance from customer where c_id='$c_id' ";
	$result2=mysqli_query($con,$sql2);
	$row = mysqli_fetch_assoc($result2);

	echo "<h4>Current Account balance: ".$row['balance']."</h4>";
	
	if(isset($_POST['submit']))
	{
		$amount=$_POST['amount'];
		if($amount > 0) 
		{
			$sql="UPDATE customer SET balance=balance+'$amount' WHERE c_id='$c_id'";
			if(mysqli_query($con, $sql))
			{
				echo "<script>alert('Amount added!');</script>";
				header("Refresh:0");
			}
		}
		elseif($amount <= 0)
		{
			echo "<script>alert('Enter a valid amount');</script>";
		}
	}

	?>

</body>
</html>
