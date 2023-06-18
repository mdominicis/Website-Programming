<HTML>
  <HEAD>
  	<title> Assignment2</title>
  	<style>
  .div1 {
     width: 80%;
     border: 5px solid red ;
     background-color: lightblue;
     margin: auto;
     padding: 50px;
     color: orange;
  }
 .div2 {
     width: 80%;
     border: 5px solid green;
     background-color: orange;
     margin: auto;
     padding: 50px;
     color: Blue;
  }
 .div3 {
     width: 80%;
     border: 5px solid blue ;
     background-color: green;
     margin: auto;
     padding: 50px;
     color: red;
  }
 .div4 {
     width: 80%;
     border: 5px solid red ;
     background-color: yellow;
     margin: auto;
     padding: 50px;
     color: red;
  }
 .div5 {
     width: 80%;
     border: 5px solid orange ;
     background-color: black;
     margin: auto;
     padding: 50px;
     color: white;
  }
 .div6 {
     width: 80%;
     border: 5px solid red ;
     background-color: blue;
     margin: auto;
     padding: 50px;
     color: white
  }
 .div7 {
     width: 80%;
     border: 5px solid black;
     background-color: yellow;
     margin: auto;
     padding: 50px;
     color: green;
  }  	
  </style>
  </HEAD>
<BODY>
<center> <h2>Generation Results:</h2></center>
<?php
$name1 = ucfirst($_POST["name1"]); 

/* $date = date_create($_POST["dob"]);     // Challenge Part1 Explore date function 
  $year = date_format($date,"Y"); */


     /*  Part 1 */
 $year = substr($_POST["dob"], 0 , 4);     // Challenge Part1 Explore substring function 



$curr_yr = date("Y");

$gi_gen = "GI Generation.";
$si_gen = "The Silent Generation.";
$un_gen = "Unkown Generation between 1925 and 1927!";
$bb_gen = "Baby Boom Generation.";
$gx_gen = "Generation X.";
$mi_gen = "Millennial Generation.";
$gz_gen = "Generation Z or iGen.";


/* Part1 */


 if ($year >= 1901 and $year <= 1924) {
  echo "<div class=div1><p>Hi $name1, you are part of ". $gi_gen ."</p>";
  echo "<p>You were born in $year and will turn " . ($curr_yr - $year) ." years old in $curr_yr.</p></div></br>";

} elseif ($year >= 1925 and $year <= 1927)  {
  echo "<div class=div2><p>Hi $name1, you are part of ".  $un_gen ."</p>";
  echo "<p>You were born in $year and will turn " . ($curr_yr - $year) ." years old in $curr_yr.</p></div></br>";

} elseif ($year >= 1928 and $year <= 1945)  {
  echo "<div class=div3><p>Hi $name1, you are part of $si_gen </p>";
  echo "<p>You were born in $year and will turn " . ($curr_yr - $year) ." years old in $curr_yr.</p></div></br>";

} elseif ($year >= 1946 and $year <= 1964)  {
  echo "<div class=div4><p>Hi $name1, you are part of $bb_gen </p>";
  echo "<p>You were born in $year and will turn " . ($curr_yr - $year) ." years old in $curr_yr.</p></div></br>";

} elseif ($year >= 1965 and $year <= 1980)  {
  echo "<div class=div5><p>Hi $name1, you are part of " .$gx_gen ."</p>";
  echo "<p>You were born in $year and will turn " . ($curr_yr - $year) ." years old in $curr_yr.</p></div></br>";

} elseif ($year >= 1981 and $year <= 1996)  {
  echo "<div class=div6><p>Hi $name1, you are part of $mi_gen </p>";
  echo "<p>You were born in $year and will turn " . ($curr_yr - $year) ." years old in $curr_yr.</p></div></br>";

} elseif ($year >= "1997" and $year <= $curr_yr)  {
  echo "<div class=div7><p>Hi $name1, you are part of $gz_gen </p>";
  echo "<p>You were born in $year and will turn " . ($curr_yr - $year) ." years old in $curr_yr.</p></div></br>";
} 

/* Challenge Part1 */

/* Using function which is a block of statements that can be used repeatedly in a program. */

/*
function dispayMsg($div, $fname, $gen, $this_yr , $dob_yr) {
  echo "<div class=div". $div ."><p>Hi $fname, you are part of " .$gen ."</p>";
  echo "<p>You were born in $dob_yr and will turn " . $this_yr - $dob_yr ." years old in $this_yr.</p></div></br>";
}
	
 if ($year >= 1901 and $year <= 1924) {
     	dispayMsg(1, $name1, $gi_gen, $curr_yr, $year );
} elseif ($year >= 1925 and $year <= 1927)  {
  	dispayMsg(2, $name1, $un_gen, $curr_yr, $year );
} elseif ($year >= 1928 and $year <= 1945)  {
  	dispayMsg(3, $name1, $bb_gen, $curr_yr, $year );
} elseif ($year >= 1946 and $year <= 1964)  {
  	dispayMsg(4, $name1, $bb_gen, $curr_yr, $year );
} elseif ($year >= 1965 and $year <= 1980)  {
  	dispayMsg(5, $name1, $gx_gen, $curr_yr, $year );
} elseif ($year >= 1981 and $year <= 1996)  {
   	dispayMsg(6, $name1, $mi_gen, $curr_yr, $year );
} elseif ($year >= "1997" and $year <= $curr_yr)  {
  	dispayMsg(7, $name1, $gz_gen, $curr_yr, $year );
} */

?>

</BODY>
</HTML>