<?php
session_start(); // Start session nya

if( ! isset($_SESSION['username']))
{
	header("location: index.php"); 
}
?>

<html>
<head>
	<title>Halaman Setelah Login</title>
</head>
<body>
	<h1>Selamat datang <?php echo $_SESSION['nama']; ?></h1>
	<h4>Anda berhasil login ke dalam aplikasi. Berikut data diri Anda yang tersimpan pada database kami :</h4>

	<table style="margin-bottom: 15px;">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><?php echo $_SESSION['username'] ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $_SESSION['nama'] ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?php echo $_SESSION['email'] ?></td>
		</tr>
	</table>

	<a href="logout.php">Logout</a>
</body>
</html>
