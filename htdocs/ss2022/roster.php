<HTML>
<HEAD>
    <TITLE>Assignment3</TITLE>
    <style>
        body{
            margin:auto;
            text-align:center;
            background-color:azure;
            color:blue;
        }
        table {
            background-color:lavender;
            color:blue;
            margin:auto;
            text-align:center;
            border:4px solid black;
            border-collapse:collapse;
        }

        td {
            border:3px solid black;
            padding:5px;
        }
    </style>
</HEAD>
<BODY>
    <h1>Dr. Bailey's Lab</h1>
    <br>
    <a href="PHPSQLAssignment3.php">Home Page</a> | <a href="newstudent.php">Add A Student</a> | <a href="roster.php">Roster</a>
    <br>
    <h3>Roster</h3>
    <?php
    $con = mysqli_connect('LOCALHOST', 'root', '', 'my_database');
    $sql = "SELECT * FROM `student_info` ORDER BY lastname,firstname";
    $result=mysqli_query($con,$sql);
    $colCount=mysqli_num_fields($result);
    $rowCount=mysqli_num_rows($result);
    echo "<table><tr class=heading><td>First Name<td>Last Name<td>Birthday<td>Student Number<td>Phone<td>Grade<td>Email</tr>";
    for($i=0;$i<$rowCount;$i++){
        echo "<tr>";
        $row=mysqli_fetch_array($result);
        for($j=0;$j<$colCount;$j++){
            echo "<td>".$row[$j];
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</BODY>
</HTML>