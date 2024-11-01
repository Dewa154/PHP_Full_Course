<html>
    <head><title>PHP Page 2</title></head>
    <body>
        <center>
           <?php
             $user = $_COOKIE['username'];
             $pass = $_COOKIE['password'];
             echo "Welcome ".$user."<br>";
             echo "Your Password is: ".$pass;
           ?>
        </center>
    </body>
</html>