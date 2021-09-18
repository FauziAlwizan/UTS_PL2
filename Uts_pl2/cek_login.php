<?php 
session_start();
 

include 'Database.php';
 

$username = $_POST['username'];
$password = $_POST['password'];
 

$data = mysqli_query($koneksi,"select * from latihan_spp_petugas where username='$username' and password='$password'");
 

$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:Menu_Admin.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>