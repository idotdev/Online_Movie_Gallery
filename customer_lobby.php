<?php
session_start();

$x=$_GET['x'];
$y=$_GET['y'];


$_SESSION["id"]=$x;
$_SESSION["name"]=$y;

$con = new mysqli('localhost', 'root', '', 'mov_gallery');
$query="select * from customer where c_id='".$x."'";
$result=mysqli_query($con,$query);

$row = mysqli_fetch_assoc($result);
{
    if($row["c_name"]==$y)
    {
        echo "<h3>Welcome, ".$y."</h3>";

    }
    else
    {
        header("location:customer_login.php?fn=empty");
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
</head>
<body>
<style type="text/css">
.block {
  display: block;
  padding: 10px 12px;
  margin-bottom: 3px;
}
.block2 {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 3px;
  margin-top: 20px;
  cursor: pointer;
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
	<form method="post">
		<button name="ex_ar" class="block">EXPLORE NEW CLIPS</button>
		<button name="view_ar" id="v" class="block">VIEW MY CLIPS</button>   
		<button name="wallet" class="block">VIEW MY E-WALLET</button>
		<button name="sup" class="block">SUPPORT ARTISTS</button>
		<button name="acc" class="block">VIEW/EDIT ACCOUNT INFO</button>  
		<button name="home_ar" class="block2">LOGOUT</button>
	</form>

<?php

$query2 = "SELECT * FROM purchase where c_id='$x' ";  
$result2 = mysqli_query($con, $query2);
$row2 = mysqli_fetch_array($result2);

if(is_null($row2))
   {
     echo '<h3>Note: No clips purchased yet.</h3>';
     echo '<script> document.getElementById("v").disabled=true </script>';
   }

?>

	<?php
	if(isset($_POST['ex_ar']))
	{
		header("location:customer_explore.php?x=69");
	}

	if(isset($_POST['view_ar']))
	{
		header("location:customer_view.php");
		#exit();
		#session_close();
	}

	if(isset($_POST['acc']))
	{
		header("location:customer_edit.php");
		#exit();
		#session_close();
	}

	if(isset($_POST['wallet']))
	{
		header("location:customer_wallet.php");

	}

	if(isset($_POST['sup']))
	{
		header("location:customer_donate.php");

	}

	if(isset($_POST['home_ar']))
	{
		header("location:index.php");
	}

	?>      
</body>
</html>
