<?php
echo('<h3 style = "text-align:center">ADMIN MASTER CONTROL</h3>');
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMINISTRATOR</title>
</head>
<body>
<style type="text/css">
.block0 {
  padding: 6px 12px;
  margin-bottom: 3px;
}	
.block {
  padding: 5px 10px;
}
html {
    display: table;
    margin: auto;
}
html, body {
    height: 100%;
} 
body
{
	background-image: url('clou.jpeg');
  vertical-align: middle;
  display: table-cell;
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
input{
  display: grid;
  place-items: center;
  
}
</style>
	
<form method="post">	
<input class="block0" type="text" name="x" placeholder="ADMIN ID">
<br>
<input class="block0" type="password" name="y" placeholder="KEY">
<br>
<button style='margin-right:30px' class="block" name="submit">SUBMIT</button>
<button class="block" name="bacc">BACK</button>
<?php
if(isset($_POST['submit']))
{
	$server="localhost";
	$un="root";
	$pwd="";
	$db="mov_gallery";

	$con=mysqli_connect($server,$un,$pwd,$db);

	$x=$_POST['x'];
	$y=$_POST['y'];

	$query="select * from admin_mc";
	$result=mysqli_query($con,$query);

	$row = mysqli_fetch_assoc($result);
	{
    if($row["ad_id"]==$x&&$row["ad_key"]==$y)
     {
        header("location:admin_lobby.php?x=pass");          
     }
    else
     {
        header("location:admin.php?fn=empty");
        exit();
     }
	}
}
if(isset($_POST['bacc']))
{
	header('location: index.php');
} 
?>
</body>
</html>
