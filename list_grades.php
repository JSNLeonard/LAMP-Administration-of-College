<html>
<head>
<title>List of Grades</title>
</head>
<body>
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
<h1>GRADES</h1>
<?php
session_start();
if ($_SESSION["logged_in"]==true)
{
	$servername="localhost";
	$username="azureuser";
	$password="azureuser";
	$dbname="college";
	$connection= new mysqli($servername, $username, $password, $dbname);
	if ($connection->connect_error)
	{
		die("Failed to connect to database!\n".$connection.connect_error);
	}
	$SQLString="select grades_id, students_id, modules_id, grades_result from grades";
	$result=$connection->query($SQLString);
	if (!$result)
	{
		echo $connection->error."\n";
	}
	else
	{
		while($row=$result->fetch_assoc())
		{
			echo "<table>";
			echo "<tr>";
			echo "<td align='center'>";
			echo "Grade ID: " . $row["grades_id"];
			echo "</td>";
			echo "<td align='center'>";
			echo "Student ID: " . $row["students_id"];
			echo "</td>";
			echo "<td align='center'>";
			echo "Module ID: " . $row["modules_id"];
			echo "</td>";
			echo "<td align='center'>";
                        echo "Grade: " . $row["grades_result"];
                        echo "</td>";
			echo "</tr>";
			echo "</table>";
		}
	}
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo("<center><button onclick=\"location.href='add_grades.php'\">ADD GRADES</button>");
	echo("<button onclick=\"location.href='delete_grades.php'\">DELETE GRADES</button>");
	echo("<button onclick=\"location.href='search_grades.php'\">SEARCH GRADES</button>");
	echo "<br>";
	echo "<br>";
	echo("<button onclick=\"location.href='main_menu.php'\">MAIN MENU</button>");
	echo("<button onclick=\"location.href='list_programmes.php'\">PROGRAMMES</button>");
	echo("<button onclick=\"location.href='list_modules.php'\">MODULES</button>");
	echo("<button onclick=\"location.href='list_students.php'\">STUDENTS</button></center>");
}
else
{
	echo "Please Log-In: ";
	header("location: login.php");
}
?>
</div>
</div>
</body>
</html>
