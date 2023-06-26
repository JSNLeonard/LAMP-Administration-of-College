<html>
<head>
<title>Removing Program Data</title>
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
<h1>REMOVING PROGRAM DATA</h1>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "azureuser", "azureuser", "college");
if($conn === false)
{
	die("ERROR: Could not connect. "
	. mysqli_connect_error());
}
$programmes_id = $_REQUEST['programmes_id'];
$programmes_level = $_REQUEST['programmes_level'];
$programmes_duration = $_REQUEST['programmes_duration'];
$programmes_name = $_REQUEST['programmes_name'];
$programmes_code = $_REQUEST['programmes_code'];
$sql = "DELETE FROM programmes WHERE programmes_id='$programmes_id'";
if(mysqli_query($conn, $sql))
{
	echo "<h3>Program Removed from the Database Successfully</h3>";
	/*echo nl2br("$programmes_id\n $programmes_level\n $programmes_duration\n $programmes_name\n $programmes_code");*/
}
else
{
	echo "ERROR: Hush! Sorry $sql. "
	. mysqli_error($conn);
}
mysqli_close($conn);
header("refresh:5; url=list_programmes.php");
?>
</div>
</div>
</body>
</html>
