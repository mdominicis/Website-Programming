<html>
<head>

	<title> PHP Index</title>
	<style type="text/css">
	body{color:purple; font-size:20pt; background-color:orange}
		input{color:blue; font-size: 20pt; background-color:grey}	 

   
   h1 {
   	
    	color: purple;
   }	

  .bold {
      
      	font-weight: bold;
  }

  .txtsize {
    	font-size: 20px; 
  }

  .ital { 
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
 
 input
 {
	color: brown; 
	font-size:10pt;
 }
 

  td:first-child {
    	Padding-left: 30px;
	</style>
	
</head>
<body>

<?php
	 $act = $_POST{'act'};
	 $num = $_POST{'num'};
	 $person = $_POST{'person'};
	 echo "<TABLE><td class=input>";

	 print " My favorite activity is <div class=txtsize><span class=bold> $act </span> and my favorite number is <span class=bold> $num </span> and my favorite person is <span class=bold> $person </span></div><br><br>";
?>

