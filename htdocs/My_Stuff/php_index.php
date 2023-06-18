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


<h1><u> Enter your info here:</u></h1>
<form method=post action="results.php" target=_blank>
<TABLE>
<td class=input> 
Favorite Sport/Activity: <input type="text" name="act" size=30><br><br>
Favorite Number: <input type="number" name="num" size=30><br><br>
Favorite Person: <input type="text" name="person" size=30><br><br>
<input type="submit">
</form>
</table>
</body>
</html>