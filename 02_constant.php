<html>
    <head><Title>PHP Constant</Title></head>
    <body>
        <center>
           <?php 
            // Define a constant using the define() function
               define('PI', 3.14);
               $r = 12.45;
               $a = PI*$r*$r;
               $c = 2*PI*$r;
               echo "Area of circle = ". $a;
               echo "<br>Circumference of circle = ". $c;

           ?>

        </center>
    </body>
</html>