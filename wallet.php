<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'mov_gallery');

$balance=$_POST['balance'];
$c_id=$_SESSION["id"];

if($balance<=0)
{
	echo 'Please enter a valid amount';
}

else
{
	$sql="UPDATE customer SET balance=balance+'$balance' WHERE c_id='$c_id' ";

	if($conn->query($sql)===TRUE){
	    echo '"E-wallet updated!"';
	}
	else
	{
		echo 'Errorr..';
	}
}

?>