<html>
<head>
<title>Inserting Module Data</title>
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
<h1>INSERTING MODULE DATA</h1>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "azureuser", "azureuser", "college");
if($conn === false)
{
	die("ERROR: Could not connect. "
	. mysqli_connect_error());
}
$modules_id = $_REQUEST['modules_id'];
$modules_name = $_REQUEST['modules_name'];
$programmes_id = $_REQUEST['programmes_id'];
$sql = "INSERT INTO modules VALUES ('$modules_id', '$modules_name', '$programmes_id')";
if(mysqli_query($conn, $sql))
{
	echo "<h3>Module Added to the Database Successfully</h3>";
}
else
{
	echo "ERROR: Hush! Sorry $sql. "
	. mysqli_error($conn);
}
mysqli_close($conn);
header("refresh:5; url=list_modules.php");
?>
</div>
</div>
</body>
</html>
