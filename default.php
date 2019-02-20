
<!DOCTYPE html>
<html>
<head>
	<title>Safar</title>






<style type="text/css">
body
	{
		margin:0px;
	}
	::-webkit-scrollbar{
    width: 0px;}
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
</style>
</head>
<body>
<div style="background-image: url(background.png);height: 400px; position: auto;" >
	<form action="viewBuses.php" method="post" target="main_frame">
		<table align="center" style="padding-top:150px;">
		<tr>
			<td colspan="4" align="center">
				<span style="color: white;font-size: 30px;font-family:monospace;">Stop Looking. Start Tracking!</span><br><span style="color: white;font-size: 25px;font-family: sans-serif;">Track your bus with Safar app</span>
			</td>
		</tr>
			<tr>
				<td >
					<input type="text" name="from" required placeholder="From"
					style="border:1px solid #ccc;
					background: white;
					padding: 5px;
					width:330px;
					height: 30px;
					margin:0px;">
				</td>
				<td>
					<input   type="text" name="to" required placeholder="To"
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