<!DOCTYPE html>
<html>
<head>
	<title>VIEW DETAILS</title>
</head>
<body>
<style type="text/css">
body
{
  background-image: url('clou.jpeg');
}  
</style>
	<form method="post">
	</form>

	<?php
		$server="localhost";
		$un="root";
		$pwd="";
		$db="mov_gallery"; 

		$con=mysqli_connect($server,$un,$pwd,$db);

       $query = "SELECT * FROM customer ORDER BY c_id";  
       $result = mysqli_query($con, $query);

       if($result)
       {  
       while($row = mysqli_fetch_array($result))  
        {  
          echo '  
             <tr>  
               <td>
                 <p>CUSTOMER ID: '.$row['c_id'].'</p>  
                 <p>CUSTOMER NAME: '.$row['c_name'].'</p>
                </td>  
             </tr>  
                ';

          echo  "<p>ADDRESS: ".$row['address']."</p>";
          echo  "<p>PHONE: ".$row['phone']."</p>";
          echo "<br>";                    
         }
         }

         else
         {
         	echo '<script>alert("NO DATA AVAILABLE! PLEASE ADD DETAILS")</script>';
         } 

      ?>  

</body>
</html>
