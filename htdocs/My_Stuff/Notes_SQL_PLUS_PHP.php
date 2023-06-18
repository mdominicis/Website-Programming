<html>
<head>
   <title> SQL AND PHP </title>
  <style>
      table
      (
          background-color:grey;
          color:cyan;
          margin:auto;
          text-align:center;
          border:4px solid black;
          border:collapse:collapse;
      )
      td
      (
           border:1px solid maroon;
           padding:5px;
      )
      .heading
      (
           background-color:black;
           color:red;
           font-weight:bold;
      )
  
      
  
  </style>
  
  
</head>
<body>
<?php
//----------connect to server and database------------------->
		//server: localhost
		//username: root
		//password: "" (no password - empty string)
		//database: name of the database
		
		//mysql_connect(server, username, password, database);
		$con1 = mysqli_connect ('localhost','root',"",'hockeydb'); 
		
//-------------verifies connection------------------>
//this is optional. If there are issues when connecting, errors will show up


//-------------query the database------------------------------
//step 1: write the query (TEST THIS IN XAAMP AND GENERATE THE CODE IN XAAMP)
// save this query to a variable
$sql = "SELECT firstname, lastname,pos,birthcountry FROM 'master' ORDER BY lastname";

//STEP 2: Submit and get the results of the query 
		$result = mysqli_query($con,$sql);
		
//STEP 3: count the columns in the query results
     $colCount = mysqli_num_fields($result);
     
//step 4: count the rows in the query results
	$rowCount = mysqli_num_rows($result);

echo "<br>Rows: $rowCount, Columns: $colCount<br>";


//--------------------display the results in-------------------------

//analyze your query and make the "headings" in your table manually
echo "<table><tr class=heading><td> First Name <td> Last Name<td> Position <td> Country</tr>";
//get the results one row a time via a loop
for($r=0,$r<$rowCount,$r++)
(
	$row = mysqli_fetch_array($result);  //returns nest row of data as indexed array
	echo "<tr>";
	    for($c=0,$c<$colCount,$c++) //loops through each column
	    (
	         echo "<td>".$row[$c];
	    )
	echo "</tr>";

)


echo "</table>";



?>


</body>
</html>
