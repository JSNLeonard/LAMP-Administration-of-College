<html>
<head>
<title>Adding Student Data</title>
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
text-align: center;
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
}
.button
{
display: inline-block;
margin: 2;
padding: 0.75rem 1rem;
border: 0;
border-radius: 0.320rem;
background-color: #FFF;
color: #555;
text-decoration: none;
font-weight: 700;
font-size: 1rem;
line-height: 1.5;
font-family: "Tahoma";
cursor: pointer;
-webkit-appearance: none;
-webkit-font-smoothing: antialiased;
min-width: 250px;
max-width: 250px;
}
.button:hover
{
background-color:rgba(255, 255, 255, 0.5);;
color:rgba(255, 255, 255, 1);
}
</style>
<div class="container">
<div class="center">
<h1>ADDING STUDENT DATA</h1>
</head>
<body>
<form action="insert_students.php" method="post">
<p>
<input type="number" name="students_id" id="students_id" placeholder="Student ID (Example: 1, 2, 3, etc.)">
</p>
<p>
<input type="text" name="students_fname" id="students_fname" placeholder="First Name (Example: Jason)">
</p>
<p>
<input type="text" name="students_lname" id="students_lname" placeholder="Last Name (Example: Leonard)">
</p>
<p>
<input type="date" name="students_dob" id="students_dob" placeholder="Date of Birth (Example: 04/01/2000)">
</p>
<p>
<input type="text" name="students_a1" id="students_a1" placeholder="Address 1 (Example: Donabate)">
</p>
<p>
<input type="text" name="students_a2" id="students_a2" placeholder="Address 2 (Example: Dublin)">
</p>
<p>
<input type="text" name="students_a3" id="students_a3" placeholder="Address 3 (Example: Leinster)">
</p>
<p>
<input type="text" name="students_a4" id="students_a4" placeholder="Address 4 (Example: Ireland)">
</p>
<p>
<input type="number" name="programmes_id" id="programmes_id" placeholder="Program ID (Example: 1, 2, 3, etc.)">
</p>
<p>
<input type="number" name="programmes_duration" id="programmes_duration" placeholder="Program Duration (Example: 2, 3, 4, etc.)">
</p>
<br>
<br>
<input type="submit" class="button" value="ADD STUDENT">
<br>
<br>
<a href="list_students.php" class="button">LIST STUDENTS</a>
<a href="main_menu.php" class="button">MAIN MENU</a>
<a href="delete_students.php" class="button">DELETE STUDENTS</a>
</form>
</div>
</div>
</body>
</html>
