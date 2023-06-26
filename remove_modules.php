<html>
<head>
<title>Removing Module Data</title>
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
<h1>REMOVING MODULE DATA</h1>
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
$sql = "DELETE FROM modules WHERE modules_id='$modules_id'";
if(mysqli_query($conn, $sql))
{
	echo "<h3>Module Removed from the Database Successfully</h3>";
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
