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
    <a href="PHPSQLAssignment3.php">Home Page</a> | <a href="newstudent.php">Add A Student</a> | <a href="roster2.php">Roster</a>
    <br>
    <h3>Add a Student</h3>
    <form method=post>
        <table>
            <tr><td>First Name:<td><input type=text name=fname></tr>
            <tr><td>Last Name:<td><input type=text name=lname></tr>
            <tr><td>Birthday<td><input type=date name=bday></tr>
            <tr><td>Phone:<td><input type=text name=phone></tr>
            <tr><td>Grade:<td><input type=number name=grade></tr>
            <tr><td>Email:<td><input type=text name=email></tr>
        </table>
        <input type=submit>
    </form>
    <?php
        if(!empty($_POST)){
            echo "Form submitted!";
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $bday=$_POST['bday'];
            $phone=$_POST['phone'];
            $grade=$_POST['grade'];
            $email=$_POST['email'];
            $con = mysqli_connect('LOCALHOST', 'root', '', 'my_database');
            $sql = "INSERT INTO `student_info` (firstname,lastname,birthday,phone,grade,email) VALUES ('$fname','$lname','$bday','$phone','$grade','$email')";
            $result=mysqli_query($con,$sql);
        }
    ?>
</BODY>
</HTML>