<HTML>
<HEAD>
<!--
BEFORE DOING THESE NOTES, STUDENTS NEED TO: 
1) Create a NEW database in XAMPP: "my_database"
2) Create a NEW table in my_database: "pets" 
3) Create the followng fields in the "pets" table
		pet_name (varchar)
		pet_type (varchar)
		owner_name (varchar)
		pet_age (int)
		pet_bday (varchar)		
		
DON'T FORGET AN ID COLUMN THAT IS UNIQUE AND AUTO INCREMENTS
-->

   <TITLE> Populating a Databse </title>
   <STYLE type="text/css">
   		    body
   			{
	   		    color:blue;
	   		    font-family:arial;
	   		    font-size:25;
	   		    text-align:center;
	   		    	
   			} 
   			table
   			{
	   			border:2px red solid;
	   			margin:auto;
   			}
   			td
   			{
	   			border:1px cyan solid;
   			}
   			.right
   			{
	   			text-align:right;
   			}
   
   		    		
   			   
   </STYLE>	
</HEAD>
<BODY>

<h3>Enter your pet info: </h3> 

<!-- Users enter data using a form-->
<form  method=get>
 <table>
   <tr><td class=right>Pet Name:      <td><input type="text" name="pet_name">
   <tr><td class=right>Pet Type:      <td><input type="text" name="pet_type">
   <tr><td class=right>Owner Name:    <td><input type="text" name="owner_name">
   <tr><td class=right>Pet Age:       <td ><input type="number" name="pet_age">
   <tr><td class=right>Pet Birthday:  <td><input type="date" name="pet_bday">
 </table>
  <br><input type="submit" value="Submit">  
</form> 
<?php

//connect to databas
   $con = mysqli_connect('localhost','root','','my_database');
   
   if(!empty($_GET) )
   {
	    $pn=$_GET['pet_name'];
        $pt=$_GET['pet_type'];
        $po=$_GET['owner_name'];
        $pa=$_GET['pet_age'];
        $pbd=$_GET['pet_bday'];
   

//create the query (no quotes for fields, single quotes for string values)
    $sql = "INSERT INTO pets (pet_name,pet_type,owner_name,pet_age,pet_bday) VALUES ('$pn','$pt','$po','$pa','$pbd')";
    
    //submit the query
    $result= mysqli_query($con, $sql);
    
    //optional confirmation (END USERS LIKE TO SEE THIS!!!!!!)
    if ($result)
        echo "Success!!";
    else 
        echo "Submission Failed!";
        
   }
?>
</BODY>
</HTML> 