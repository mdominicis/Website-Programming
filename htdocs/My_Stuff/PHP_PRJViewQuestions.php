<html>
<head>

	<title> About Me </title>
	 <center><img src="ready-quiz.jpg" width="250" height="200"> <br><br><br><br>
<style type="text/css">
 body { 
         font-family:"Times New Roman", Times, serif;
        
      }

table
      {
          background-color:grey;
          color:cyan;
          margin:auto;
          text-align:center;
          border:4px solid black;
          border:collapse:collapse;
      }
      td
      {
           border:1px solid maroon;
           padding:5px;
      }
      .heading
      {
           background-color:black;
           color:red;
           font-weight:bold;
      }
    </style>	
</head>
	
 <body bgcolor=black>
 <font color=white size=4>
 <center>

 <h1>Please Make a Selection</h1>
 <hr size=1 color=white width=75%>
 <a href="PHP_PRJHome.php"> Home </a> |
 <a href="PHP_PRJAddQuestions.php"> Add Questions </a> |
 <a href="PHP_PRJViewQuestions.php"> View Questions </a> |
 <a href="PHP_PRJTakeQuiz.php"> TAKE QUIZ </a> 
 <hr size=1 color=white width=75%>

 


<?php
echo "Below is a list of ALL questions/answers in the database<br>";
//----------connect to server and database------------------->
		//server: localhost
		//username: root
		//password: "" (no password - empty string)
		//database: name of the database
		
		//mysql_connect(server, username, password, database);
		$conn = mysqli_connect('localhost','root',"",'quiz'); 

	    


		
//-------------verifies connection------------------>
//this is optional. If there are issues when connecting, errors will show up


//-------------query the database------------------------------
//step 1: write the query (TEST THIS IN XAAMP AND GENERATE THE CODE IN XAAMP)
// save this query to a variable
$sql = "SELECT q_id, question, answer FROM `quiz`";

//STEP 2: Submit and get the results of the query 
		$result = mysqli_query($conn,$sql);
		
//STEP 3: count the columns in the query results
     $colCount = mysqli_num_fields($result);
     
//step 4: count the rows in the query results
	$rowCount = mysqli_num_rows($result);

//echo "<br>Rows: $rowCount, Columns: $colCount<br>";


//--------------------display the results in-------------------------

//analyze your query and make the "headings" in your table manually
echo "<table><tr class=heading><td> Q_ID <td> Question <td> Answer</tr>";
//get the results one row a time via a loop
for($r=0;$r<$rowCount;$r++)
{
	$row = mysqli_fetch_array($result);  //returns nest row of data as indexed array
	echo "<tr>";
	    for($c=0;$c<$colCount;$c++) //loops through each column
	    {
	         echo "<td>".$row[$c];
	    }
	echo "</tr>";

}


echo "</table>";



?>

 </body>
 </font>
 </center>
 </html>