<html>
<head>

<title> Strings </title>
  <style type="text/css">
     body {text-align:left; font-size:20pt; font-family:courier; color:blue;}
  </style>
</head>
<body>


<h1> String Notes </h1>
<?php
	$s1 = "Marquette Mustangs";
	$food = "Pizza Soda Steak Pasta Water Burger Wings";
	$names = "Sam, Alex, Chris, Caleb, Maanav, Atharva, Tommy, Max, Aidan, Landon, Abhi, Jenny, Ayan";

//basic string methods
     echo $s1."<br>";
     echo strtoupper($s1)."<br>"; //uppercase (returns a string)
	 echo strrev($s1)."<br>"; //reverses the characters (returns a string)
	 echo $s1." has ".str_word_count($s1)." words in it."; //counts the words (returns list)
	 
	  echo "<br><br>";
//---------------------------------------------------------------------

//count the times a specific character occurs within a string
    //method 1
    $s1_split = str_split($s1); //splits string into array of characters
    print_r($s1_split); //optional (for testing purposes)
    
    echo "<br>";
    
    $count_t=0;
    
    foreach ($s1_split AS $letter)
    {
	    if ($letter == "t" || $letter == "T")
	    $count_t++;
    }
    echo "There are $count_t \"T\'s in the phrase \"$s1\"";
    
    echo "<br><br>";
	//method 2
	$count_m = substr_count($s1,"M"); //case sensitive!!!!
	echo "There are $count_m \"T\'s in the phrase \"$s1\"";
	echo "<br><br>";
	
	//method 3
	$s1_split = str_split($s1); //splits string into array of characters
	$counts = array_count_values($s1_split); //returns associative array
	print_r($counts);
	
	echo "<br>Number of e's: ".$counts['e'];
	echo "<br><br>";
//---------------------------------------------------------------------------------
  //explode() function - creates arrays based on a separator value(delimiter)
  //break food string into array with " " as separator
  $food_split = explode(" ",$food);
  print_r($food_split);
  
  echo "<br><br>";
  
//both of the following have additional issues to deal with
  $names_Split1 = explode(" ",$names);
  print_r($names_Split1);
  echo "<br><br>";
  
  $names_Split2 = explode(",",$names);
  print_r($names_Split1);
  echo "<br><br>";
  
//trimming can remove cheeacters from the front/back end of Strings
  //trim the comma from $names_Split1
      $x=0;
      $names_count=count($names_Split1);
      for ($x=0; $x<$names_count; $x++)
      {
	      $names_Split1[$x] = trim($names_Split2[$x], ",");
	  }
	print_r($names_Split1);
    echo "<br><br>";
    
    //trim whitespace from $names_Split2
     $x=0;
     foreach($names_Split2 AS $val)
	{
		$names_Split2[$x] = trim($val," ");
		$x++;
    }
     print_r($names_Split1);
     echo "<br<br>";
?>	

</body>
</html>