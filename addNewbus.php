   	<?php
   		if(isset($_POST["btn"]))
   		{
             	$i=$_POST["bid"];
             	$n=$_POST["bname"];
             	$s=$_POST["seat"];
             	$p=$_POST["price"];
             	$t=$_POST["time"];
             	$d=$_POST["duration"];
 
             	$imgname=$_FILES["pic"]["name"];
				
				move_uploaded_file($_FILES["pic"]["tmp_name"], "userpic/".$imgname);

	  $DBC = mysqli_connect('localhost','root','','safar') or die('Error Establishing DB Connection');

      	   $query = "insert into bus_info values('$i','$imgname','$n','$s','$p','$t','$d')";
   
  	  
      	   $Result = mysqli_query($DBC,$query) or die('Error Fetching bus info');
      	   if ($Result!=NULL) {
      	   	 echo "bus Added succesfully";
      	   }
      	   else
      	   {
      	   	echo "Unable to add bus";
      	   }
      	}
?>
     	<?php
             	
	   $DB_Connect = mysqli_connect('localhost','root','','safar') or die('Error Establishing DB Connection');

      	   $query = "select * from bus_info";
   
  	   $Result = mysqli_query($DB_Connect,$query) or die('Error Fetching bus info');
 
                       		while($DATA_ROW = mysqli_fetch_array($Result))
   
    		 {    $bid = $DATA_ROW['ID'];	}

    				$bid=$bid+1;

    		?>

<!DOCTYPE html>
<html>
<head>
	<title>New Bus</title>
	<style type="text/css">
	
		td{
			background-color: lightblue;
		}
		table{
			
			border: 2px  #ccc;
			border-radius: 8px;
			padding: 5px; 
			border-color: blue;
			box-shadow: 3px 3px 8px #ccc;

		}
		input[type="text"]{
			width: 300px;
		}
		input[type="submit"]{
			display: inline-block;
			border:1px solid #ccc;
			border-radius: 5px;
			background: blue;
			color: white;
			padding:5px;

		}
		input[type="reset"]
		{
		display: inline-block;
			border:1px solid #ccc;
			border-radius: 5px;
			background: orange;
			color: white;
			padding:5px;	
		}
		input[type="file"]
		{
			display: inline-block;
			transform: hidden;
			border:1px solid #ccc;
			border-radius: 0px;
			background:lightgreen;
			color: white;
			padding:5px;
			font-family: sans-serif;	
			width: 300px;
		}
		</style>
</head>
<body>
	<form action="<?PHP $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
<table border="1" align="center" rules="none" >
	<tr>
		<th  align="center" bgcolor="#ccc" height="35px" style=" font-family:Candara; border-top-right-radius: 5px;border-top-left-radius: 5px;"><marquee behavior="alternate" scrollamount=4>Add New Bus</marquee></th>
	</tr>
	<tr>
		<td ><input style="padding: 5px;font-family:sans-serif;"  type="text" readonly name="bid" value="<?php echo " Bus ID $bid"?>"></td>
	</tr>
	
	<tr>
		<td><input style="padding: 5px;font-family:sans-serif;" placeholder="Bus Name"   type="text" name="bname">
		</td>
	</tr>
	<tr>
		<td><input style="padding: 5px;font-family:sans-serif;" placeholder="Number of seats"   type="text" name="seat">
		</td>
	</tr>
	<tr>
		<td><input style="padding: 5px;font-family:sans-serif;" placeholder="Price"   type="text" name="price">
		</td>
	</tr>
	<tr>
		<td><input style="padding: 5px;font-family:sans-serif;" placeholder="Timing"   type="text" name="time">
		</td>
	</tr>
	<tr>
		<td><input style="padding: 5px;font-family:sans-serif;" placeholder="Duration"   type="text" name="duration">
		</td>
	</tr>
	<tr>
		<td><input style="padding: 5px;font-family:sans-serif;" name="pic"  type="file" >
		</td>
	</tr>
	<tr>
		<td style="padding-top: 5px;" align="center"><input  type="submit" value="Save" name="btn">
			<span style="padding-left: 10px; "><input  type="reset" value="Reset"></span></td>
	</tr>
	<tr><td><hr></td></tr>
	<td  style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;"  align="center">&copy;RCPL@Rishu</td>
</table>
</form>
</body>
</html>