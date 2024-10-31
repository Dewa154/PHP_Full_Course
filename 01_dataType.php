<html>
    <head>
        <title>DataType in PHP Program</title>
    </head>
    <body>
        <center>

        <?php
            class Test {
                public $name = "John";
                public $age = 25;
            }
        
            $a = 150;
            $b = 30;

            echo "a = ".$a." and b = ".$b."<br><br>";

            if ($a>$b) {
                echo "Grater Number is ".$a;
            } else {
                echo "Grater Number is ".$b;
            }


            // $a = 150;     // int
            // echo $a."<br><br>";

            // $b = 15.5;    // float
            // echo $b."<br><br>";

            // $c = "Hello";  // string
            // echo $c."<br><br>";

            // $d = TRUE;     // boolean
            // echo $d."<br><br>";
            
            // $ar = array("Apple", "Banana", "Cherry");      // array
            // print_r($ar)."<br><br>";

            // echo "<br><br>";

            // $ar1 = array("Name" => "John", "Age" => 25);     //array
            // print_r($ar1)."<br><br>";

            // $e = null;     // null
            // echo $e."<br><br>";

            // t = new Test();

            /*
                int
                float
                string
                boolean
                array   
                object
                null
                
            */

        ?>
        </center>
    </body>
</html>