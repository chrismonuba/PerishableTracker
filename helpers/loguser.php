<?php

	include("directors.php");

	function logOut() {
		session_destroy();
		header("Location:login.php");
	}

	function isLoggedIn() {
		return isset($_SESSION['username']);
	}

	if($logRequired == true) {
		if(!isLoggedIn()) goToLogin();
	}
?>