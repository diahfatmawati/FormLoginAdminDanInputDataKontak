<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "mydb";

	include "koneksi.inc.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title> Form Login Admin </title>
</head>
<body>
<header>
<div class="container">
<br>
<form action="" method="post">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
	<h2 align="center"> Akses Admin </h2><br>
   	<tr height="40">
   		<td width="100"><label> Username </label></td>
   		<td width="40"> : </td>
   		<td><input type="text" id="name" name="username" placeholder="username"></td>
   	</tr>
   	<tr height="40">
   		<td width="100"><label> Password </label></td>
   		<td width="40"> : </td>
   		<td><input type="password" id="password" name="password" placeholder="password"></td>
   	</tr> 
   	<tr height="40">
   		<td><input type="submit" name="submit" id="submit" value="Login"></td>
   	</tr>
</table>
</form>
</div>
</header>
<?php
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = mysqli_query($conn,"SELECT * FROM admin 
							WHERE username = '$username' AND password = '$password'");
		$cek = mysqli_num_rows($sql);
	if($cek == 1){
		$_SESSION['userweb']=$username;
		header("location:cetak.php");
	exit;
	}else {
		echo "<br><center><b> Maaf username atau password anda salah </b></center>";
	}
	}
?>
</body>
</html>