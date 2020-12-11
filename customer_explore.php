<!DOCTYPE html>
<html>
<head>
	<title>EXPLORE CLIPS</title>	 
	<meta name="viewport" content="width=device=width, initial-scale=1.0">   
</head>
<body>
	<style type="text/css">
		table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
body
{
  background-image: url('clou.jpeg');
}
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


       $query = "SELECT * FROM clips ORDER BY title DESC ";  
       $result = mysqli_query($con, $query);

       echo '<table>';
			   echo'
			   <tr>
    			<th>Genre</th>
    			<th>Hyperlink</th>   					 
  				</tr>';

       while($row = mysqli_fetch_array($result))  
		    { 
			   echo '  
                  <tr>
                     <td>
                         '.$row['genre'].' 
                     <td>
                     '; 
			   echo "<a href='purchase.php?id=".$row['vid_id']."'>".$row['title']." - ".$row['genre']."</a></br>";
		    }

		    echo '</table>';

      ?>  
</body>
</html>
