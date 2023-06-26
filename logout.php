<html>
<head>
<Title>Logout</Title>
</head>
<body>
<link rel="stylesheet" href="style.php">
<style>
.container
{
height: 900px;
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
<h1>LOGOUT</h1>
<?php
if (isset($_POST["username"]))
{
        var_dump($_POST);
        $servername="localhost";
        $username="azureuser";
        $password="azureuser";
        $dbname="college";
        $connection=new mysqli($servername,$username,$password,$dbname);
        if ($connection->connection_error)
        {
                $college_username=$_POST["username"];
                $college_password=$_POST["password"];
		unset($_SESSION["username"]);
		session_destroy();
		echo "<h3>Logged Out Successfully!</h3>";
		header("refresh:5; url=login.php");
	}
}
?>
</div>
</div>
</body>
</html>
