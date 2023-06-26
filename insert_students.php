<html>
<head>
<title>Inserting Student Data</title>
<link rel="stylesheet" href="style.php">
<style>
.container
{
height: 100%;
width: 100%;
position: relative;
}
.center
{
margin: 0;
position: absolute;
top: 50%;
left: 50%;
width: 75%;
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
}
</style>
<div class="container">
<div class="center">
<h1>INSERTING STUDENT DATA</h1>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "azureuser", "azureuser", "college");
if($conn === false)
{
	die("ERROR: Could not connect. "
	. mysqli_connect_error());
}
$students_fname = $_REQUEST['students_fname'];
$students_lname = $_REQUEST['students_lname'];
$students_id = $_REQUEST['students_id'];
$students_dob = $_REQUEST['students_dob'];
$students_a1 = $_REQUEST['students_a1'];
$students_a2 = $_REQUEST['students_a2'];
$students_a3 = $_REQUEST['students_a3'];
$students_a4 = $_REQUEST['students_a4'];
$programmes_id = $_REQUEST['programmes_id'];
$programmes_duration = $_REQUEST['programmes_duration'];
$sql = "INSERT INTO students VALUES ('$students_id', '$students_lname', '$students_fname', '$students_dob', '$students_a1', '$students_a2', '$students_a3', '$students_a4', '$programmes_id', '$programmes_duration')";
if(mysqli_query($conn, $sql))
{
	echo "<h3>Student Added to the Database Successfully</h3>";
}
else
{
	echo "ERROR: Hush! Sorry $sql. "
	. mysqli_error($conn);
}
mysqli_close($conn);
header("refresh:5; url=list_students.php");
?>
</div>
</div>
</body>
</html>
