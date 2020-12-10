<?php
ini_set( "display_errors", 0); 
session_start();

$conn = new mysqli('localhost', 'root', '', 'mov_gallery');

$balance=$_POST['balance'];
$d_name=$_POST['d_name'];
$c_id=$_SESSION["id"];

if($balance<=0)
{
	echo 'Please enter a valid amount';
}

else
{
	$sql0="SELECT balance from customer";
	$sql="UPDATE customer SET balance=balance-'$balance' WHERE c_id='$c_id' ";
	$sql2="SELECT cr_name from creator where cr_name='$d_name'";

	$result0=mysqli_query($conn,$sql0);
	$row0=mysqli_fetch_assoc($result0);

	if($row0['balance']<$balance)
	{
		echo 'Low Account Balance';
	}

	else
	{

	$result2=mysqli_query($conn,$sql2);
	$row=mysqli_fetch_assoc($result2);

		if(is_null($row['cr_name']))
		{	
		  echo 'Invalid Creator Name.';
		}
		else
		{	
			if($conn->query($sql)===TRUE){
	        echo '"Transaction successful!"';
			}
			else
			{
			  echo 'Errorr..';
			}
		}
	}

	
}

?>