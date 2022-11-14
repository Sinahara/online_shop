<head>
<title>Logout</title>
<link rel="stylesheet" type="text/css" href="csslogin.css">
<head>

<?php
session_start();
if(isset($_SESSION['email'])) {
// ----------------------------------CONTENT HERE--------------------------------- //
	echo '<center><h1><p class="login-text" style="font-size: 2rem; font-weight: 800;">Selamat Tinggal :)</p></h1><br/><a href="./logout.php">Logout</a>';
// ----------------------------------CONTENT HERE--------------------------------- //

} else {
	echo '<script>window.location.replace("./login.php");</script>';
}
?>