<?php
session_start();

$con = new mysqli('localhost', 'root', '', 'mov_gallery');

$x=$_SESSION["id"];
$y=$_SESSION["name"];

if(isset($_POST["insert"]))  
{          
	$title=$_POST['title'];
	$genre=$_POST['genre'];
	$year=$_POST['year'];
	$type=$_POST['type']; 
	$price=$_POST['price'];          
	$likes=0;
	$sold=0;
	$filename = $_FILES['vid']['name'];
	move_uploaded_file($_FILES['vid']['tmp_name'], "videos/".$filename);
// unlink("videos/".$filename); # for deleting a file from folder
	$query = "insert into clips (cr_id, title, genre, type, price, year, likes, sold, filename) values('$x','$title','$genre','$type',$price,'$year','$likes','$sold','$filename')";

	if(mysqli_query($con,$query))  
	{  
		echo '<script>alert("Clip Inserted into Database!")</script>';           
	}
	else
	{
		// echo '<script>alert("Error!")</script>';
		echo("Error description: " . mysqli_error($con));
	}

}  

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>CLIPS</title>
  <meta name="viewport" content="width=device=width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
</head>
<body>
<style type="text/css">
input
{
  border-radius: 8px;
  padding: 2.8px;
}    
body
{
  background-image: url('clou.jpeg');
} 
h3,h4
{
  font-family: cambria;
  font-weight: bold;
}
#insert
{
  padding: 5px;
  border-radius: 10px;
}
#insert:hover
{
  background-color: #E3E3E3;
  transform: scale(1.03);
}
</style>
	<form method="post" enctype="multipart/form-data">
	   <h4 style="margin-left: 5px;">Fill in all the following details.</h4>
	   <input type="text" name="title" placeholder="Title" required style="margin: 5px;"> 
	   <br />
	   <input type="text" name="genre" placeholder="Genre" required style="margin: 5px;"> 
	   <br />
	   <input type="number" name="year" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" required placeholder="Year" style="margin: 5px;"/>
	   <br />
	   <input type="text" name="type" placeholder="Type" required style="margin: 5px;">
	   <br/>
	   <input type="file" name="vid" id="vid" required style="margin: 5px; margin-bottom: -10px;">  
	   <br />
	   <input type="number" name="price" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==7) return false;" required placeholder="Price(INR)" style="margin: 5px; margin-bottom: -10px;"/> 
	   <br />
	   <br /> 
	   <input type="submit" name="insert" id="insert" value="UPLOAD" style="margin: 5px;" /> 
	</form>

</body>
</html>
