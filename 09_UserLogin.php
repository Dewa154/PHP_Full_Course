<html>
    <head><title>User Login In PHP</title></head>
    <body>
        <center>
            <form method=post action=''>
                <table border=1>
                    <tr>
                    <th>User Name</th>
                    <td><input type="text" name=txtuser></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input type="password" name=txtpass></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Submit" name="submitbtn">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </form>
            <?php
                if (Isset($_POST['submitbtn'])) {
                    $user=$_POST['txtuser'];
                    $pass=$_POST['txtpass'];
                    // echo $user;
                    // echo $pass;
    
                    if (strcmp($user, "vivek")==0 and strcmp($pass, '123456')==0) {
                        // echo "<font color=green size=5>You are a valid user</font>";
                        header("location:09A.Checklogin.php");  // Redirect to 05_functions.php page on successful login
                    } else {
                        echo "<font color=red size=5>Invalid User</font>";
                    }
                }
            ?>
        </center>
    </body>
</html>