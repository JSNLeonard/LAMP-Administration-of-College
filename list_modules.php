<html>
<head>
<title>List of Modules</title>
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
<h1>MODULES</h1>
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
	$SQLString="select modules_id, modules_name, programmes_id from modules";
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
			echo "Module ID: " . $row["modules_id"];
			echo "</td>";
			echo "<td align='center'>";
			echo "Module Name: " . $row["modules_name"];
			echo "</td>";
			echo "<td align='center'>";
			echo "Program ID: " . $row["programmes_id"];
			echo "</td>";
			echo "</tr>";
			echo "</table>";
		}
	}
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo("<center><button onclick=\"location.href='add_modules.php'\">ADD MODULES</button>");
	echo("<button onclick=\"location.href='delete_modules.php'\">DELETE MODULES</button>");
	echo "<br>";
	echo "<br>";
	echo("<button onclick=\"location.href='main_menu.php'\">MAIN MENU</button>");
	echo("<button onclick=\"location.href='list_programmes.php'\">PROGRAMMES</button>");
	echo("<button onclick=\"location.href='list_students.php'\">STUDENTS</button>");
	echo("<button onclick=\"location.href='list_grades.php'\">GRADES</button></center>");
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
