<html>
<head>
<title>Checkerboard</title>
<style type="text/css">
	.green
	{
	background-color:green;
	width:100px;
	height:100px;
	}
	.blue
	{
	background-color:blue;
	width:100px;
	height:100px;
	}
</style>
</head>
<body>
<h1>Making boxes</h1>
<form method=post>
	Enter Number of Rows: <input type=num name='rows' min=1><br>
	Enter Number of Columns: <input type=num name='col' min=1><br>
	Enter Column color: <input type=color name='ccol'><br>
	Enter Row color: <input type=color name='rcol'><br>
	<input type='submit'>
</form>

	<?php
	
	if (!empty( $_POST ) )
	{
		$colCount = $_POST['col'];
		$rowCount = $_POST['rows'];
		$color = 0; //used to alternate what color each row starts with
		
		
	echo "<table>";
	

	
	//creates the number of specified rows
	for ($row=0; $row<$rowCount; $row++)
	{
	echo "<tr>";
	  
	//adjust $color to switch between 0 and 1
	if ($row%2==0)
	     $color=0;
	else
	   $color=1;
	
	
	//create a row with specified number of columns
	for ($col=0; $col<$colCount; $col++)
	{
		if ($color%2==0)
		   echo "<td class=blue>";
		else
		   echo "<td class=green>";
		
		   
		  $color++;
    }
    echo "</tr>";
    }
    echo "</table>";
}
		
    ?>
    
</body>
</html>