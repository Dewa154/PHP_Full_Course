<html>
    <head><title>PHP Operator-2</title></head>
    <body>
        <center>
          <?php 
            // $a = 100;
            // echo "Value is: ".$a;

            // $str = "<br><br> Value is: ";
            // $str.= $a;     // $str = $str + $a
            // echo $str;


            // $a = 100;
            // $b = 10;
            // $a.= $b;
            // echo "Value of b is: ".$a;  // $b = 10100

            // Conditional Assignment Operators
            // ?  true : false 

            $a = 50;
            $b = 10;
            $str = $a>$b ? "First No. ".$a." is Grater" : "Second No. ".$b." is Grator";
            echo $str;

            $str = 500 ? "Hello" : "Bye";     // Hello  because 500 is truthy value.
            echo "<br>".$str;

            
             /*
              string Operator(concat)
              .
              .=
             */

          ?>
        </center>
    </body>
</html>