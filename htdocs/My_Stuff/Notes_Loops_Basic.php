<html>
<head>
  <title>LOOP NOTES</title>
  <style type="text/css">
  body {
	  font-size:20pt; font-family:"consolas";
	}

	.blue {
		color:blue;
	}

	.green {
		color: green;
	}

	table {
		margin:auto;
		border:2px red solid;
	}

	td {
		border:1px green solid; padding:5x; height:60px; width:100px; text-align:center;
	}
	</style>
</head>
<body>
   <?php
   //counting using loops
   $num=10;
   $x=0;
   while ($x <= $num)
   { 
	   echo "$x, ";
	   $x++;
}

	echo "<br><br>";
	$x=0;
	
	do     //do-while loop
	{
		echo "$x,  ";
		$x++;
} while ($x <= $num   );
   
  echo "<br><br>";
  
  for ($y=0; $y<15; $y++)
  {
	  echo "$y, ";
  }
	echo "<br><br>";
  //----------------------------------------------------
  // alternating using if-else and mod
  for ($m=0; $m<5; $m++)
  {
  		if ($m%2==0)
  		    echo  " -Marquette- ";
  		else
  			echo "-Mustangs-";
}

echo "<br><br>";

    for ($y=0; $y<15; $y++)
    {
	    if ($y%2==0)
	    	echo "<span class=blue>";
	    else
	    	echo "<span class=green>";
	 } 
	 echo "$y, ";
	    
	    
	   //-----------------------------------------------------------------
	   //Build a table row using loops
	   $numC= 6; //number of columns
	  
	   
	  echo "<table>";
	  echo "<tr>";
	  for ($z=1; $z<$numC; $z++)
	  {
		  echo "<td> column $z";
      }
	  echo "</tr>";
	  echo "</table>";
	  echo "<br><br>";
	   
	    //-----------------------------------------------------------------
	   //Build a table row using loops
	   $numC = 5; //number of columns
	   $numR = 2; //number of rows
	   
	  echo "<table>";
	  for ($r=1; $r<=$numR; $r++) //creates the rows
	 {
	  echo "<tr>";
	  for ($c=1; $c<$numC; $c++) //creates the  columns
	  {
		  echo "<td> column $c";
	  }
		  echo "</tr>";
      }
	  echo "</table>";
	  echo "<br><br>";
   ?>

</body>
</html>