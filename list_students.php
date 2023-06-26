<html>
<head>
<title>List of Students</title>
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
width: 85%;
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
}
</style>
<div class="container">
<div class="center">
<h1>STUDENTS</h1>
<?php
session_start();
if ($_SESSION["logged_in"]==true)
{$servername="localhost";
        $username="azureuser";
        $password="azureuser";
        $dbname="college";
        $connection= new mysqli($servername, $username, $password, $dbname);
        if ($connection->connect_error)
        {
               die("Failed to connect to database!\n".$connection.connect_error);
        }
        $SQLString="select students_fname, students_lname, students_id, students_dob, students_a1, students_a2, students_a3, students_a4, programmes_id, programmes_duration from students";
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
                        echo "First Name: " . $row["students_fname"];
                        echo "</td>";
			echo "<td align='center'>";
			echo "Last Name: " . $row["students_lname"];
			echo "</td>";
			echo "<td align='center'>";
			echo "ID: " . $row["students_id"];
			echo "</td>";
			echo "<td align='center'>";
			echo "DoB: " . $row["students_dob"];
			echo "</td>";
			echo "<td align='center'>";
			echo "Address 1: " . $row["students_a1"];
			echo "</td>";
			echo "<td align='center'>";
			echo "Address 2: " . $row["students_a2"];
			echo "</td>";
			echo "<td align='center'>";
			echo "Address 3: " . $row["students_a3"];
			echo "</td>";
			echo "<td align='center'>";
			echo "Address 4: " . $row["students_a4"];
			echo "</td>";
			echo "<td align='center'>";
			echo "Program ID: " . $row["programmes_id"];
			echo "</td>";
			echo "<td align='center'>";
			echo "Program Duration: " . $row["programmes_duration"] . " Years";
			echo "</td>";
                        echo "</tr>";
                        echo "</table>";
                }
        }
        echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
        echo("<center><button onclick=\"location.href='add_students.php'\">ADD STUDENTS</button>");
	echo("<button onclick=\"location.href='delete_students.php'\">DELETE STUDENTS</button>");
	echo "<br>";
        echo "<br>";
        echo("<button onclick=\"location.href='main_menu.php'\">MAIN MENU</button>");
        echo("<button onclick=\"location.href='list_modules.php'\">MODULES</button>");
	echo("<button onclick=\"location.href='list_programmes.php'\">PROGRAMMES</button>");
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
