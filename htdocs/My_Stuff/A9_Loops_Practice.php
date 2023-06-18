<html>
<head>
		<title> Assignment#9 - Loops Practice  </title>
	<style type="text/css">
  body {
	  color:brown;
       }
  h1   {
	  color:brown;
       }


</style>
</head>
<body>
 <form method=post>
Enter a starting number: <input type="number" name='number'><br>
Starting balance: $ <input type="number" name='balance'><br>
Daily spending: $ <input type="number" name='spend'><br>
<input type=submit><br>
</form>

<?php
	if(!empty($_POST['number']) && !empty($_POST['balance']) && !empty($_POST['spend']))
{
			$x=$_POST['number'];
		while($x>=0)
{
	if($x==0){
		echo "BLASTOFF!";
	break;
}
		echo "$x, ";
	$x--;
}
	echo "<br>";

		$x=$_POST['number'];

		do{
	if($x==0){
		echo "BLASTOFF!";
		break;
}
		echo "$x, ";
		$x--;

}	while($x>=0);

		echo "<br>";

	for($y=$_POST['number'];$y>=0; $y--){
		if($y==0){
		echo "BLASTOFF!.<br><br>";
		break;
}
		echo "$y, ";
}

	echo "<br>";
// balance after spending
		$s=$_POST['spend'];
		$y=$_POST['balance'];
		$c=1;
	while($y>0)
{
		echo "After $c days you have \$ $y left.<br>";
		$c++;
		$y=$y-$s;
}

}

//...............................................

//Alternating using if-else and mod



//alternating colors
//echo "<br><br>";

//for($y=0;$y<=15; $y++){
// if($y%2==0){
// echo "<span class=green>$y, </span>";
// }

// else {
// echo "<span class=blue>$y, </span>";
// }
//}

//echo "<br><br>";

?>
</body>
</html>