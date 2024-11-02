<html>
    <head><title>MySql Part-2</title></head>
    <body>
        <center>
            <?php 
                $mycon = mysqli_connect("localhost", "root", "", "mynewdata");
                // echo "Connection Success";
                $sql = "Select * from emp";
                // $sql = "Select * from emp where empid = 503";
                $record = $mycon -> query($sql);
                $n = mysqli_num_rows($record);
                echo "<br>Total Records: $n <br><br>";

                if ($n > 0) {
                    echo "<table border=1>";
                    echo "<tr><th>EmpID</th><th>EmpName</th><th>Salary</th><th>Dept</th></tr>";
                    while ($row = mysqli_fetch_assoc($record)) {
                        echo "<tr><td>$row[empid]</td><td>$row[empname]</td><td>$row[salary]</td><td>$row[dept]</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<br><font color=red size=5>No records found</font>";
                }
                $mycon -> close();

                // if ($n>0) {
                //     while ($row = mysqli_fetch_assoc($record)) {
                //     //    echo "$row[0]  $row[1]  $row[2]  $row[3] <br>";   // mysqli_fetch_row($record)  => by index number
                //        echo "$row[empid]  $row[empname]  $row[salary]  $row[dept] <br>";   // mysqli_fetch_assoc($record)  => by field name
                //     }
                // } else {
                //     echo "<br><font color=red size=5>No records found</font>";
                // }
            ?>
        </center>
    </body>
</html>