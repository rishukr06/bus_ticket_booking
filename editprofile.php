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
       if($g=='male')
            {
                $c=1;
            }
            elseif ($g=='female')
            {
                $c=2;   
            }
            elseif($g=='Others')
            {
                $c=3;
            }
            else
            {
              //
            }
            if($q=='What is your childhood name?')
            {

              $d=1;
            }
             elseif($q=='What is the name of your pet?')
            {

              $d=2;
            }
             elseif($q=='What is your favourite color?')
            {

              $d=3;
            }
             elseif($q=='Who is your favourite actor?')
            {

              $d=4;
            }
             elseif($q=='What is your lucky number?')
            {

              $d=5;
            }
?>
<?php 
if(isset($_POST["btn"]))
{
        $e1=$_POST["email"];
        $n1=$_POST["name"];
        ///$p1=$_POST["pass"];
        //$pc=$_POST["passc"];
        $dob1=$_POST["dob"];
        $g1=$_POST["gender"];
        $q1=$_POST["Security_question"];
        $a1=$_POST["answer"];
    $sql = "update reg set email='$e1',name='$n1',dob='$dob1',gender='$g1',s_question='$q1',s_answer='$a1' where email='$e'";
   
       $Result = mysqli_query($DB_Connect,$sql) or die('Error Fetching User info');
       if($Result!=NULL)
        header("location:default.php");
}

 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Safar</title>






<style type="text/css">
#button{background-color: #DE9683;border:1px solid #DE9683;}
#button:hover{background-color:red;cursor: pointer;border:1px solid red; }
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

</style>
</head>
<body>
<div style="
             position:absolute;
             margin-top: 40px;
             box-shadow: 0px 8px 16px 0px rgba(9,0,0,0.2);;
             margin-top:0px;
             background-color:#f9f9f9;
             margin-left:500px;
             padding: 15px;
             ">
    <table><form action="<?php $_PHP_SELF ?>" method="post">
        <tr>
            <th style="font-size: 20px;font-family: cursive;" align="center">
                Update Information
            </th>
        </tr>
        <tr>
            <td>
                <hr>
            </td>
        </tr>
        <tr>
            <td>
                <input  type="email" name="email" required placeholder="Email" title="Enter Your Email"
                value="<?php echo "$id"; ?>"
                style="
                        border:1px solid #ccc;
                        height: 30px;
                        font-size: 15px;
                        padding: 5px;
                        width: 300px;

                    ">
            </td>
        </tr>
          <tr>
            <td>
                <input  type="text" name="name" required placeholder="Full Name" title="Enter Your Full Name"
                 value="<?php  echo $n; ?>"
                style="
                        border:1px solid #ccc;
                        height: 30px;
                        font-size: 15px;
                        padding: 5px;
                        width: 300px;

                    ">
            </td>
        </tr>
         
         
         <tr>
            <td>
                <input  type="date" name="dob" required placeholder="DOB" title="Enter Your Date Of Birth"
                 value="<?php echo "$dob"; ?>"
                style="
                         border:1px solid #ccc; 
                        height: 30px;
                        font-size: 15px;
                        padding: 5px;
                        width: 300px;

                    ">
            </td>
        </tr>
        <tr>

            <td>
                <input type="radio" name="gender" value="male" <?php if($c==1) echo 'checked';  ?> ><span style="font-family: cursive;">Male</span>
              <input type="radio" name="gender" value="female" <?php   if($c==2) echo 'checked'; ?> ><span style="font-family: cursive;margin-left: 5px;">Female</span>
                <input type="radio" name="gender" value="Others" <?php  if($c==3) echo 'checked'; ?> ><span style="font-family: cursive;margin-left: 5px;">Others</span>
            </td>
        </tr>

             <tr>
            <th style="font-size: 20px;font-family: cursive;" align="center">
                Security Question
            </th>
        </tr>
        <tr>
            <td>
                <hr>
            </td>
        </tr>
        <tr>
            <td>
                <input  type="radio" name="Security_question" value="What is your childhood name?" <?php if($d==1) echo 'checked';  ?> ><span>What is your childhood name?</span>
            </td>
        </tr>
          <tr>
            <td>
              <input  type="radio" name="Security_question" value="What is the name of your pet?"  <?php if($d==2) echo 'checked';  ?> ><span>What is the name of your pet?</span>
            </td>
        </tr>
          <tr>
            <td>
               <input  type="radio" name="Security_question" value="What is your favourite color?"  <?php if($d==3) echo 'checked';  ?>><span>What is your favourite color?</span>
            </td>
        </tr>
          <tr>
            <td>
               <input  type="radio" name="Security_question" value="Who is your favourite actor?"  <?php if($d==4) echo 'checked';  ?>><span>Who is your favourite actor?</span>
            </td>
        </tr>
         <tr>
           <td>
           <input  type="radio" name="Security_question" value="What is your lucky number?"  <?php if($d==5) echo 'checked';  ?>><span>What is your lucky number?</span>
          </td>
        </tr>
         <tr>
            <td>
                <input  type="text" name="answer" required placeholder="Your Answer" title="Enter Your Answer"
                 value="<?php echo $a;  ?>"
                style="
                        border:1px solid #ccc;
                        height: 30px;
                        font-size: 15px;
                        padding: 5px;
                        width: 300px;

                    ">
            </td>
        </tr>
        <tr>
            <td align="right">
                <input id="button" type="submit" name="btn" value="Next" 
                style="
                
                border-radius: 5px;
                height: 40px;
                color: white;
                width: 100px;
                ">
            </td>
        </tr>    

    </table>
   
</div>


</body>
</html>