<?php
	session_start();

	if (!empty($_SESSION['id'])) {
		session_unset();
		session_destroy();
		header('location:index.php');
	}
?>