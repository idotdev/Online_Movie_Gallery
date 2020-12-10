<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
<style type="text/css">
.block0 {
  padding: 6px 12px;
  margin-bottom: 3px;
}	

body
{
	background-image: url('clou.jpeg');
}
input
{
  border-radius: 5px;
  padding: 2.3px;
}  
button
{
  border: 2px solid grey;
  border-radius: 10px;
}
button:hover
{
  transform: scale(1.02);
}
h3,h4
{
	font-family: cambria;
	padding: 2px 6px;
}
</style>	
</head>
<body>
	<form method="post">
	<h3>ADMIN MENU</h3>
	<button class=block0 name="view_cr">VIEW CREATOR DETAILS</button>
	<br>
	<button class=block0 name="view_c">VIEW CUSTOMER DETAILS</button>
	<br>
	<button class=block0 name="del_cr">DELETE CREATORS</button>
	<br>
	<button class=block0 name="del_c">DELETE CUSTOMERS </button>
	<br>
	<button class=block0 name="logout">LOGOUT </button>
	</form>	

<?php

$x=$_GET['x'];

if($x!='pass')
{
	header('location: base.php?xx=69');
}

if(isset($_POST['view_c']))
{
	header('location: view_customer.php');
}

if(isset($_POST['view_cr']))
{
	header('location: view_creator.php');
}

if(isset($_POST['logout']))
{
	header('location: index.php');
}

?>
</body>
</html>
