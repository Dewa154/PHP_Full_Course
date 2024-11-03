<html>
    <head><title>Functions in PHP</title></head>
    <body>
        <center>
            <?php 
                
                // function display()        // defination
                // {    
                //        echo "This is a function code";
                // }

                // // main
                // display(); // calling the function
                

                // function sum($a, $b)   // Parameter
                // {
                //     $c = $a + $b;
                //     echo "Addition is: ".$c."<br><br>";
                // }

                // // main
                // sum(10, 20);
                // sum(100, 250);
                // sum(1000, 300);

                // function sum( ...$a )   // parameter var arguments
                // {
                //     $sum = 0;
                //     foreach($a as $m)
                //     {
                //         $sum = $sum + $m;
                //     }
                //     echo "Sum is : ".$sum."<br>";
                // }

                // sum(500, 20);
                // sum(100, 200, 300);
                // sum(1000, 2000, 3000, 500);

                // function factorial($n)
                // {
                //     $f = 1;
                //     while ($n != 0) {
                //         $f = $f*$n;
                //         $n--;
                //     }
                //     return $f;  // return statement
                // }

                // $m = factorial(5);
                // echo "Factorial is : ".$m;


                // function show($a, $b) {     // call by value or copy by value.
                //     $a = $a + 100;
                //     $b = $b + 100;
                //     echo "Value of a is: $a <br>";
                //     echo "Value of b is: $b <br><br>";
                // }

                // function show(&$a, &$b) {     // call by referense or copy by referense.
                //     $a = $a + 100;
                //     $b = $b + 100;
                //     echo "Value of a is: $a <br>";
                //     echo "Value of b is: $b <br><br>";
                // }

                // show(50, 40);
                // $a = 100;
                // $b = 200;
                // echo "Value of a is: $a <br>";
                // echo "Value of b is: $b <br><br>";

                function swap(&$a, &$b) {     // call by referense or copy by referense.
                    $c = $a;
                    $a = $b;
                    $b = $c;
                }

                $a = 50;
                $b = 20;
                echo "Before Swaping: $a and $b <br>";
                swap($a, $b);
                echo "After Swaping: $a and $b <br>";


            ?>
        </center>
    </body>
</html>