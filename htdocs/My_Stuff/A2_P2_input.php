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
 
 input
 {
	color: brown; 
	font-size:10pt;
 }
 

  td:first-child {
	text-align: right;
    	Padding-left: 30px;
	</style>
	
</head>
<body>

<hr>
<h1><u> Your Biography </u></h1>
<form method=post action="A2_P2_output.php" target=_blank>
<center><TABLE>
<td class=input> 
Name: <input type="text" name="name" size=30><br>
Birthday: <input type="date" name="bday" size=30><br>
Age: <input type="number" name="age" size=30><br>
Favorite food: <input type="text" name="food" size=30><br>
<input type="submit">
</form>
</table></center>
<hr>
</body>
</html>