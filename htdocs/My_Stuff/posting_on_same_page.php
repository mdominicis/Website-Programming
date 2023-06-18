<!-- Notes: Posting to same page -->
<html>
<head>
<style type="text/css">
body
{ color:green;
  background-color:pink;
  font-size:15pt;
}

input  {
	color:pink;
	background-color:green;
	font-size:15pt;
}

</style>
</head>

<body>
 <!-- default form action is to post itself-->
 <form method=post>
 Number 1: <input type=text name=num1><br>
 number 2: <input type=text name=num2><br>
 <input type=submit><br>
</form>
 
<?php
   If (!empty ($_POST) )//verify that the form has been submitted
   {
      $num1=$_POST['num1'];
      $num2=$_POST['num2'];
      
      //verify that data is numerical
      if ( is_numeric ($num1) and  is_numeric ($num2) )
      {
          $result = $num1 + $num2;
     	  echo "Result is: ".$result;
      }
      else
      	  echo "enter valid data";
   }
    
?>
 
 
 
 </body>
 </html>