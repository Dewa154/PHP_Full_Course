<html>
    <head><title>Delete Data from MYSQL Database</title></head>
    <body>
        <center>
           <?php
             $mycon = mysqli_connect("localhost", "root", "", "mynewdata");
             session_start();
             $eid = $_SESSION['$empid'];
             $sql = "DELETE FROM emp WHERE empid = ?";
             $ps = $mycon -> prepare($sql);
             $ps -> bind_param("i", $eid);
             $ps -> execute();
             echo "<br>Data Deleted Successfully";
           ?>
        </center>
</html>