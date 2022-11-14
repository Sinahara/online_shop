<head>
<title>Logout</title>
<link rel="stylesheet" type="text/css" href="csslogin.css">
<head>

<?php
session_start();
if(isset($_SESSION['email'])) {
	session_destroy();
	?>
	<meta http-equiv="refresh" content="2; url=./home.php"/>
	<center><h2><p class="login-text" style="font-size: 2rem; font-weight: 800;">Berhasil Logout</h2><font color="white">Kamu akan di alihkan kembali ke halaman login dalam 2 detik</font></p></center>
	<?php
} else {
	?>
	<meta http-equiv="refresh" content="2; url=./login.php"/>
	<center><h2>gagal Logout</h2>Silahkan login terlebih dahulu<br/><br/>Kamu akan di alihkan kembali ke halaman login dalam 2 detik</center>
	<?php
}
?>