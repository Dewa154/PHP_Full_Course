<html>
    <head><title>My Page 1</title></head>
    <body>
        <center>
           <?php 
              $user = $_POST['username'];
              $pass = $_POST['password'];

              echo "Username : $user";
              echo "<br> Password : $pass";

              session_start();
              $_SESSION['username'] = $user;
              $_SESSION['password'] = $pass;
           ?>
           <form method=post action="12B_MyPage2.php">
             <input type=submit value="Submit">
           </form>
        </center>
    </body>
</html>