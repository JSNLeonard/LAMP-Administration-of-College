<html>
<head>
<title>List of Programmes</title>
</head>
<body>
<link rel="stylesheet" href="style.php">
<style>
.container
{
width: 100%;
height: 100%;
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
<h1>PROGRAMMES</h1>
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
	$SQLSelect="select programmes_name, programmes_id, programmes_code, programmes_level, programmes_duration from programmes";
	$select=$connection->query($SQLSelect);
	if (!$select)
	{
		echo $connection->error."\n";
	}
	else
	{
		while($row=$select->fetch_assoc())
		{
			echo "<table>";
			echo "<tr>";
			echo "<td align='center'>";
			echo "Name: " . $row["programmes_name"];
			echo "</td>";
			echo "<td align='center'>";
			echo "Program ID: " . $row["programmes_id"];
			echo "</td>";
			echo "<td align='center'>";
			echo "Code: " . $row["programmes_code"];
			echo "</td>";
			echo "<td align='center'>";
                        echo "Level: " . $row["programmes_level"];
                        echo "</td>";
			echo "<td align='center'>";
                        echo "Years: " . $row["programmes_duration"];
                        echo "</td>";
			echo "</tr>";
			echo "</table>";
		}
	}
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo("<center><button onclick=\"location.href='add_programmes.php'\">ADD PROGRAMMES</button>");
	echo("<button onclick=\"location.href='delete_programmes.php'\">DELETE PROGRAMMES</button>");
	echo "<br>";
	echo "<br>";
	echo("<button onclick=\"location.href='main_menu.php'\">MAIN MENU</button>");
	echo("<button onclick=\"location.href='list_modules.php'\">MODULES</button>");
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
