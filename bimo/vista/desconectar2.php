<?php
session_start();
session_destroy();
echo"<script type='text/javascript'>
	alert('La sesión fué cerrada correctamente');
	window.location='http://localhost/bimo/vista/login_admin.php';
	</script>";
?>