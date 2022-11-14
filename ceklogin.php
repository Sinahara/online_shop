<head>
<title>Loading</title>

	<link rel="stylesheet" type="text/css" href="csslogin.css">
	
</style>
</head>

<?php
session_start();
if(isset($_SESSION['email'])) {
	echo '<script>window.location.replace("./indexhome.php");</script>';
} else {

$email = "uas@gmail.com";
$password = "123123";
if(isset($_POST['email']) & isset($_POST['password'])) {
	if($_POST['email'] == $email && $_POST['password'] == $password) {
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['password'] = $_POST['password'];
		echo '<meta http-equiv="refresh" content="2; url=./indexhome.php"/>';
		echo "<center><h1><p class='login-text' style='font-size: 2rem; font-weight: 800;'>Berhasil, dalam 2 detik kamu akan di alihkan ke halaman utama</p></font></h1></center>";
	} elseif($_POST['email'] != $email && $_POST['password'] == $password) {
		echo "<center><h1>Gagal!, Email salah</h1></center>";
	} elseif($_POST['email'] == $email && $_POST['password'] != $password) {
		echo "<center><h1>Gagal!, Password salah</h1></center>";
	} elseif($_POST['email'] != $email && $_POST['password'] != $password) {
		echo "<center><h1>Gagal!, Email & Password salah</h1></center>";
	}
} else {
	echo "<center><h1>Gagal!, jangan biarkan email & password kosong</h1></center>";
}
}
?>

