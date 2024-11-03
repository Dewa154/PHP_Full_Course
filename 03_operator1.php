<html>
    <head><Title>PHP Operator-1</Title></head>
    <body>
        <center>
           <?php 
                // Arithmetic Operators
               //  echo (10+10)."<br>";
               //  echo (10-10)."<br>";
               //  echo (10*2)."<br>";
               //  echo (10/2)."<br>";
               //  echo (10%2)."<br>";

                // Relational Operators
               //  echo (10 == 10)."<br>";
               //  echo (10 != 10)."<br>";
               //  echo (10 < 10)."<br>";
               //  echo (10 > 10)."<br>";
               //  echo (10 <= 10)."<br>";
               //  echo (10 >= 10)."<br>";

               // $a = 50;   // int
               // $b = '50'; // string
               // echo ($a == $b)."<br>"; // true
               // echo ($a === $b)."<br>"; // false (data type)

               // $a = 45;
               // $b = 30;
               // $c = 15;
               // // echo ($a <=> $b)."<br>"; // true  +1 0 -1   => Spaceship Operator

               // if (($a === $b) === $c) {
               //    echo "Hello";
               // } else {
               //    echo "Bye Bye";
               // }
               

               // 4. Increment and Decrement Operators
               // $a = 50;
               // ++$a;    // $a = $a + 1   // pre
               // echo $a."<br>";  // 51
               // $a++;    // $a = $a + 1   // post
               // echo $a."<br>";  // 52

               // Increament
               // $a = 50;
               // $b = ++$a;     // $a = $a + 1   $b = $a

               // echo "a = ".$a."<br>";  
               // echo "b = ".$b."<br><br>"; 

               // $a = 50;
               // $b = $a++;     // $b = $a   $a = $a + 1   

               // echo "a = ".$a."<br>";  
               // echo "b = ".$b."<br>"; 

               
               // Decreament
               // $a = 40;
               // $b = --$a;     // $a = $a - 1   $b = $a

               // echo "a = ".$a."<br>";  
               // echo "b = ".$b."<br><br>"; 

               // $a = 40;
               // $b = $a--;     // $b = $a   $a = $a - 1   

               // echo "a = ".$a."<br>";  
               // echo "b = ".$b."<br>"; 

               // $a = 5;
               // $b = ++$a;
               // $c = $b--;
               // $a = ++$b;
               // $d = $a + ++$a + $a++;

               // echo $a."<br>";
               // echo $b."<br>";
               // echo $c."<br>";
               // echo $d."<br>";


               // 5. Logical Operators
               // && --- and, || --- or, ! --- not , xor

               // Logical Operator working with truthy value and falsy value.
               // truthy value
               // falsy value
               // 0, "", null, false
               // 1, "0", 0.0, "false", array(), " ",
               // true, 5, 3.14, "hello", array(1,2)
               // note: True => any number
            
               // $a = 10;
               // $b = 5;
               // if (!(++$a>50 && ++$b>5)) {
               //    echo "Hello Friends <br>";
               // } else {
               //    echo "Bye Friends <br>";
               // }

               // echo $a."<br>";
               // echo $b."<br>";


               // $a = 0;
               // $b = !$a;

               // echo $a."<br>";   // 0
               // echo $b."<br>";   // 1
               

              /*
                 Types of operators
                 1. Arithmetic Operators
                 // +, -, *, **, /, %

                 2. Relational Operators
                 // ==, !=, <, >, <=, >=, <> => Not equal to

                 3. Assignment Operators
                 // =, +=, -=, *=, /=, %=

                 4. Increment and Decrement Operators
                 // ++, --
                 5. Logical Operators
                 // &&, ||,!, xor

                 6. String Operators
                 // ., .=

                 7. Array Operators
                 // [],.[]

                 8. Conditional Operators
                 // if, else, elseif, switch, case, break, continue, :

              */

           ?>

        </center>
    </body>
</html>