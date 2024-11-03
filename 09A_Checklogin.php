<html>
    <head><title>User Login In PHP</title></head>
    <body>
        <center>
          <?php
            $_POST['txtuser']=$user;
            $_POST['txtpass']=$pass;
            // echo $user;
            // echo $pass;

            if (strcmp($user, "vivek")==0 and strcmp($pass, '123456')==0) {
                echo "<font color=green size=5>You are a valid user</font>";
            } else {
                echo "<font color=red size=5>Invalid User</font>";
            }
          ?>
        </center>
    </body>
</html>