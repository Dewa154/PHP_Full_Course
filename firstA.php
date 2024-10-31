<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a file of PHP Program</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .welcome {
            color: red;
            font-size: 2em;
        }
        .content {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <marquee>This is my PHP Code</marquee>
    
    <div class="content">
        <div class="welcome">Welcome to PHP</div>
        <p>This is a free PHP course</p>
        <p>Name: John Doe</p>
        <p>Age: 25</p>
        
        <?php
            // Performing addition
            $num1 = 100;
            $num2 = 50;
            $sum = $num1 + $num2;
            echo "<p>Addition of $num1 + $num2 = $sum</p>";
            
            // Variable redeclaration
            $a = "Hello";
            echo "<p>Value of a after 1st redeclaration: $a</p>";
            $a = 34.6;
            echo "<p>Value of a after 2nd redeclaration: $a</p>";
        ?>
    </div>
</body>
</html>