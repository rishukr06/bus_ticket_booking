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

     echo "$n";
?>
  <?php
           $id=$_POST["id"]; 
           //$id=1;  
     $DB_Connect = mysqli_connect('localhost','root','','safar') or die('Error Establishing DB Connection');

           $query = "select * from bus_info where ID=$id";
   
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
     echo "$name";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title></title>


 <script type="text/javascript">

  var a1=1;
  var a2=1;
   var a3=1;
    var a4=1;
     var a5=1;
      var a6=1;
       var a7=1;
        var a8=1;
         var a9=1;
          var a10=1;
    
     function color1(x) {
       //var a=1;
      if(a1==1)
      {
        x.style.background="orange";
        return a1++;
        
      }
       if(a1==2)
      {
          x.style.background="#ccc";
          a1=a1-1;
      }
    }
     function color2(x) {
       //var a=1;
      if(a2==1)
      {
        x.style.background="orange";
        return a2++;
        
      }
       if(a2==2)
      {
          x.style.background="#ccc";
          a2=a2-1;
      }
    }
function color3(x) {
       //var a=1;
      if(a3==1)
      {
        x.style.background="orange";
        return a3++;
        
      }
       if(a3==2)
      {
          x.style.background="#ccc";
          a3=a3-1;
      }
    }
   function color4(x) {
       //var a=1;
      if(a4==1)
      {
        x.style.background="orange";
        return a4++;
        
      }
       if(a4==2)
      {
          x.style.background="#ccc";
          a4=--;
      }
    }
     function color5(x) {
       //var a=1;
      if(a5==1)
      {
        x.style.background="orange";
        return a5++;
        
      }
       if(a5==2)
      {
          x.style.background="#ccc";
          a5=--;
      }
    }
     function color6(x) {
       //var a=1;
      if(a6==1)
      {
        x.style.background="orange";
        return a6++;
        
      }
       if(a6==2)
      {
          x.style.background="#ccc";
          a6=--;
      }
    }
     function color7(x) {
       //var a=1;
      if(a7==1)
      {
        x.style.background="orange";
        return a7++;
        
      }
       if(a7==2)
      {
          x.style.background="#ccc";
          a7=--;
      }
    }
     function color8(x) {
       //var a=1;
      if(a8==1)
      {
        x.style.background="orange";
        return a8++;
        
      }
       if(a8==2)
      {
          x.style.background="#ccc";
          a8=--;
      }
    }
     function color9(x) {
       //var a=1;
      if(a9==1)
      {
        x.style.background="orange";
        return a9++;
        
      }
       if(a9==2)
      {
          x.style.background="#ccc";
          a9=--;
      }
    }
     function color10(x) {
       //var a=1;
      if(a4==1)
      {
        x.style.background="orange";
        return a10++;
        
      }
       if(a10==2)
      {
          x.style.background="#ccc";
          a10=--;
      }
    }
  </script>


   <style type="text/css">
     #bus{ 
      background: #ccc;
      width: ;
      height: ;
      margin-left: 450px;
      position: absolute;
     }
     td{
      min-width: 20px;
      max-width: 205px;
     }
       input[type="checkbox"]{
        opacity: ;}
        #checkbox{
          background: grey;
          width: 20px;
          height: 20px;
          border-radius: 5px;
          padding: 1px;

        }
   </style>
 </head>
 <body>
 <div  id="bus"><b>Select Your Seat</b><hr>
<table border="1px">
  <tr>
    <td>
    <div id="checkbox" onclick="color1(this)">
      <input type="checkbox" name="s1" value="1">
      </div>
    </td>
    <td>
      <div id="checkbox" onclick="color2(this)">
      <input type="checkbox" name="s2" value="2">
      </div>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <div id="checkbox" onclick="color3(this)">
      <input type="checkbox" name="s3" value="3">
      </div>
    </td>
    <td>
       <div id="checkbox" onclick="color4(this)">
      <input type="checkbox" name="s4" value="4">
      </div>
    </td>
    <td>
       <div id="checkbox" onclick="color4(this)">
      <input type="checkbox" name="s2" value="2">
      </div>
    </td>

  </tr>
  <tr>
    <td>
    <div id="checkbox" onclick="color5(this)">
      <input type="checkbox" name="s5" value="s5">
      </div>
    </td>
    <td>
      <div id="checkbox" onclick="color6(this)">
      <input type="checkbox" name="s6" value="s6">
      </div>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <div id="checkbox" onclick="color7(this)">
      <input type="checkbox" name="s7" value="7">
      </div>
    </td>
    <td>
       <div id="checkbox" onclick="color8(this)">
      <input type="checkbox" name="s8" value="8">
      </div>
    </td>
    <td>
       <div id="checkbox" onclick="color9(this)">
      <input type="checkbox" name="s9" value="9">
      </div>
    </td>

  </tr>
  <tr>
    <td>
    <div id="checkbox" onclick="color10(this)">
      <input type="checkbox" name="s10" value="10">
      </div>
    </td>
    <td>
      <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
       <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
       <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>

  </tr>
  <tr>
    <td>
    <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
      <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
       <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
       <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>

  </tr>
  <tr>
    <td>
    <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
      <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
       <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
       <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>

  </tr>
  <tr>
    <td>
    <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
      <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
       <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
       <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>

  </tr>
  <tr>
    <td>
    <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
      <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
       <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
       <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>

  </tr>
  <tr>
    <td>
    <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
      <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
      <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
      <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
      <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
      <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
      <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
       <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>
    <td>
       <div id="checkbox" onclick="color(this)">
      <input type="checkbox" name="">
      </div>
    </td>

  </tr> 
</table>

 </div>
 </body>
 </html>