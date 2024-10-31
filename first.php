<html>
    <head>
        <title>This is a file of PHP Program</title>
    </head>
    <body>
        <center>
        <marquee>This is my PHP Code</marquee>    
        <?php
            echo "<br><br> <font color=red size=5>Welcome in PHP</font>";
            print("<br><br>This is a free PHP course<br><br>");

            // Variables
            $name = "John Doe";
            $age = 25;

            echo "Name : ".$name;
            echo "<br>Age : ".$age;

            echo "<br><br>";
            $a = 100;
            $b = 50;
            $c = $a + $b;
            echo "<br>Addition of ".$a." + ".$b." = ".$c;

            // PHP variable is Dynamic variable => automatically change variable value according to variable redeclare

            $a = "Hello";
            echo "<br><br>Value of a after 1st redeclaration : ".$a;

            $a = 34.60;
            echo "<br><br>Value of a after 2nd redeclaration : ".$a;
        ?>
        </center>
    </body>
</html>