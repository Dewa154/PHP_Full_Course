<html>
    <head><title>PHP String Related functions</title></head>
    <body>
        <center>
            <?php 

                $str1 = "indore";
                $str2 = "Indore";
                if (strcmp($str1, $str2)==0) {
                    echo "Same";
                } else {
                    echo "Not Same";
                }
                

                // $mystr = "Vivek Uprit Data 123 Flair";
                // echo "$mystr <br><br>";     // vivek uprit data 123 flair
                // // $mystr = ucwords($mystr);   // Vivek Uprit Data 123 Flair

                // $mystr = lcfirst($mystr);       // vivek Uprit Data 123 Flair
                // echo "$mystr <br>";        

                // $mystr = "Data flair free course of java script every course is free in Data flair free hello free";
                // // $n = substr_count($mystr, "free", 21);   // 3
                // $n = substr_count($mystr, "free");          // 4
                // echo $n;
                

                // $newstr = strtoupper($mystr);
                // echo "String in uppercase: ".strtoupper($newstr)."<br>";

                // $newarray = str_split($mystr, 4);
                // print_r($newarray);

                // $newstr = chunk_split($mystr, 2, '.');
                // echo "Splitted string is: ".$newstr;

                // $n = str_word_count($mystr);
                // echo "Total word is: $n";

                // $n = strlen($mystr);
                // echo "$mystr <br>";
                // echo "Length of string is $n";
            ?>
        </center>
    </body>
</html>