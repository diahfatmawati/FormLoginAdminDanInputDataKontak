<?php
$servername = "localhost";
$username = "root";
$dbname = "mydb";

include "koneksi.inc.php";

if(isset($_POST['submit'])){

	$Nama = $_POST['Nama'];
	$jKel = $_POST['jKel'];
	$Email = $_POST['Email'];
	$Alamat = $_POST['Alamat'];
	$Kota = $_POST['Kota'];
	$Pesan = $_POST['Pesan'];
		
	$sql = "INSERT INTO kontak (Nama,jKel,Email,Alamat,Kota,Pesan) 
			VALUES ('$Nama','$jKel','$Email','$Alamat','$Kota','$Pesan')";

	$query = mysqli_query($conn, $sql);

	if($query){
		header('Location: kontak.html?status=sukses');
	}else{
		echo "erorr";
	}
	
	}else {
	die("Akses dilarang....");
}
?>