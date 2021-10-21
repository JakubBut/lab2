<!DOCTYPE html>
<html>
<head>
<title>connect</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "student";
$password = "website";
$dbasename = "labwork";

$mysqli = new mysqli($servername, $username, $password, $dbasename);

if($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
?>
</body>
</html>
