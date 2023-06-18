<html>
<head>
<style type="text/css">
<?php

	if ( isset($_POST['theme'] ) )
	{
		if ($_POST ['theme']=='G/B')
		{
		    echo "body{color:blue;  font-size:22pt; font-family:consolas; background-color:green;}";
	        echo "input{font-size:18pt;}";
	}
		if ($_POST ['theme']=='Y/B')
		{
			echo "body{color:yellow;  font-size:10pt; font-family:consolas; background-color:black; }"; 
	        echo "input{font-size:18pt}";
	}
	if ($_POST ['theme']=='R/O')
		{
			echo "body{color:orange;  font-size:15pt; font-family:consolas; background-color:red; }"; 
	        echo "input{font-size:18pt}";
	}
}

else 
{
	echo "body{color:maroon;  font-size:18pt; font-family:consolas; background-color:grey; }"; 
	echo "input{font-size:18pt}";
}


?>

</style>
</head>
<center>
<?php
   echo "<b><h1>DOGS</b></h1>"; 
?>
 <hr>
 <image src="dog1.jpeg"> <image src="dog2.jpeg">
 <hr>
 <body>
	<table align=center border=5>
		<tr> <td>Facts About Dogs </tr>
		<tr> <td><ul>
	   <li>Smart
	   <li>Will always be your best friend
	</ul> </tr>
</TABLE>
 <hr>
 
 <form method=post>
Select a Theme:<br>
  <input type=radio name='theme' value="G/B"> Green/Blue
  <input type=radio name='theme' value="Y/B"> Yellow/Black
  <input type=radio name='theme' value="R/O"> Red/Orange
 <br><input type=submit><br>
</form>
 


</center>
 </body>
 </html>