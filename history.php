  <?php
$f=2;
session_start();
 $e=$_SESSION["idd"];
  $stats=NULL;
      $DB_Connect = mysqli_connect('localhost','root','','safar') or die('Error Establishing DB Connection');
   
          //$e="rishukr06@gmail.com";
           $queryy = "select * from book where email='$e'";
   
       $Result = mysqli_query($DB_Connect,$queryy) or die('Error Fetching User info');
        
       if($Result!=NULL)
       {
             while($DATA_ROW = mysqli_fetch_array($Result))
         { 
          
          $bid = $DATA_ROW['busid'];
        
         }
     }
?>
  <?php
          
             
     $DB_Connect = mysqli_connect('localhost','root','','safar') or die('Error Establishing DB Connection');

           $query = "select * from bus_info where ID=$bid";
   
       $Result = mysqli_query($DB_Connect,$query) or die('Error Fetching bus info');
 
                          while($DATA_ROW = mysqli_fetch_array($Result))
   
         {  



       
        $img = $DATA_ROW['img'];

        
        $name = $DATA_ROW['cname'];
       $seats = $DATA_ROW['seats'];
       $price = $DATA_ROW['price'];
       $time = $DATA_ROW['time'];
       $duration = $DATA_ROW['duration'];
     }
     
     
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>
    History
  </title>

 
  <style type="text/css">
    body{
      margin: 0px;
      
    }
    td{
      max-width: 150px;
      min-width: 150px;
    }
    input[type=submit]{
      background: url('ticketc.png');
      background-size: 100px;
      background-repeat: no-repeat;
      min-width: 100px;
      min-height: 42px;
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
        Booking History
      </th>
    </tr>
  </table>
  </div>

  
<?php
$f=2;
//session_start();
 //$e=$_SESSION["idd"];
  $stats=NULL;
      $DB_Connect = mysqli_connect('localhost','root','','safar') or die('Error Establishing DB Connection');
   
          //$e="rishukr06@gmail.com";
           $queryy = "select * from book where email='$e'";
   
       $Result = mysqli_query($DB_Connect,$queryy) or die('Error Fetching User info');
        
       if($Result!=NULL)
       {
             while($DATA_ROW = mysqli_fetch_array($Result))
         { 
          
          $f = $DATA_ROW['from'];
          $to = $DATA_ROW['to'];
          $d = $DATA_ROW['date'];
          $bid = $DATA_ROW['busid'];
          $s = $DATA_ROW['seat'];
          $t = $DATA_ROW['ticket'];
         
         
     
      //echo  "<tr><td style='padding-top:3px;padding-left:5px;padding-right:5px;padding-bottom:3px';> $id</td>";
      //echo  "<td style='padding-top:3px;padding-left:5px;padding-right:5px;padding-bottom:3px';> $n</td>";
    //  echo  "<td style='padding-top:3px;padding-left:5px;padding-right:5px;padding-bottom:3px';> $m</td>";
    //  echo  "<td style='padding-top:3px;padding-left:5px;padding-right:5px;padding-bottom:3px';> $l_add</td>";
    //  echo  "<td style='padding-top:3px;padding-left:5px;padding-right:5px;padding-bottom:3px';> $l_pay</td>";


    echo  "<div  style='
             position:relative;
             margin-top: 40px;
             box-shadow: 0px 3px 8px 0px rgba(9,0,0,0.2);;
             margin-top:10px;
             background-color:#f9f9f9;
             padding: 15px;
             '>";

             echo "<table width='100%' rules='cols'>";
             
             echo "<tr>
                <td align='center'>
                 Ticket no.<br> $t
                </td>";
            echo  "<td align='center'>
                  From<br> $f
                </td>";
             echo "<td align='center'>
                   To<br>$to 
                </td>";
             echo "<td align='center'>
                  Seat no.<br> $s
                </td>";
             echo "<td align='center'>
                   time<br> $time
                </td>";
             echo "<td align='center'>
                   Bus Name<br> $name
                </td>";
             echo  "<td align='center'>
                  <form action='cancelticket.php' method='post'><input type='submit' value=$t name='id' ></form>
                </td>
              </tr></table></div>";
  }
}
    
?>



            



</body>
</html>