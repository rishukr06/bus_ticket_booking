
<!DOCTYPE html>
<html>
<head>

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

        if($p==$pc)
        {
            header("location:securityquestion.php");

        }
        else
        {
            $f=1;
        }
    }   
?>




    <style type="text/css">
        
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
    width: 0px;
}

#button{background-color: #DE9683;border:1px solid #DE9683;}
#button:hover{background-color:red;cursor: pointer;border:1px solid red; }

    </style>
    <script type="text/javascript">
      //   function sub(){
    //document.getElementById("button").submit();
   }
    </script>
</head>
<body>
<div  style="
             position:absolute;
             box-shadow: 0px 8px 16px 0px rgba(9,0,0,0.2);;
             margin-top:30px;
             background-color:#f9f9f9;
             margin-left:0px;
             padding: 15px;
             ">
    <table><form action="<?php $_PHP_SELF ?>" method="post">
        <tr>
            <th style="font-size: 20px;font-family: cursive;" align="center">
                Register
            </th>
        </tr>
        <tr>
            <td>
                <hr>
            </td>
        </tr>
        <tr>
            <td>
                <input  type="email" name="email" placeholder="Email" title="Enter Your Email"
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
                <input  type="text" name="name" placeholder="Full Name" title="Enter Your Full Name"
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
                <input  type="password" name="pass" placeholder="Password" title="Enter Your Password"
                    
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
                <input  type="Password" name="passc" placeholder="Confirm Password" title="Confirm Your Password"
             
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
                <input  type="date" name="dob" placeholder="DOB" title="Enter Your Date Of Birth"
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
                <input type="radio" name="gender" value="male" <?php  if(isset($_POST["gender"])) {if($c==1) echo 'checked'; } ?>><span style="font-family: cursive;">Male</span>
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
                <input  type="radio" name="Security_question" value="What is your childhood name?"><span>What is your childhood name?</span>
            </td>
        </tr>
          <tr>
            <td>
              <input  type="radio" name="Security_question" value="What is the name of your pet?"><span>What is the name of your pet?</span>
            </td>
        </tr>
          <tr>
            <td>
               <input  type="radio" name="Security_question" value="What is your favourite color?"><span>What is your favourite color?</span>
            </td>
        </tr>
          <tr>
            <td>
               <input  type="radio" name="Security_question" value="Who is your favourite actor?"><span>Who is your favourite actor?</span>
            </td>
        </tr>
         <tr>
           <td>
           <input  type="radio" name="Security_question" value="What is your lucky number?"><span>What is your lucky number?</span>
          </td>
        </tr>
         <tr>
            <td>
                <input  type="text" name="answer" placeholder="Your Answer" title="Enter Your Answer"
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
                <input id="button" type="submit" name="s_q" value="Next" 
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

