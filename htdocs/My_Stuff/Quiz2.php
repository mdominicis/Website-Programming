<html>
<head> 
	<title> PHP Quiz2 </title>
<style>
 	<?php
    echo "body{color:green;  font-size:18pt; font-family:arial; background-color:black; }"; 
	echo "input{font-size:18pt}";
	?>
	.white
		{
			color:white;	
		}

	</style>
</head>
<body>

<div>
	<h1>Enter your info please</h1>
	<br>
	<b><form method="post">
	Enter Name: <input type="text" name="name" size=15 background=green><br>
	Enter Number: <input type="number" name="number" min=0 max=10 background=green><br>
	<input type="submit"></form></b>
	
	<?php
        echo "Welcome <span class=white>$_POST[name]</span>, you chose the number <span class=white>$_POST[number]</span><br> You chose a big number. </div>";      
         // <span class=red>$_POST[animal]</span>        
		echo "Your secret number is    "; 
		echo (rand(10, 60) . "<br>")

?>
       

</div></body></html>