<HTML>

<HEAD>
    <TITLE>Assignment1</TITLE>
    <style>
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

        .heading {
            background-color: Black;
            color: red;
            font-weight: bold;
        }
    </style>

</HEAD>

<BODY>
    <?php
    $con = mysqli_connect('LOCALHOST', 'root', '', 'covid_mo');
    $sql = "SELECT date,state,deathsTotal,deathIncrease,hospitalizedCurrently FROM `missouri_history`";
    $result=mysqli_query($con,$sql);
    $colCount=mysqli_num_fields($result);
    echo "<table><tr class=heading><td>Date<td>State<td>Total Deaths<td>Increase in Deaths<td>Currently Hospitalized</tr>";
    for($i=0;$i<10;$i++){
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