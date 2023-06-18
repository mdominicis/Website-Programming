<html>
    <head>
        <title>Variable Notes - PHP</title>
    </head>
    <body>
        <?php
            //Variables ALWAYS begin with $
            //PHP does not require type to be specified
            $name = "Yadi";
            $age = 40;
            $batAve = 0.281;
            $salary = 2000000;
            //display variables
            //single quote vs double quote matters
            echo "Player name: $name<br>";
            echo 'Player name: $name<br>';
            echo "Player name: ".$name;
            //escape sequences: \" \$
            //{} can be used to isolate the variable
            echo "<br>{$name}'s salary is \${$salary}";
            
        ?>
    </body>
</html>