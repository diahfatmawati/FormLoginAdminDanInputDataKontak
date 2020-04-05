<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) {
	die("Connection failed : ".mysqli_connect_error());
}

$sql = "CREATE TABLE admin(
		id INT(4) AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(30) NOT NULL,
		password VARCHAR(20) NOT NULL)";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfuly";
} else {
	echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>