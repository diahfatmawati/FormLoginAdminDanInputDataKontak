<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
	die("Connection failed : " .mysqli_connect_error());
}

$sql = "CREATE TABLE kontak ( 
	id INT(4) AUTO_INCREMENT NOT NULL PRIMARY KEY, 
	Nama VARCHAR(30) NOT NULL, 
	jKel VARCHAR(10),
	Email VARCHAR(40),
	Alamat VARCHAR(50),
	Kota VARCHAR(20),
	Pesan TEXT)";
	
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>