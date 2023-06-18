<html>
<head>

	<title> My Biography </title>
  <style type="text/css">
   body
   
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
  }

</style>
<body>

<?php

$name = "Ayan Ahmed";
$age = 13;
$favfood = "steak";
$favmovie = "Dumb and Dumber";

Print " <br><br><hr>";
print "<h1>My Biography</h1>";
print "<center><TABLE>";
print "  <TR>";
print "    <TD class=browncolor>Name:</TD>";
print "    <TD class=ital>" . $name . "</TD>";
print "  </TR>";
print "  <TR>";
print "    <TD class=browncolor>Age:</TD>";
print "    <TD class=ital>" . $age . "</TD>";
print "  </TR>";
print "  <TR>";
print "    <TD class=browncolor>Favorite Food:</TD>";
print "    <TD class=ital>" . $favfood . "</TD>";
print "  </TR>";
print "   <TR>";
print "    <TD class=browncolor>Favorite Movie:</TD>";
print "    <TD class=ital>" . $favmovie . "</TD>";
print "  </TR>";
print "</TABLE></center><br><br>";
print "<div class=txtsize><span class=bold>" . $name . "</span> is <span class=bold>" . $age . "</span> years old, likes <span class=bold>" . $favfood . ", </span>and watches <span class=bold>" . $favmovie . "</span> all day long.</div><br><br><hr>";
 
?>


</body> 
</html>