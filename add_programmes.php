<html>
<head>
<title>Adding Program Data</title>
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
<h1>ADDING PROGRAM DATA</h1>
</head>
<body>
<form action="insert_programmes.php" method="post">
<p>
<input type="number" name="programmes_id" id="programmes_id" placeholder="Program ID (Example: 1, 2, 3, etc.)">
</p>
<p>
<input type="number" name="programmes_level" id="programmes_level" placeholder="Program Level (Example: 6, 7, 8, etc.)">
</p>
<p>
<input type="number" name="programmes_duration" id="programmes_duration" placeholder="Program Duration in Years (Example: 2, 3, 4, etc.)">
</p>
<p>
<input type="text" name="programmes_name" id="programmes_name" placeholder="Program Name (Example: Networking Applications & Services, etc.)">
</p>
<p>
<input type="text" name="programmes_code" id="programmes_code" placeholder="Program Code (Example: TU819, etc.)">
</p>
<br>
<br>
<input type="submit" class="button" value="ADD PROGRAM">
<br>
<br>
<a href="list_programmes.php" class="button">LIST PROGRAMMES</a>
<a href="main_menu.php" class="button">MAIN MENU</a>
<a href="delete_programmes.php" class="button">DELETE PROGRAMMES</a>
</form>
</div>
</div>
</body>
</html>
