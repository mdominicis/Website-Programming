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
        body{
            text-align:center;
            margin:auto;
            background-color:azure;
            color:blue;
        }
    </style>

</HEAD>

<BODY>
    <h1>Hockey Stats Central</h1>
    <br>
    Select stats:
    <form method="post">
    <input type="radio" name="stat" value="g">Goals(g)
    <input type="radio" name="stat" value="pts">Points(pts)
    <input type="radio" name="stat" value="pim">Penalty Minutes(pim)
    <br>
    <br>
    Sort By:<br>
    <input type="radio" name="sort" value="ASC">Ascending
    <input type="radio" name="sort" value="DESC">Descending
    <br>
  	<input type="Submit">
  </form> 
    <?php
    if(!empty($_POST)){
    $stat=$_POST['stat'];
    $sort=$_POST['sort'];

    $con = mysqli_connect('LOCALHOST', 'root', '', 'hockeydb');
    $sql = "SELECT year,CONCAT(firstname, ' ', lastname) AS name,$stat FROM `scoring` INNER JOIN master ON master.playerid=scoring.playerid WHERE g!=0 AND pts!=0 AND pim!=0 ORDER BY `scoring`.`g`  $sort";
    $result=mysqli_query($con,$sql);
    $colCount=mysqli_num_fields($result);
    echo "<table><tr class=heading><td>Year<td>Name<td>$stat</tr>";
    for($i=0;$i<200;$i++){
        echo "<tr>";
        $row=mysqli_fetch_array($result);
        for($j=0;$j<$colCount;$j++){
            echo "<td>".$row[$j];
        }
        echo "</tr>";
    }
    echo "</table>";
    }
    ?>
</BODY>

</HTML>