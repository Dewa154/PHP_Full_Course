<html>
    <head><title>PHP Array</title></head>
    <body>
        <center>
            <?php 
                // Array Index=> 0      1       2          3        4          5     6    7
                $ar = array("indore", "pune", "delhi", "raipur", "bilaspur", 34.66, TRUE, 456);       // simple array
                // Reverse Index=> -8    -7      -6       -5        -4        -3     -2    -1
                
                echo "<br><br>";
                $newArray = array_slice($ar, -4, 2, true);
                print_r($newArray);

                // $ar1 = ["a"=>"indore", "b"=>"pune", "c"=>"delhi"];          // Associative array

                // print_r($ar);
                // echo "<br><br>";
                // print_r($ar1);

                // $i = 0;
                // while($i < count($ar)){
                //     echo "<br>".$ar[$i];
                //     $i++;
                // }

                // for ($i=0; $i < count($ar); $i++) { 
                //     echo "<br>".$ar[$i];
                // }

                /*
                  array
                */
            ?>
        </center>
    </body>
</html>