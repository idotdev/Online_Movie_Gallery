<!DOCTYPE html>
<html>
<head>
	<title>PURCHASED CLIPS</title>
  <meta name="viewport" content="width=device=width, initial-scale=1.0">
</head>
<body>
	<form method="post">
	</form>

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
     h4
     {
      font-family: cambria;
     }     
          
  </style>

	<?php

    session_start();

		$c_id=$_SESSION["id"]; #customer id.
		$c_name=$_SESSION["name"]; #customer name

		$con = new mysqli('localhost', 'root', '', 'mov_gallery');
    
    $query = "SELECT * FROM purchase where c_id='$c_id' ORDER BY p_id";
	$result = mysqli_query($con, $query);

	echo '<table>';
               echo'
               <tr>
                <th>Genre</th>
                <th>Hyperlink</th>                       
                </tr>';
	while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
	{
		$vid_id = $row['vid_id'];
		$query = "SELECT * from clips where vid_id = '$vid_id'";
		$row1 = mysqli_fetch_assoc(mysqli_query($con,$query));
		$cr_id = $row1['cr_id'];

		$query = "SELECT * from creator where cr_id = '$cr_id'";
		$row2 = mysqli_fetch_assoc(mysqli_query($con,$query));
		$name = $row2['cr_name'];

        echo '  
                  <tr>
                     <td>
                         '.$row1['genre'].' 
                     <td>
                     ';  
            echo "<a href='watch.php?id=".$vid_id."'>".$row1['title']."</a></br>";
            
            echo '</td> 
                  </tr> ';
	}

    echo '</table>';
	//
    // $query2 = "SELECT sum(price),count(title) FROM purchase where a_id='$zx'";
    //      $sum_balance=mysqli_query($con,$query2);

    //      while($row = mysqli_fetch_array($sum_balance))
    //      {
    //       echo "<h4>TOTAL RS. SPENT: ".$row['sum(price)']."</h4>";
    //       echo "<h4>NO. OF ARTWORKS BOUGHT: ".$row['count(title)']."</h4>";
    //      }  
    //      echo '------------------------------------------------------------------------------------------------';
    // while($row = mysqli_fetch_array($result))  
    //   { 
    //       echo  "<h4>Title: ".$row['title']."</h4>";
    //       echo  "<h4>Year: ".$row['year']."</h4>";
    //       echo  "<h4>Type: ".$row['type']."</h4>";  
    //       echo  "<h4>Price: ".$row['price']."</h4>";

    //       $x=$row['title'];
    //       $y=$row['ar_id'];

    //       $query2= "SELECT * from artwork where ar_id='$y' and title='$x'";
    //       $result2 = mysqli_query($con, $query2); 


    //       while($row2=mysqli_fetch_array($result2))
    //        {

    //         echo '  
    //            <tr>  
    //            <td>  
    //              <img src="data:image/jpeg;base64,'.base64_encode($row2['image'] ).'" class="responsive" />
    //             </td>  
    //          </tr>  
    //             ';
    //         }

    //          $query3 = "SELECT cr_name FROM creator where cr_id='$y'";
    //          $result3 = mysqli_query($con, $query3); 

    //          $row3 = mysqli_fetch_assoc($result3);

    //          echo  "<h4>Creator Credits: ".$row3['cr_name']."</h4>";
            
    //        echo '------------------------------------------------------------------------------------------------'; 
    //     }

  ?>

</body>
</html>
