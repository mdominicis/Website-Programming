<html>
<head>

	<title> Your Biography </title>
	<style type="text/css">
		 body {
   	text-align: center;
   }   
   
   h1 {
   	
    	color: red;
         #text-align: center;
   }	

  .bold {
      
      	font-weight: bold;
  }

  .txtsize {
    	font-size: 20px; 
  }

  .ital { 
  	color: black;
      	font-style: italic;
      	font-size: 20px;  
  }

  table, th, td {
  	width: 40%;
	
 
  }
  td {
  	color: brown;
 	text-align: left;
 	font-size: 20px; 
 	
 }

  td:first-child {
	text-align: right;
    	Padding-left: 30px;
	</style>
	
</head>
<body>

<hr>
<h1><u> My Biography </u></h1>

<?php
	 $name = $_POST{'name'};
	 $age = $_POST{'age'};
	 $bday = $_POST{'bday'};
	 $food = $_POST{'food'};
	 echo "<center><TABLE><td class=input>"
	 
	 echo "Your name is: ".$name."<br>";
	 echo "Your age is: $age"."<br>";
	 echo "Your Birthday: ".$bday. "<br>";
	 echo "Your favorite food choice is: $food<br><br>";

	 echo $_POST{'name'}."is $_POST{'age'} years old,"." likes $_POST{'food'},"." and is born on $_POST{'bday'}." ;
?>

<hr>

</body>
</html>