<!DOCTYPE html>
<html>
<head>
<title>Safar</title>
    <link rel="stylesheet" type="text/css" href="modal.css">

    <?php
$dbp=NULL;
 if(isset($_POST['check']))
 {
    $e=$_POST["id"];
    $p=$_POST["password"];

    $DB_Connect = mysqli_connect('localhost','root','','safar') or die('Error Establishing DB Connection');
   
  
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
          //$p = $DATA_ROW['profile'];
         }

        if("$p"=="$dbp")
        {
        	session_start();
			$_SESSION["idd"]=$_POST["id"];
			//echo '<form action="safar.php" methode="post"><input type="hidden"</form>';
			//$_SESSION["profile"]=$_POST["$p"];
          	header("location:safar.php");
        }
        else
        {
          $message = "wrong  password";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
      } 
      else
      {
        $message = "wrong email ";
            echo "<script type='text/javascript'>alert('$message');</script>";
      } 
    } 

  ?>



<style type="text/css">
body
{
	margin:0px;
}
#button{background-color: #DE9683;border:1px solid #DE9683;}
#button:hover{background-color:#ff1a1a;cursor: pointer;border:1px solid #ff1a1a; }
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
    font-family: candara;

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
    background-color: #ff1a1a;
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
<div>

<ul>
    <li><span style="padding: 0;margin-left: 10px;margin-right: 40px;"><img src="busicon.jpg" height="40px" width="50px" ></span></li>
    <li><a href="admin.php" style="margin-right:940px; ">Admin</a></li>
  <li class="dropdown">
    <a  class="dropbtn">Login/Register</a>
    <div class="dropdown-content">
      <a id="myBtn">Login</a>
      <a href="register.php">Register</a>
    </div>
  </li>
  <li><a href="#">Contact us</a></li>

<div id="myModal" class="modal">

  
  <div class="modal-content">
    <span class="close">&times;</span>
    <form action="<?php $_PHP_SELF ?>" method="post">
    <p style="font-family: candara;font-size: 20px">Login</p>
    <p><input  style="border:1px solid #ccc;background: white;padding: 5px;width:310px;" type="text" name="id" placeholder="Email"></p>
    <p><input  style="border:1px solid #ccc;background: white;padding: 5px;width: 310px;" type="Password" name="password" placeholder="Password"></p>
    <p><input type="submit" id="button" name="check" value="Login" style="

                                  border-radius: 5px;
                                height: 40px;
                            color: white;
                        width: 100px;
                     "></p>
 </div>

</div>

<script>

var modal = document.getElementById('myModal');


var btn = document.getElementById("myBtn");


var span = document.getElementsByClassName("close")[0];


 btn.onclick = function () {
   modal.style.display = "block";
}


span.onclick = function() {
    modal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>
<div style="background-image: url(background.png);height: 400px; position: auto;" >
	<form>
		<table align="center" style="padding-top:150px;">
		<tr>
			<td colspan="4" align="center">
				<span style="color: white;font-size: 30px;font-family:monospace;">Stop Looking. Start Tracking!</span><br><span style="color: white;font-size: 25px;font-family: sans-serif;">Track your bus with Safar app</span>
			</td>
		</tr>
			<tr>
				<td >
					<input type="text" name="from" placeholder="From"
					style="border:1px solid #ccc;
					background: white;
					padding: 5px;
					width:330px;
					height: 30px;
					margin:0px;">
				</td>
				<td>
					<input   type="text" name="to" placeholder="To"
					style="border:1px solid #ccc;
					background: white;
					padding: 5px;
					width:330px;
					height: 30px;
					margin:-4.5px;">	
				</td>
				<td>
					<input   type="date" name="date"
					style="border:1px solid #ccc;
					background-color: white;
					//background: url(cal.png);
					background-repeat:no-repeat;
					background-position: left center; 

					padding: 5px;
					width:200px;
					height: 30px;
					margin:-0.5px;">	
				</td>
				<td>
					<input id="SearchButton"   type="submit" name="SearchButton" value="Search Buses" 
					style="border:0;
					font-family: monospace;
					color: white;
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
