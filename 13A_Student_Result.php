<html>
    <head><title>Insert Student Result</title></head>
    <body>
        <center>
            <form method="post" action="13A_Student_Result.php">
                <table border="1">
                    <tr>
                        <th>Roll No</th>
                        <td><input type="number" name="rollno" required></td>
                    </tr>
                    <tr>
                        <th>Student Name</th>
                        <td><input type="text" name="studentname" required></td>
                    </tr>
                    <tr>
                        <th>Hindi Marks</th>
                        <td><input type="number" name="hindi" required></td>
                    </tr>
                    <tr>
                        <th>English Marks</th>
                        <td><input type="number" name="english" required></td>
                    </tr>
                    <tr>
                        <th>CS Marks</th>
                        <td><input type="number" name="cs" required></td>
                    </tr>
                    <tr>
                        <th>Physics Marks</th>
                        <td><input type="number" name="physics" required></td>
                    </tr>
                    <tr>
                        <th>Math Marks</th>
                        <td><input type="number" name="math" required></td>
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
                    $rollno = $_POST['rollno'];
                    $studentname = $_POST['studentname'];
                    $hindi = $_POST['hindi'];
                    $english = $_POST['english'];
                    $cs = $_POST['cs'];
                    $physics = $_POST['physics'];
                    $math = $_POST['math'];

                    // Calculate total marks
                    $total_marks = $hindi + $english + $cs + $physics + $math;

                    // Database connection
                    $mycon = mysqli_connect("localhost", "root", "", "student_results");
                    if (!$mycon) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    echo "Connection Success";

                    // Prepare and bind
                    $sql = "INSERT INTO results (rollno, studentname, hindi, english, cs, physics, math, total_marks) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                    $ps = $mycon->prepare($sql);
                    $ps->bind_param("isiiiiii", $rollno, $studentname, $hindi, $english, $cs, $physics, $math, $total_marks);

                    // Execute the statement
                    if ($ps->execute()) {
                        echo "<br>Data Inserted Successfully";
                    } else {
                        echo "<br>Error: " . $sql . "<br>" . $mycon->error;
                    }

                    // Close the statement and connection
                    $ps->close();
                    $mycon->close();
                }
            ?>
        </center>
    </body>
</html>