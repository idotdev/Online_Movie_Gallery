<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'mov_gallery');
$id=$_GET['id'];
$c_id=$_SESSION["id"];

$query = "SELECT balance from customer where c_id='$c_id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$currB = $row['balance'];

$query = "SELECT * from clips where vid_id = '$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$title = $row['title'];
$price = $row['price'];
$cr_id = $row['cr_id'];

$query = "SELECT * from creator where cr_id = '$cr_id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$name = $row['cr_name'];

if($currB < $price)
{
	echo 'LOW BALANCE.';
}

else
{
	$sql="INSERT INTO purchase (vid_id, cr_id, c_id) VALUES ('$id','$cr_id','$c_id')";
	
	if($conn->query($sql)===TRUE){
		echo "PURCHASED!";

		$sql2="UPDATE customer SET balance=balance-'$price' WHERE c_id='$c_id'";
		$conn->query($sql2);

		$sql3="UPDATE clips set sold=sold+1 where title='$title'";
		$conn->query($sql3);
	}
	else
	{
		echo 'Connection error. Try again..';
		echo("Error description: " . mysqli_error($conn));
	}
}

?>