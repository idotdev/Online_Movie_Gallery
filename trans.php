<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'mov_gallery');

$title=$_POST["title"];
$cr_id=$_POST["cr_id"];
$year=$_POST["year"];
$price=$_POST["price"];
$type=$_POST["type"];

$uni=$_SESSION["id"];
$uni2=$_SESSION["name"];

$query="SELECT balance from customer where c_id='$uni'";
$result=mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

$currB=$row['balance'];

if($currB < $price)
{
	echo 'LOW BALANCE.';
}

else
{
	$sql="INSERT INTO purchase VALUES ('$title','$year','$type','$cr_id','$price','$uni','$uni2')";

	if($conn->query($sql)===TRUE){
	    echo "PURCHASED!";

	    $sql2="UPDATE customer SET balance=balance-'$price' WHERE c_id='$uni' ";
	    $conn->query($sql2);

	    $sql3="UPDATE artwork set sold=sold+1 where title='$title' ";
	    $conn->query($sql3);
	}
	else
	{
		echo 'Connection error. Try again..';
	}
}

?>