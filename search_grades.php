<html>
<head>
<title>Search Grades</title>
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
<h1>SEARCH GRADES</h1>
</head>
<body>
<center>
<form action="list_student_grades.php" method="post">
<p>
<input type="number" name="students_id" id="students_id" placeholder="Student ID (Example: 1, 2, 3, etc.)">
</p>
<br>
<br>
<input type="submit" class="button" value="SEARCH GRADES">
<br>
<br>
<a href="main_menu.php" class="button">MAIN MENU</a>
<a href="list_grades.php" class="button">LIST GRADES</a>
<a href="add_grades.php" class="button">ADD GRADES</a>
<a href="delete_grades.php" class="button">DELETE GRADES</a>
</div>
</div>
</form>
</center>
</body>
</html>
