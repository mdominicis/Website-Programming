<html>
<head>
	<title> php variables </title>

</head>
<body>
	<?php
		//Variable ALWAYS Begins With $
		//no need to specify type
		
		$name = "Yadi Molina";
		$age = "39";
		$batAve = 0.281;
		$salary = 2000000;
		
		//variable can be displayed in many ways
		//single quotes and double quotes will react differently
		echo 'Player name: $name<br>';
		echo "Player name: $name<br>";
		echo "Player name: ".$name;
		
		//escape sequences" \"   \$
		// {   } can be used to isolate a variable
		echo "<br>$name's salary is \$$Salary";
		echo "<br>{$name}'s salary is \$$Salary";
		echo "<br>{$name}'s salary is $.$salary";
		echo "<br>".$name." is ".$age." years old";
		
	?>





</body>
</html>