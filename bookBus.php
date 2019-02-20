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
           $id=$_POST["id"]; 
           $f=$_POST["from"];
           $t=$_POST["to"];
           $d=$_POST["date"];
             
     $DB_Connect = mysqli_connect('localhost','root','','safar') or die('Error Establishing DB Connection');

           $query = "select * from bus_info where ID=$id";
   
       $Result = mysqli_query($DB_Connect,$query) or die('Error Fetching bus info');
 
                          while($DATA_ROW = mysqli_fetch_array($Result))
   
         {  



        $bid = $DATA_ROW['ID'];
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
   <title></title>



   <style type="text/css">
   #Proceed{
        width: 100%;
        height: 50px;
        background: lightblue;
        color: white;
        position: relative;
        border-radius: 5px;
        cursor: pointer;

        
   }
     #bus{ 
      background: #ccc;
      width: ;
      height: ;
      margin-left:;
      border-radius: 5px;
      
     }
     td{
      min-width: 20px;
      max-width: 205px;
     }
       input[type="radio"]{
        opacity:0 ;}
       
        #radio{
          background: grey;
          width: 20px;
          height: 20px;
          border-radius: 5px;
          padding: 1px;

          }

   </style>
   <script type="text/javascript">
     function color(x) {
       x.style.background="lightgreen";
     }
     function sub() {
       document.getElementById("form1").submit();
     }
   </script>
 </head>
 <body>
 <form action="Bookingconfirm.php" name="form1" method="post">
 <table align="center" border="0" style="position: ;width: 250px;margin-left: 540px;"><tr><td id="td1">
 <div  id="bus"><b><center>Select Your Seat</center></b><hr>
<table align="center" border="0px">
  <tr>
    <td>
    <div id="radio" onclick="color(this)">
      <input type="radio" name="s" value="1">
      </div>
    </td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s" value="2">
      </div>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s" value="3">
      </div>
    </td>
    <td>
       <div id="radio" onclick="color(this)">
      <input type="radio" name="s" value="4">
      </div>
    </td>
    <td>
       <div id="radio" onclick="color(this)">
      <input type="radio" name="s" value="2">
      </div>
    </td>

  </tr>
  <tr>
    <td>
    <div id="radio" onclick="color(this)">
      <input type="radio" name="s" value="5">
      </div>
    </td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s" value="6">
      </div>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s" value="7">
      </div>
    </td>
    <td>
       <div id="radio" onclick="color(this)">
      <input type="radio" name="s" value="8">
      </div>
    </td>
    <td>
       <div id="radio" onclick="color(this)">
      <input type="radio" name="s" value="9">
      </div>
    </td>

  </tr>
  <tr>
    <td>
    <div id="radio" onclick="color(this)">
      <input type="radio" name="s" value="10">
      </div>
    </td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
       <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
       <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>

  </tr>
  <tr>
    <td>
    <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
       <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
       <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>

  </tr>
  <tr>
    <td>
    <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
       <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
       <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>

  </tr>
  <tr>
    <td>
    <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
       <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
       <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>

  </tr>
  <tr>
    <td>
    <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
       <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
       <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>

  </tr>
  <tr>
    <td>
    <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
      <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
       <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>
    <td>
       <div id="radio" onclick="color(this)">
      <input type="radio" name="s">
      </div>
    </td>

  </tr> 
</table>

 </div></td></tr><tr><td id="qq">
<center><input id="Proceed" type="submit" value="Proceed"></center></span>
 </div></td></tr></table>
<input type="hidden" name="bus_id" value="<?php echo "$bid"; ?>">
<input type="hidden" name="from" value="<?php echo "$f"; ?>">
<input type="hidden" name="to" value="<?php echo "$t"; ?>">
<input type="hidden" name="date" value="<?php echo "$d"; ?>">
 </form>

 </body>
 </html>