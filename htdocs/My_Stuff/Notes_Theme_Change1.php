<!-- Notes:Changing themes Example 1 -->
<html>
<head>
<style type="text/css">
<?php

	if ( isset($_POST['theme'] ) )
	{
		if ($_POST ['theme']=='G/B')
		{
		    echo "body{color:blue;  font-size:18pt; font-family:consolas; background-color:green;}";
	        echo "input{font-size:18pt;}";
	}
		if ($_POST ['theme']=='Y/B')
		{
			echo "body{color:yellow;  font-size:18pt; font-family:consolas; background-color:black; }"; 
	        echo "input{font-size:18pt}";
	}
}

else 
{//Default color theme (needed for first page load)
	echo "body{color:orange;  font-size:18pt; font-family:consolas; background-color:grey; }"; 
	echo "input{font-size:18pt}";
}


?>

</style>
</head>

<body>
 <!-- default form action is to post itself-->
 <form method=post>
Select a Theme:<br>
  <input type=radio name='theme' value="G/B"> Green/Blue
  <input type=radio name='theme' value="Y/B"> Yellow/Black
 <br><input type=submit><br>
</form>
 
<?php
   echo "<h1>Welcome to my page!</h1>";
   echo "PHP is great!";  
    
?>
 
 
 
 </body>
 </html>