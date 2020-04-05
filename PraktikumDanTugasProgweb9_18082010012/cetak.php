<?php
$servername = "localhost";
$username = "root";
$dbname = "mydb";

include "koneksi.inc.php";

$sql = "SELECT * FROM kontak ORDER BY nama;";
$query = mysqli_query($conn,$sql) or die ("Proses cetak gagal");
echo "<h1 align=center> Output Data Kontak </h1> <br>
	<table width='75%' cellpadding='2' cellspacing='0' border='1' align=center>
	<tr>
		<th>NO</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Email</th>
		<th>Alamat</th>
		<th>Kota</th>
		<th>Pesan</th>
	</tr>";

$no = 1;
	while ($hasil = mysqli_fetch_array($query)) {
		echo "<tr>
			<td>$hasil[id]</td>	
			<td>$hasil[Nama]</td>
			<td>$hasil[jKel]</td>
			<td>$hasil[Email]</td>
			<td>$hasil[Alamat]</td>
			<td>$hasil[Kota]</td>
			<td>$hasil[Pesan]</td>
			</tr>";
	$no++;
	}
	echo "</table>";
?>
<title> Cetak Data Kontak </title><br>
<center> Klik <a href="kontak.html">Kembali</a> jika ingin ke Form Input Data Kontak </center><br>
<center> Klik <a href="index.php">Logout</a> jika ingin kembali ke Form Login Hak Akses Admin </center>