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
First Number: <input type="number" name="num[]"><br> &nbsp &nbsp
Second Number: <input type="number" name="num[]"><br> &nbsp &nbsp
Third Number: <input type="number" name="num[]"><br> &nbsp &nbsp
Fourth Number: <input type="number" name="num[]"><br> &nbsp &nbsp
Fifth Number: <input type="number" name="num[]"><br> &nbsp &nbsp
Choose Sort type: <input type="radio" name="sort" value="ascend">Ascending
                  <input type="radio" name="sort" value="descend">Descending
<input type="radio" name="sort" value="same">As Is<br><br>
<input type="Submit" name="Submit" Value="Click here to Submit">
</form>

<?php
	if ( !empty( $_POST['num'] ) )
	{
		$numArray = $_POST['num'];
		$sort = "";
		if ( isset($_POST["sort"]) ) {
			$sort = ($_POST["sort"]);
			if($sort == "ascend"){
  				sort($numArray);
				echo "Ascending order: ";
			} else if ($sort == "descend"){
				rsort($numArray);
				echo "Descending order: ";
			}else if($sort == "same"){
			echo "As Entered: ";

			}
		}
	


	for ($x=0; $x<count($numArray); $x++)
  	{ 
  		if  ($x != count($numArray)-1)
     			echo "$numArray[$x], ";
  		else
     			echo "$numArray[$x]. ";
	}
       
       

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
