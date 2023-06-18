<HTML>

<HEAD>
    <TITLE>Assignment2</TITLE>
    <style>
        body{
            margin:auto;
            text-align:center;
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

        .heading {
            background-color: Black;
            color: red;
            font-weight: bold;
        }
    </style>

</HEAD>

<BODY>
    <h1>NHL Schedule 2022</h1>
    <form method="post">
  	<table class=table>
  		<tr> <td>Choose a Date: <td><input type="date" name="date"> 
  	</table>
  	<br>
  	<input type="Submit">
  </form> 
    <?php
    if(!empty($_POST)){
    $date=$_POST['date'];
    $con = mysqli_connect('LOCALHOST', 'root', '', 'hockey_2021_2022');
    $sql = "SELECT date,home,visitor FROM `schedule_2021_2022` WHERE date = '$date' ";
    $result=mysqli_query($con,$sql);
    $colCount=mysqli_num_fields($result);
    $rowCount=mysqli_num_rows($result);
    echo "<table><tr class=heading><td>Date<td>Home<td>Away</tr>";
    for($i=0;$i<$rowCount;$i++){
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