<html>
<head>

	<title> About Me </title>
	 <center><img src="ready-quiz.jpg" width="250" height="200"> <br><br><br><br>
<style type="text/css">
 body { 
         font-family:"Times New Roman", Times, serif;
        
      }


 input[type=submit] {
 color: white;
 background-color: grey;
 font-size: 15px;
}
.bg-green {
  color: black;
 background-color: green;
 border-width: 3px;
}
.bg-white {
  color: white;
 background-color: white;
 border-width: 3px;
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

<form method=post>
Enter a Question: <br>
<input type="text" name="question" size="50" class"bg-white"><br> &nbsp &nbsp
Enter the Answer: <br>
<input type="text" name="answer" size="50" class="bg-green"><br> &nbsp &nbsp<br>
<input type="Submit" name="AddQuestion" Value="Add Question"><br><br>
<input type="Submit" name="ClrDB" Value="Clear the Database"><br>
</form>

<?php
//----------connect to server and database------------------->
		//server: localhost
		//username: root
		//password: "" (no password - empty string)
		//database: name of the database
		
		//mysql_connect(server, username, password, database);
		$conn = mysqli_connect('localhost','root',"",'quiz'); 
 if(!empty($_POST) )
   {
	    

$answer=$_POST['answer'];
$question=$_POST['question'];
echo print_r($_POST);

		
//-------------verifies connection------------------>
//this is optional. If there are issues when connecting, errors will show up


//-------------insert row into the database------------------------------
//step 1: write the query (TEST THIS IN XAAMP AND GENERATE THE CODE IN XAAMP)
// save this query to a variable
if (isset($_POST['AddQuestion'])) {
   $sql = "INSERT INTO `quiz` (`question`, `answer`) VALUES ('.$question.','.$answer.')";
	if (mysqli_query($conn, $sql)) {
  		echo "New record created successfully";
	} else {
  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

}
elseif (isset($_POST['ClrDB'])) {
        $sql = "DELETE FROM `quiz`";
	if (mysqli_query($conn, $sql)) {
  		echo "All records deleted successfully";
	} else {
  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
    }
}
?>
 </body>
 </font>
 </center>
 </html>