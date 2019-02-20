<!DOCTYPE html>
<html>
<head>
<title>Safar</title>

     <?php  
    $f=2;
    if(isset($_POST['btn']))
    {
        $e=$_POST["email"];
        $n=$_POST["name"];
        $p=$_POST["pass"];
        $pc=$_POST["passc"];
        $dob=$_POST["dob"];
        $g=$_POST["gender"];
        $q=$_POST["Security_question"];
        $a=$_POST["answer"];


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

        if("$p"=="$pc")
        {
           $dbc = mysqli_connect('localhost','root','','safar') or die('Error Establishing Connection');

     $query = "insert into reg (email,name,password,dob,gender,s_question,s_answer) values('$e','$n','$p','$dob','$g','$q','$a')";
        
             $check=mysqli_query($dbc,$query) or die('Error Fetching tables');
             
             if($check!=0)
             {
              header("location:safar.php");
             }
            else
                echo "Unable to Register";

        }
        else
        {
            $f=1;
        }
    }   
?>


<style type="text/css">
#button{background-color: #DE9683;border:1px solid #DE9683;}
#button:hover{background-color:red;cursor: pointer;border:1px solid red; }
body{
  margin:0px;
}
input[type="date"]::-webkit-clear-button {
    display: block;
}
input[type="date"]::-webkit-inner-spin-button { 
    display: none;
}
input[type="date"]::-webkit-calendar-picker-indicator {
    color: #2c3e50;
}
::-webkit-scrollbar{
    width: 0px;}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #920A10 ;
    font-family: candara;
    padding-left: 10px;
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
    background-color: red;
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
    z-index: 1;
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
    <li><span style="padding: 0;margin-left: 10px;margin-right: 1040px;"><img src="busicon.jpg" height="40px" width="50px"></span></li>
  <li class="dropdown">
    <a  class="dropbtn">Login/Register</a>
    <div class="dropdown-content">
      <a id="myBtn">Login</a>
      <a href="register.php">Register</a>
    </div>
  </li>
  <li><a href="#">Contact us</a></li>


</ul>
</div>
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
                SignUp
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
                value="<?php if(isset($_POST["email"])) echo $_POST["email"]; ?>"
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
                 value="<?php if(isset($_POST["name"])) echo $_POST["name"]; ?>"
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
                <input  type="password" name="pass" required placeholder="Password" title="Enter Your Password"
                    
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
                <input  type="Password" name="passc" required placeholder="Confirm Password" title="Confirm Your Password"
             
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
                 value="<?php if(isset($_POST["dob"])) echo $_POST["dob"]; ?>"
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
                <input type="radio" name="gender" value="male" <?php if(isset($_POST["gender"])) {if($c==1) echo 'checked'; } ?> ><span style="font-family: cursive;">Male</span>
              <input type="radio" name="gender" value="female" <?php if(isset($_POST["gender"])) { if($c==2) echo 'checked';} ?> ><span style="font-family: cursive;margin-left: 5px;">Female</span>
                <input type="radio" name="gender" value="Others" <?php if(isset($_POST["gender"])) { if($c==3) echo 'checked';} ?> ><span style="font-family: cursive;margin-left: 5px;">Others</span>
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
                <input  type="radio" name="Security_question" value="What is your childhood name?" <?php  if(isset($_POST["Security_question"])) {if($d==1) echo 'checked'; } ?> ><span>What is your childhood name?</span>
            </td>
        </tr>
          <tr>
            <td>
              <input  type="radio" name="Security_question" value="What is the name of your pet?"  <?php  if(isset($_POST["Security_question"])) {if($d==2) echo 'checked'; } ?> ><span>What is the name of your pet?</span>
            </td>
        </tr>
          <tr>
            <td>
               <input  type="radio" name="Security_question" value="What is your favourite color?"  <?php  if(isset($_POST["Security_question"])) {if($d==3) echo 'checked'; } ?>><span>What is your favourite color?</span>
            </td>
        </tr>
          <tr>
            <td>
               <input  type="radio" name="Security_question" value="Who is your favourite actor?"  <?php  if(isset($_POST["Security_question"])) {if($d==4) echo 'checked'; } ?>><span>Who is your favourite actor?</span>
            </td>
        </tr>
         <tr>
           <td>
           <input  type="radio" name="Security_question" value="What is your lucky number?"  <?php  if(isset($_POST["Security_question"])) {if($d==5) echo 'checked'; } ?>><span>What is your lucky number?</span>
          </td>
        </tr>
         <tr>
            <td>
                <input  type="text" name="answer" required placeholder="Your Answer" title="Enter Your Answer"
                 value="<?php  if(isset($_POST["answer"])) { echo $_POST["answer"]; } ?>"
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
    <div align="center" style="color: red;padding-top: 5px;"><b><?php if($f==1) echo "Password Does Not Matched"; ?></b></div>
</div>




</body>
</html>
