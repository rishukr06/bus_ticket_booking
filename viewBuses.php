<!DOCTYPE html>
<html>
<head>
	<title>
		Available-buses
	</title>

	<?php
             	$from=$_POST["from"];
             	$to = $_POST["to"];
             	$date=$_POST["date"];
    ?>

	<style type="text/css">
		body{
			margin: 0px;
			
		}
		td{
			max-width: 150px;
			min-width: 150px;
		}
		input[type=submit]{
			background: url('ticket.png');
			background-size: 100px;
			background-repeat: no-repeat;
			min-width: 100px;
			min-height: 52px;
			color: transparent ;
			border:0px;
		}
		input[type=submit]:hover{cursor: pointer;}
	</style>
</head>
<body>

<div style="background-color:#F63E46;
			padding: 5px;color: white;
			font-family: candara;
			font-size: 20px;
			">
	<table align="center">
		<tr>
			<th>
				<?php echo "$from";  ?>
			</th>
			<th>
				<img src="arrow.png" height="30" style="transform: rotate(90deg);padding-left: 15px;padding-right: 15px;">
			</th>
			<th>
				<?php echo "$to";  ?>
			</th>
		</tr>
	</table>
	</div>

	

             	<?php
             	
	   $DB_Connect = mysqli_connect('localhost','root','','safar') or die('Error Establishing DB Connection');

      	   $query = "select * from bus_info";
   
  	   $Result = mysqli_query($DB_Connect,$query) or die('Error Fetching labour info');
 
                       		while($DATA_ROW = mysqli_fetch_array($Result))
   
    		 {	



		    $id = $DATA_ROW['ID'];
		    $img = $DATA_ROW['img'];

	    	
	 	    $name = $DATA_ROW['cname'];
		   $seats = $DATA_ROW['seats'];
 		   $price = $DATA_ROW['price'];
 		   $time = $DATA_ROW['time'];
 		   $duration = $DATA_ROW['duration'];
		  
			//echo  "<tr><td style='padding-top:3px;padding-left:5px;padding-right:5px;padding-bottom:3px';> $id</td>";
			//echo  "<td style='padding-top:3px;padding-left:5px;padding-right:5px;padding-bottom:3px';> $n</td>";
		//	echo  "<td style='padding-top:3px;padding-left:5px;padding-right:5px;padding-bottom:3px';> $m</td>";
		//	echo  "<td style='padding-top:3px;padding-left:5px;padding-right:5px;padding-bottom:3px';> $l_add</td>";
		//	echo  "<td style='padding-top:3px;padding-left:5px;padding-right:5px;padding-bottom:3px';> $l_pay</td>";


		echo	"<div  style='
             position:relative;
             margin-top: 40px;
             box-shadow: 0px 3px 8px 0px rgba(9,0,0,0.2);;
             margin-top:10px;
             background-color:#f9f9f9;
             padding: 15px;
             '>";

             echo "<table width='100%' rules='cols'>";
             
             echo	"<tr>
             		<td align='center'>
             			<img src='$img' height='40'>
             		</td>";
            echo 	"<td align='center'>
             			$name
             		</td>";
             echo	"<td align='center'>
             			 $seats seats
             		</td>";
             echo	"<td align='center'>
             			$price /-
             		</td>";
             echo	"<td align='center'>
             			$time
             		</td>";
             echo	"<td align='center'>
             			$duration hrs
             		</td>";
             echo  "<td align='center'>
             			<form action='bookBus.php' method='post'><input type='hidden' name='from' value='$from'><input type='hidden' name='to' value='$to'><input type='hidden' name='date' value='$date'><input type='submit' value=$id name='id' ></form>
             		</td>
             	</tr></table></div>";


		}
?>



            



</body>
</html>