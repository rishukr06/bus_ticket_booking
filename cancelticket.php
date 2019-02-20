  <?php
$f=2;
session_start();
 $e=$_SESSION["idd"];
?>
 <?php
           $id=$_POST["id"]; 
         
             
     $DB_Connect = mysqli_connect('localhost','root','','safar') or die('Error Establishing DB Connection');

           $query = "delete from book where email='$e' and ticket='$id'";
   
       $Result = mysqli_query($DB_Connect,$query) or die('Error Fetching ticket info');
 		if($Result!=NULL)
 		{
 			$message = "Your ticket has been canceled";
            echo "<script type='text/javascript'>alert('$message');</script>";
 			header("location:default.php");
 		}