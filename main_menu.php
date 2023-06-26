<html>
<head>
<title>Main Menu</title>
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
width: 100%;
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
}
</style>
<div class="container">
<div class="center">
<h1>MAIN MENU</h1>
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
	echo("<center><button onclick=\"location.href='list_programmes.php'\">PROGRAMMES</button>");
        echo("<button onclick=\"location.href='list_modules.php'\">MODULES</button>");
        echo("<button onclick=\"location.href='list_students.php'\">STUDENTS</button>");
	echo("<button onclick=\"location.href='list_grades.php'\">GRADES</button>");
	echo "<br>";
	echo "<br>";
	echo("<button onclick=\"location.href='add_programmes.php'\">ADD PROGRAMMES</button>");
	echo("<button onclick=\"location.href='add_modules.php'\">ADD MODULES</button>");
	echo("<button onclick=\"location.href='add_students.php'\">ADD STUDENTS</button>");
	echo("<button onclick=\"location.href='add_grades.php'\">ADD GRADES</button>");
	echo "<br>";
	echo "<br>";
	echo("<button onclick=\"location.href='delete_programmes.php'\">DELETE PROGRAMMES</button>");
	echo("<button onclick=\"location.href='delete_modules.php'\">DELETE MODULES</button>");
	echo("<button onclick=\"location.href='delete_students.php'\">DELETE STUDENTS</button>");
	echo("<button onclick=\"location.href='delete_grades.php'\">DELETE GRADE</button>");
	echo "<br>";
	echo "<br>";
	echo("<button onclick=\"location.href='logout.php'\">LOGOUT</button></center>");
}
else
{
        echo "Please Log-In: ";
        header("location: login.php");
}
?>
<br>
<br>
<br>
<br>
<p>Jason Leonard © 2022</p>
</div>
</div>
</body>
</html>
