<html>
    <head><title>PHP Page 1</title></head>
    <body>
        <center>
            <?php 
                $user = $_POST['username'];
                $pass = $_POST['password'];

                $cookieName = "username";
                $cookieValue = $user;

                $cookiePass = "password";
                $cookiePassValue = $pass;
                
                setcookie($cookieName, $cookieValue, time() + (86400 * 30));
                setcookie($cookiePass, $cookiePassValue, time() + (86400 * 30));
                
                echo "Username : $user <br>";
                echo "Password : $pass";
            ?>
             <form action="11B_Page2.php">
                <input type="submit" value="Submit">
             </form>
        </center>
    </body>
</html>