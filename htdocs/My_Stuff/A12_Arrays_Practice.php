<html>
<head>
	<title> Arrays Practice </title>
	<style type="text/css">





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
Color: <input type="color" id="head" name="head" value="#e66465">
<input type="Submit" name="Submit" Value="Submit">
</form>

<?php
if ( !empty( $_POST['number'] ) )
{
$numbers = $_POST['num'];
echo "As Entered:";






			for ($x=0; $x<count($num); $x++)
	   {
		   if  ($x != count($num)-1)
		      echo "$num[$x], ";
		   else
		      echo "$num[$x]. ";
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

