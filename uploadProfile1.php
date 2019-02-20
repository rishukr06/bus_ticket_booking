<?php
session_start();
 $e=$_SESSION["idd"];
//$e="rishukr06@gmail";
	$stats=NULL;
 			$DB_Connect = mysqli_connect('localhost','root','','safar') or die('Error Establishing DB Connection');
   
  				//$e="rishukr06@gmail.com";
           $queryy = "select * from reg where email='$e'";
   
       $Result = mysqli_query($DB_Connect,$queryy) or die('Error Fetching User info');
        
       if($Result!=NULL)
       {
             while($DATA_ROW = mysqli_fetch_array($Result))
         { 
          $id = $DATA_ROW['email'];
          $n = $DATA_ROW['name'];
          $dbp = $DATA_ROW['password'];
          $dob = $DATA_ROW['dob'];
          $g = $DATA_ROW['gender'];
          $q = $DATA_ROW['s_question'];
          $a = $DATA_ROW['s_answer'];
         $p = $DATA_ROW['profile'];
         }
     }
?>

<?php
$con=mysqli_connect("localhost","root","","safar")
or	die("Server Colud Not Connected");

if(isset($_POST["btn"]))
{
$imgname=$_FILES["img"]["name"];

move_uploaded_file($_FILES["img"]["tmp_name"], "userpic/".$imgname);
$sqlquery="update reg set profile='$imgname' where email='$e'";
$n=mysqli_query($con,$sqlquery);
if($n!=0)
header("location:default.php");
else
echo "Unable To Register";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Upload-profile
	</title>

<style type="text/css">
body
	{
		margin:0px;
	}
	#navbar
	{
	background-color: #920A10;
	margin:0;
	}
	#SearchButton{background-color: #ff4d4d; }
	#SearchButton:hover
		{
			background-color: #ff1a1a;
			cursor: pointer;	
		}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:  #920A10 ;
    

}		

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    cursor: pointer;
    
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:  #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(9,0,0,0.2);
    z-index: 10;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    font-family: candara;
}

.dropdown-content a:hover {
    background-color:  #f1f1f1;cursor: pointer

}

.dropdown:hover .dropdown-content {
    display: block;
}


#yourBtn{
   position:relative;
   font-family: calibri;
   width: 150px;
   padding: 10px;
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border: 1px dashed #BBB; 
   text-align: center;
   background-color: #DDD;
   cursor:pointer;
  }

</style>

<script type="text/javascript">
 function getFile(){
   document.getElementById("upfile").click();
 }
 function sub(obj){
    var file = obj.value;
    var fileName = file.split("\\");
    document.getElementById("yourBtn").innerHTML = fileName[fileName.length-1];
    document.myForm.submit();
    event.preventDefault();
  }
</script>

</head>
<body>


<div style="background-image: url(background.png);height: 400px; position: auto;" >
	<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
		<table align="center" style="padding-top:150px;">
		
			<tr>
				<td >
					<div id="yourBtn" onclick="getFile()">click to upload a file</div>
					<div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile" name="img" type="file" value="upload" onchange="sub(this)"/></div>

				</td>
				<td>
					<input id="SearchButton"   type="submit" name="btn" value="Upload" 
					style="border:0;
					font-family: monospace;
					color: white;
					position: relative;	
					padding: 5px;
					width:130px;
					height: 42px;
					margin-left:-3.5px;">	
				</td>
			</tr>
		</table>
	</form>
</div>

</body>
</html>