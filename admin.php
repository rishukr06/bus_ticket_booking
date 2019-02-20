<?php
$f=2;
if(isset($_POST['btn']))
    { $id=$_POST["uid"];
		$pass=$_POST["Pass"];

		    if($pass=="rishu" && $u="rishu@admin")
		    {
		    	header("location:admininfo.php");
		    }
		    
		    else
		    	$f=1;
		
	}	    

?>


<!DOCTYPE html>
<html>
<head>
	<title>
		admin-login
	</title>
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
		
		
	</style>
	<script type="text/javascript">
	function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
</head>
<body>
<div style="background-color:;
			padding: 5px;color: ;
			font-family: candara;
			font-size: 20px;
			margin-top: 160px;
			">
			<form action="<?PHP $_PHP_SELF ?>" method="post">
<table border="1" align="center" rules="none" >
	<tr>
		<th  align="center" bgcolor="#ccc" height="35px" style=" font-family:Candara; border-top-right-radius: 5px;border-top-left-radius: 5px;"><marquee behavior="alternate" scrollamount=4>Login</marquee></th>
	</tr>
	<tr>
		<td ><input style="padding: 5px;font-family:Candara;" placeholder="User ID"  type="text"  name="uid" value="<?php if(isset($_GET["txt2"])) echo $_GET["txt2"]; ?>"></td>
	</tr>
	
	<tr>
		<td><input style="padding: 5px;font-family:Candara;" placeholder="Password" id="myInput"  type="Password" name="Pass"  value="<?php if(isset($_GET["txt"])) echo $_GET["txt"]; ?>"><br><input type="checkbox" onclick="myFunction()"><span style="font-size: 15px">Show Password</span>
		</td>
	</tr>
	<tr>
		<td style="padding-top: 5px;" align="center"><input style="padding: 3px;" type="submit" value="Login" name="btn">
			<span style="padding-left: 10px; "><input style="padding: 3px;" type="reset" value="Reset"></span></td>
	</tr>
	<tr><td><hr></td></tr>
	<td  style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;"  align="center">&copy;RCPL@Rishu</td>
</table>
<div align="center" style="color: red;padding-top: 5px;"><b><?php if($f==1) echo "password does not matched"; ?></b></div>
</form>
	
</div>
</body>
</html>