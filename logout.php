<?php 
	session_start();
	// session_unset($_SESSION['user']);
    session_unset();
	session_destroy();
	header('location: index.php');
?>