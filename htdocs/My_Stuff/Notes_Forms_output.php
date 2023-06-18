<html>
<head>

	<title>Form Input Notes</title>
	<style type="text/css">
		body{font-family="arial" color:purple; font-size:20pt; }
		input{color:blue; font-size: 20pt; background-color:pink}
	</style>
	
</head>
<body>

<?php
	 $name = $_POST{'name'};
	 $age = $_POST{'age'};
	 $bday = $_POST{'bday'};
	 $food = $_POST{'food'};
	 
	 echo "Your name is:  ".$name."<br>";
	 echo "Your age is: $age"."<br>";
	 echo 'Your Birthday: '.$bday."<br>";
	 echo "Food choice: $food<br><br>";

	 echo $_POST{'name'}." is $_POST{age} years old";
?>


</body>
</html>