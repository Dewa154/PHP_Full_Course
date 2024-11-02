<html>
    <head><title>Delete Data from MYSQL Database</title></head>
    <body>
        <center>
            <form method="post" action="15_Delete_Data.php">
                <table border="1">
                    <tr>
                        <th>Employee ID For Delete</th>
                        <td><input type="text" name="empid" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Search" name="submitbtn"></td>
                    </tr>
                </table>
            </form>
            <?php
                if (isset($_POST['submitbtn'])) {
                    $eid = $_POST['empid'];
                    $mycon = mysqli_connect("localhost", "root", "", "mynewdata");
                    $sql = "SELECT * FROM emp WHERE empid = $eid";
                    $record = $mycon->query($sql);
                    $n = mysqli_num_rows($record);
                    
                    if ($n > 0) {
                        session_start();
                        $_SESSION['$empid'] = $eid;
                        echo "<br>Employee Details: <br>";
                        echo "<table border=1>";
                        echo "<tr><th> Emp. ID </th><th> Employee Name </th><th> Salary </th><th> Department </th></tr>";
                        while ($row = mysqli_fetch_assoc($record)) {
                            echo "<tr>";
                            echo "<td>$row[empid]</td>
                                  <td>$row[empname]</td>
                                  <td>$row[salary]</td>
                                  <td>$row[dept]</td>";
                            echo "<form method='post' action='15A_Delete_Data.php'>
                                    <td><input type='submit' value='Delete'></td>
                                  </form>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "<br><font color=red size=5>No records found</font>";
                    }
                    $mycon->close();
                }
            ?>
        </center>
    </body>
</html>