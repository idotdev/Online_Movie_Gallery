<!DOCTYPE html>
<html>
<head>
	<title>VIEW CLIPS</title>	 
	<meta name="viewport" content="width=device=width, initial-scale=1.0">   
</head>
<body>
	<style type="text/css">
		.responsive {
  			width: 100%;
  			max-width: 400px;
  			height: auto;
					}
		h3,h4
		{
			font-family: cambria;
		}
		
	</style>
	<form method="post">
	</form>
	<?php
		session_start();

		$x=$_GET['x'];

		$xx=$_SESSION['id'];
		$yy=$_SESSION['name'];
		
		if(is_null($x))
		{
		header("location: index.php?xx=69");
		}		

		$cr_id=$_SESSION["id"]; 

		$con = new mysqli('localhost', 'root', '', 'mov_gallery');
		if(!$con)
		{
			echo 'Please check your connection';
		}	


       $query = "SELECT * FROM clips where cr_id='$cr_id' ORDER BY title DESC ";  
       $result = mysqli_query($con, $query);

       while($row = mysqli_fetch_array($result))  
		    { 
			   // CODE FOR VIEWING CLIPS
			   echo "<a href='watch.php?id=".$row['vid_id']."'>".$row['title']." - ".$row['genre']."</a></br>";
		    }

      ?>  
</body>
</html>
