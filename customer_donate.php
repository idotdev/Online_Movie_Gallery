<!DOCTYPE html>
<html>
<head>
	<title>E-WALLET</title>
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<style type="text/css">
.block00 {
  padding: 3px 10px;
  margin-bottom: 3px;
}
body
{
	background-image: url('clou.jpeg');
}
input
{
	border-radius: 5px;
}	
#sub:hover,#bacc:hover
{
	transform: scale(1.02);
	background-color: #E3E3E3;
	cursor: pointer;
}			
h3,h4
{
	font-family: cambria;
}
</style>
<body>
	<h3>If you like the work of any Creators, Feel free to support them.</h3>
	<?php
	session_start();

	$conn = new mysqli('localhost', 'root', '', 'mov_gallery');
	$sql="select cr_name from creator";
	$result=mysqli_query($conn,$sql);

	$i=1;

	while($row = mysqli_fetch_array($result))
	{
		echo "<h4>".$i;
		echo ". ".$row['cr_name']."</h4>";
		$i=$i+1;
	}

	?>

	<form method="post">
	<h3>Enter the Creator name you would like to donate to:</h3>
	<input type="text" id="cr_name" class="block00" name="cr_name">
	<h3>How much would you like to donate to them?</h3>
	<input type="number" id="amount" class="block00" name="amount">
	<input type="submit" id="sub" class="block00" name="submit" value="SUBMIT">
	</form>


	<?php
	ini_set( "display_errors", 0); 
	$c_id=$_SESSION['id'];

	$query = "select * from customer where c_id = '$c_id'";
	$res = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($res);
	$balance = $row['balance'];
	
	if(isset($_POST['submit']))
	{
		$cr_name=$_POST['cr_name'];
		$amount=$_POST['amount'];
		$check = mysqli_query($conn, "select * from creator where cr_name = '$cr_name'");
		if(mysqli_num_rows($check) > 0) 
		{
			if($amount > 0 and $amount <= $balance)
			{
				$sql="UPDATE creator set donations=donations+'$amount' where cr_name='$cr_name'";
				$result=mysqli_query($conn,$sql);
				if($result)
				{
					echo "<script>alert('Thank you for your support!');</script>";
					header("Refresh:0");
				}
				$deduct = "UPDATE customer SET balance=balance-'$amount' WHERE c_id='$c_id'";
				$res_deduct = mysqli_query($conn, $deduct);
			}
			elseif($amount > 0 and $amount > $balance)
			{
				echo "<script>alert('Not enough balance!');</script>";
			}
			elseif($amount <= 0)
			{
				echo "<script>alert('Enter a proper amount to donate!');</script>";
			}
			header("Refresh:0");
		}
		elseif(mysqli_num_rows($check) <= 0)
		{
			echo "<script>alert('Creator does not exist');</script>";
			header("Refresh:0");
		}
	}
	echo "<h4>Current Account balance: ".$balance."</h4>";
	
	?>
</body>
</html>
