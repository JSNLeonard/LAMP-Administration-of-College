<html>
<head>
<title>Removing Student Data</title>
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
<h1>REMOVING STUDENT DATA</h1>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "azureuser", "azureuser", "college");
if($conn === false)
{
	die("ERROR: Could not connect. "
	. mysqli_connect_error());
}
$students_id = $_REQUEST['students_id'];
$sql = "DELETE FROM students WHERE students_id='$students_id'";
if(mysqli_query($conn, $sql))
{
	echo "<h3>Student Removed from the Database Successfully</h3>";
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
