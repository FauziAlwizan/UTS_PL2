<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<head>
	<title>Admin</title>
</head>
<body>
<center>
	<h2>Halaman Admin</h2>
	
	<br/>
 
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
 
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
	<h4> silahkan pilih menu </h4>
	<button><a href="View_Siswa.php?id=<?php ?>">Siswa</a></button>
	<button><a href="View_Pembayaran.php?id=<?php ?>">Pembayaran</a></button>
	<br/>
	<br/>
 
	<p><a href="Logout.php">LOGOUT</a></p>
 
</center>
</body>
</html>