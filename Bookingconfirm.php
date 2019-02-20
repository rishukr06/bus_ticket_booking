<?php
$f=2;
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
 <?php
           $bid=$_POST["bus_id"]; 
           $seat=$_POST["s"];
           $f=$_POST["from"];
           $t=$_POST["to"];
           $d=$_POST["date"];
             
     $DB_Connect = mysqli_connect('localhost','root','','safar') or die('Error Establishing DB Connection');

           $query = "select * from bus_info where ID=$bid";
   
       $Result = mysqli_query($DB_Connect,$query) or die('Error Fetching bus info');
 
                          while($DATA_ROW = mysqli_fetch_array($Result))
   
         {  



        $id = $DATA_ROW['ID'];
        $img = $DATA_ROW['img'];

        
        $name = $DATA_ROW['cname'];
       $seats = $DATA_ROW['seats'];
       $price = $DATA_ROW['price'];
       $time = $DATA_ROW['time'];
       $duration = $DATA_ROW['duration'];
     }
     
 ?>
<?php

 $DB_Connect = mysqli_connect('localhost','root','','safar') or die('Error Establishing DB Connection');

           $query = "insert into book values('$e','$f','$t','$d','$bid','$seat',$seat)";
   
       $Result = mysqli_query($DB_Connect,$query) or die('Error Fetching bus info');
       if($Result!=NULL)
       

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    td{
      padding: 5px;
    }
  </style>
</head>
<body>
<div  style="
             position:absolute;
             width: 300px;
             margin-left: 500px;
             margin-top: 40px;
             box-shadow: 0px 3px 8px 0px rgba(9,0,0,0.2);
             margin-top:10px;
             background-color:#f9f9f9;
             padding: 15px;
             ">
             <center><h3 style="color:green">Booking Successful!</h3></center><hr>
             <h4><center>Details</center></h4>
             <table width="100%" style="text-align: center;">
             <tr>
               <td>
                 Ticket no.
               </td>
               <td>
                 <?php echo "$seat"; ?>
               </td>
             </tr>
               <tr>
                 <td>
                   Name 
                 </td>
                 <td>
                   <?php echo "$n"; ?>
                 </td>
                 </tr>
                 <tr>
                 <td>
                   from
                 </td>
                 <td>
                   <?php echo "$f"; ?>
                 </td>
               </tr>
               <tr>
                 <td>
                   to
                 </td>
                 <td>
                   <?php echo "$t"; ?>
                 </td>
               </tr>
               <tr>
                 <td>
                   Date
                 </td>
                 <td>
                   <?php echo "$d"; ?>
                 </td>
               </tr>
               <tr>
                 <td>
                   Seat no.
                 </td>
                 <td>
                   <?php echo "$seat"; ?>
                 </td>
               </tr>
             </table>

</div>

</body>
</html>
