<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    
     input[type="text"]{
      background: red;
    }
      input[type="checkbox"]{
        opacity: 0;
    
    }
  </style>
  <script type="text/javascript">
  var a =1;
  var a1=1;
  var a2=1;
    function color(x) {
       //var a=1;
      if(a==1)
      {
        x.style.background="orange";
        return a++;
        
      }
       if(a==2)
      {
          x.style.background="#ccc";
          a=a-1;
      }
    }
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

   
  </script>
</head>
<body>
<form action="t1.php">
<div style="position:relative;width: 40px;height:40px;background:yellow ">

<div id="checkbox"  style="background-color: #ccc ;position:relative; width: 20px;height: 20px" onclick="color(this)">
<input type="checkbox"  name="s1" value="1">
</div>

<div id="checkbox"  style="background-color: #ccc ;position:relative; width: 20px;height: 20px" onclick="color1(this)">
<input type="checkbox"  name="s2" value="2">
</div>

<div id="checkbox"  style="background-color: #ccc ;position:relative; width: 20px;height: 20px" onclick="color2(this)">
<input type="checkbox"  name="s3" value="3">
</div>

<input type="submit"></div>
</form>
</body>
</html>