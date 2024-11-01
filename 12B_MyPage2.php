<html>
    <head><title>My Page 1</title></head>
    <body>
        <center>
           <?php 
             session_start();

             $uname = $_SESSION['username'];
             $upass = $_SESSION['password'];

             echo "Welcome, ".$uname."<br>";
             echo "Your password is: ".$upass."<br>";

             session_unset();
             session_destroy();
            ?>
        </center>
    </body>
</html>