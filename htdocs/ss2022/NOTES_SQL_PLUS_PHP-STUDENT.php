<HTML>

<HEAD>
    <TITLE>SQL AND PHP</TITLE>

    <!--NOTE TO TEACHER:  style AFTER table is made -->
    <style>
        table {
            background-color:gray;
            color:cyan;
            margin:auto;
            text-align:center;
            border:4px solid black;
            border-collapse:collapse;
        }

        td {
            border:1px solid maroon;
            padding:5px;
        }

        .heading {
            background-color: Black;
            color: red;
            font-weight: bold;
        }
    </style>

</HEAD>

<BODY>

    <h1> My first PHP and SQL Page </h1>

    <?php
    //----------connect to server and database----------- 
    //SERVER:  localhost
    //USERNAME: root
    //PASSWORD: ""   (no password - empty String)
    //DATABASE:  name of the database

    //mysqli_connect(server, username,  password , database);


    $con = mysqli_connect('LOCALHOST', 'root', '', 'hockeydb');



    //----------------verifies connection------------------
    //This is optional.  If there are issues when connecting, errors would display 




    //------------------ Query the databse ---------------
    //Step 1:   Write the query (TEST THIS IN XAMPP AND GENERATE THE CODE IN XAMPP)
    //          Save this query to a variable

    $sql = "SELECT firstname,lastname,pos,birthcountry FROM `master` ORDER BY lastname";


    //Step 2:   Submit and get the results of the query 

    $result=mysqli_query($con,$sql);
    //Step 3:   Count the columns in the query results
    $colCount=mysqli_num_fields($result);


    //Step 4:   Count the rows in the query results 


    $rowCount=mysqli_num_rows($result);

    echo "Rows: $rowCount, Columns: $colCount";


    //------------------ Display the Results in a Table---------------

    //Analyze your query and make the "headings" in your table manually 
    echo "<table><tr class=heading><td>First Name<td>Last Name<td>Position<td>Birth Country</tr>";


    //Get the results one row at a time via a loop(there are other ways to get the data, this is easiest)

    for($i=0;$i<20;$i++){
        echo "<tr>";
        $row=mysqli_fetch_array($result);
        for($c=0;$c<$colCount;$c++){
            echo "<td>".$row[$c];
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>
</BODY>

</HTML>