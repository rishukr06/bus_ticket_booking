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

        if($p!=$pc)
        {
            header("location:registerframe.php");
            $f=1;

        }
        else
        {
            $f=0;
        }
    }   
?>

	<style type="text/css">
		#button{background-color: #DE9683;border:1px solid #DE9683;}
		#button:hover{background-color:red;cursor: pointer;border:1px solid red; }
	</style>
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
    <table>
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
</div>
</body>
</html>