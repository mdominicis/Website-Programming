<html>
<head>
<title> Arrays Practice </title>
<style type="text/css">
 body { color:maroon;
         font-weight: bold;
	}

    </style>
</head>
<body><center>
<h1><u><b> Please Enter Information Asked Below: </u></b></h1>
<form method=post>
First word: <input type="text" name="word1"><br> &nbsp &nbsp
Second word: <input type="text" name="word2"><br> &nbsp &nbsp
Third word: <input type="text" name="word3"><br> &nbsp &nbsp
Fourth word: <input type="text" name="word4"><br> &nbsp &nbsp
Last word: <input type="text" name="word5"><br> &nbsp &nbsp
Choose Sort type: <input type="radio" name="sort" value="ascend">Ascending
                  <input type="radio" name="sort" value="descend">Descending
<input type="radio" name="sort" value="same">As Is<br><br>
<input type="Submit" name="Submit" Value="Click here to Submit">
</form>

<?php
	

	if ( !empty( $_POST ) )
	{
     		$wordArray = array();
 		
		foreach ($_POST as $key => $value) {
  			if (substr($key, 0, 4) == 'word') {  
   				$wordArray[$key] = $value;
     				
  			}
		}
			
         
		$sort = "";
		if ( isset($_POST["sort"]) ) {
			$sort = ($_POST["sort"]);
			if($sort == "ascend"){
  				natcasesort($wordArray);
				echo "Ascending order: ";
			} else if ($sort == "descend"){
				natcasesort($wordArray);
				$wordArray = array_reverse($wordArray);
				echo "Descending order: ";
			}else if($sort == "same"){
			echo "As Entered: ";

			}
		}
		$x = 0;
		foreach ($wordArray as $key => $value) {	
				
			if  ($x != count($wordArray)-1)
     				echo "$wordArray[$key], ";
  			else
     				echo "$wordArray[$key]. ";
			$x++;    				
  			
		}

       
//print_r($_POST);


		

       
       

//rsort($numbers);

//$arrlength = count($numbers);
//for($x = 0; $x < $arrlength; $x++)
//{
  //echo $numbers[$x];
  //echo "<br>";
//}
}
?>


</center>
</body>
</html>