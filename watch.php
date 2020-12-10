<!DOCTYPE html>
<html>
<head>
	<title>WATCH CLIPS</title>	 
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

		$id=$_GET['id'];
		
		// if(is_null($x))
		// {
		// header("location: index.php?xx=69");
		// }		

		$cr_id=$_SESSION["id"];

		$con = new mysqli('localhost', 'root', '', 'mov_gallery');
		if(!$con)
		{
			echo 'Please check your connection';
		}	


       $query = "SELECT * FROM clips where vid_id='$id'";  
       $result = mysqli_query($con, $query);

       while($row = mysqli_fetch_array($result))  
		    { 
			   // CODE FOR VIEWING CLIPS
			   echo "<video autoplay controls height=540px width=960px type='video/mp4' src='videos/".$row['filename']."'></video>";
		    }

      ?>  
</body>
</html>
