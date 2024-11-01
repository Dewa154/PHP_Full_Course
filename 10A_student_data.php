<?php
// Retrieve the posted data
$student_id = $_POST['student_id'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$father_name = $_POST['father_name'];
$dob = $_POST['dob'];
$mo_no = $_POST['mo_no'];

// Display the student data
?>

<html>
<head>
	<title>Student Data</title>
</head>
<body>
	<h1>Student Data</h1>
	<table border="1">
		<tr>
			<th>Student ID</th>
			<td><?php echo $student_id; ?></td>
		</tr>
		<tr>
			<th>Name</th>
			<td><?php echo $name; ?></td>
		</tr>
		<tr>
			<th>Username</th>
			<td><?php echo $username; ?></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><?php echo $password; ?></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><?php echo $email; ?></td>
		</tr>
		<tr>
			<th>Father's Name</th>
			<td><?php echo $father_name; ?></td>
		</tr>
		<tr>
			<th>Date of Birth</th>
			<td><?php echo $dob; ?></td>
		</tr>
		<tr>
			<th>Mobile Number</th>
			<td><?php echo $mo_no; ?></td>
		</tr>
	</table>
</body>
</html>