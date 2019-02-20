<?php
session_start();
 $e=$_SESSION["idd"];
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
         $img = $DATA_ROW['profile'];
         }
     }
?>



<!DOCTYPE html>
<html>
<head>
	<title>Safar</title>







<style type="text/css">
::-webkit-scrollbar{
    width: 0px;}
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

</style>

</head>
<body>
<div id="navbar">
	<table width="100%" border="0">
		<tr>
			<td>
				<a href="safar.php" style="text-decoration: none"><img src="busicon.jpg" height="40px" width="50px" align="left"></a>
			</td>
			<td align="right" style=" font-family:sans-serif;padding-left: 950px; ">
					<ul >
		
					
					<li><img src=" userpic/<?php  echo "$img"; ?>" style="text-align: center;margin-top: 7px;border-radius: 2px;"; height="30px" width="30px"></li>
					 <li class="dropdown">
   						 <a  class="dropbtn">
   							 <?php if(isset($_SESSION["idd"]))
								//echo $_SESSION["idd"];
								echo "$id";
								else{header("location:index.php");}
							?>
						</a>
    						<div class="dropdown-content">
      							<a href="editprofile.php" target="main_frame">Edit Profile</a>
     								 <a href="history.php" target="main_frame">Booked Tickets</a>
     								 <a href="#">Cancel Ticket</a>
     								 <a href="#">Update password</a>
     								 <a href="uploadProfile1.php" target="main_frame">Update Photo </a>

   							 </div>
 					 </li>
		
				<li>
					<a>|</a>
				</li>
			
			<li>
				<a href="logout.php" style="text-decoration: none;cursor: pointer;color: white;text-align: center;">Logout</a>
			</li>
			</td>
		</tr>
	</table>
</div>
<div>
<iframe src="default.php" name="main_frame" width="100%" height="100%" style="margin: 0px;position: absolute;border:0px;"></iframe>
</div>
</body>
</html>