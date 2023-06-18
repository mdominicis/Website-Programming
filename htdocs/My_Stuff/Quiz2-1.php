<html>
<center>
<head> 
	<title> PHP Quiz2 </title>
<style>

 input {
  	background-color: green;
}

 table {
	border-top-color: red;
	Border-top-style: solid;
	border-bottom-color: red;
	Border-bottom-style: solid;
	border-left-color: purple;
	Border-left-style: solid;
	border-right-color: purple;
	Border-right-style: solid;
	background-color: orange;
	width: 50%;
     
}
 	<?php





    echo "body {color:green;  font-size:18pt; font-family:arial; background-color:black; }"; 
	echo "input {font-size:18pt}";
	?>
	.white
		{
			color:white;	
		}

	</style>

</head>

<body>

<div>
	<h1>Enter your info please:</h1>
	<br>
	<b><form method="post">
	Enter Name: <input type="text" name="name" size=15 background=green><br>
	Enter Number: <input type="number" name="number" min=0 max=10 background=green><br>
	<input type="submit"></form></b>



	<table border=8><tr><td><font face="Arial" size="5"><center>
	
<?php
	$num = $secnum = 0;
	$name = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
   		if ( isset($_POST["number"]) ) {
      		$name = $_POST["name"];
     		$num  = $_POST["number"];
     		 $secnum = round((($num * 32) / 7), 0);

	}
	}
        echo "Welcome <span class=white>$name</span>, you chose the number 
          <span class=white>$num</span> <br>";
        if( $num > 5)
	echo "You chose a <span class=white>big</span> number<br>";  
        else 
	     echo "You chose a <span class=white>small</span> number<br>";    

 

         echo "Your secret number is <span class=white>$secnum</span><br>";
   


?>
</div>
       </tr></td></table></center>

</div></body></center></html>