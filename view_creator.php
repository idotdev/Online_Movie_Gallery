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

       $query = "SELECT * FROM creator";  
       $result = mysqli_query($con, $query);

       if($result)
       {  
       while($row = mysqli_fetch_array($result))  
        {  
          echo '  
             <tr>  
               <td>
                 <p>CREATOR ID: '.$row['cr_id'].'</p>  
                 <p>CREATOR NAME: '.$row['cr_name'].'</p>
                </td>  
             </tr>  
                ';

          echo  "<p>GENDER: ".$row['gender']."</p>";
          echo  "<p>COUNTRY: ".$row['country']."</p>";
          echo  "<p>PHONE: ".$row['phone']."</p>";
          echo  "<p>DONATIONS: ".$row['donations']."</p>";
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
