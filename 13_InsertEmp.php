<html>
    <head><title>Insert Employee Data</title></head>
    <body>
        <center>
            <form method="post" action="13_InsertEmp.php">
                <table border="1">
                    <tr>
                        <th>Employee ID</th>
                        <td><input type="text" name="empid"></td>
                    </tr>
                    <tr>
                        <th>Employee Name</th>
                        <td><input type="text" name="empname"></td>
                    </tr>
                    <tr>
                        <th>Salary</th>
                        <td><input type="text" name="salary"></td>
                    </tr>
                    <tr>
                        <th>Department</th>
                        <td><input type="text" name="dept"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="Submit" name="submitbtn"></td>
                    </tr>
                </table>
            </form>
            <?php
                // 1.) Connection
                // 2.) Query
                // 3.) Execute
                // 4.) Close connection

                if (isset($_POST['submitbtn']))
                {
                    $empid = $_POST['empid'];
                    $empname = $_POST['empname'];
                    $salary = $_POST['salary'];
                    $dept = $_POST['dept'];

                    $mycon = mysqli_connect("localhost", "root", "", "mynewdata");
                    echo "Connection Success";
                    $sql = "Insert into emp values(?,?,?,?)";
                    $ps = $mycon -> prepare($sql);
                    $ps -> bind_param("isis", $empid, $empname, $salary, $dept);
                    $ps -> execute();
                    echo "<br>Data Inserted Successfully";
                }
            ?>
        </center>
    </body>
</html>