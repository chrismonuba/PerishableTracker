<?php
	function gotoDashboard() {
		header("Location: ..");
	}

	function goToLogin() {
		header("Location: login.php");
	}

	function redirect($page) {
		header("Location: ".$page."");
	}
?>