<!DOCTYPE html>
<html>
<head>
<title>users</title>
</head>
<body>
	
<?php
include 'connect.php';

$sql = "SELECT ID, firstname, surname, email FROM users";
$result = $mysqli->query($sql);
if($result){
	if($result->num_rows > 0) {
		echo "<table>";
		echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>FirstName</th>";
		echo "<th>Surname</th>";
		echo "<th>Email</th>";
		echo "</tr>";
	while($row = $result->fetch_assoc())
	{
		echo "<tr>";
		echo "<th>".$row['ID']"</th>";
		echo "<th>".$row['FirstName']"</th>";
		echo "<th>".$row['Surname']"</th>";
		echo "<th>".$row['Email']"</th>";
		echo "</tr>";
	}
	echo "</table>";
	
} else {
	echo "<p> 0 results </p>";
}
$result->close();
$mysqli->close();
?>
</body>
</html>
