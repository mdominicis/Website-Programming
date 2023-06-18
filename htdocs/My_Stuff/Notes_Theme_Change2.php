<!-- Notes:Changing themes Example 1 -->
<html>
<head>
<style type="text/css">
body {
<?php
     if  (!empty($_POST) )
     {
	     $color = $_POST['submit'];
         echo "color:$color;";
     }
     
     
      /*
     {
	     $color = $_POST['submit'];
	     if ($color=='Red')
	       echo  "color:red;";
	     if ($color=='Green')
	       echo  "color:green;";
	       if ($color=='Blue')
	       echo  "color:blue;";  
	       }
	       */
?>
}

</style>
</head>

<body>
 <!-- default form action is to post itself-->
 <form method=post>
Select a Theme:<br>
    <input type="submit" name="submit" value="Red">
    <input type="submit" name="submit" value="Green">
    <input type="submit" name="submit" value="Blue">
</form>
 
<?php
   echo "<h1>Welcome to my page!</h1>";
   echo "PHP is great!";  
    
?>
 
 
 
 </body>
 </html>