<html>
<head>


</head>
<body>
    <form method=post>
        First Name: <input type="text" name="fname"><br>
        Age: <input type="number" name="age"><br>
        Favorite food: <input type="text" name="favFood"><br>
     
        <!-- puts form info into an indexed array-->
   		Select Pets: &nbsp &nbsp
   		<input type="checkbox" name="pets[]" value="Dog">Dog &nbsp &nbsp
   		<input type="checkbox" name="pets[]" value="Cat">Cat &nbsp &nbsp
   		<input type="checkbox" name="pets[]" value="Other">other &nbsp &nbsp
   		<input type="Submit" name="Submit" Value="Submit">
   		
    </form><hr>
  
  
 
<?php
//indexed arrays-------------------------------------
  echo "Indexed Arrays --> Index starting at 0<br>";
  
  //indexed arrays (auto-Indexed, start at 0, NO NEED TO SPECIFY AN INDEX)
  $teams = array("Blues","Cardinals","Ambush","STFC");
  
  
 //-----printing arrays----
 //Option 1
 print_r($teams); //prints array WITH indexes (useful for testing)
 
 //Option 2 - print out each index manually
 echo "<br>";
 echo "$teams[0], $teams[1], $teams[2], $teams[3]";
 echo "<br>";
 
 //Option 3 - use loops - MUCH MORE EFFICIENT
 $teamCount = count($teams); //gets the length of the array
 for ($x=0; $x<$teamCount; $x++)
 {
	 echo "$teams[$x], ";
 }
     echo "<br>";
	//Option 4 - foreach - THIS IS THE BEST (can't always be used)
    foreach($teams as $value)  //$teams is array, $value (can use any variable) stores the current value
	      echo "$value, ";
	
	echo "<br>";
    foreach($teams as $key => $value)  //$teams is array, $key is index, $value
	      echo "$key --> $value   ";

	      
	echo "<br><br><br>";
//-----Associative Arrays----------------

    echo "Associative Arrays have \"keys\" instead if an \"index\" <br>";
    echo '$_POST and $_GET are associative arrays!!!<br>';
    
    
    //create an associative array
    $studentInfo = array('name' => 'Karly', 'age' => 12, 'grade' => 7 );
    
    //printing -- works the same as indexed arrays
    print_r($studentInfo);
    
    
    echo "<br>";
    
    
    echo "$studentInfo[name] is in grade $studentInfo[grade]";
    
    foreach ($studentInfo as $v)
    	echo "$x, ";
    
    echo "<br><br>";
//------------------ Using arrays from the form ------------
   if ( !empty( $_POST['pets'] ) )
   {
	   $pets = $_POST['pets']; //transfer pets [] array from $_POST['pets'] to $pets
	   
	   for ($x=0; $x<count($pets); $x++)
	   {
		   if  ($x != count($pets)-1)
		      echo "$pets[$x], ";
		   else
		      echo "$pets[$x]. ";
       }
	   
   }

?>