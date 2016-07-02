<?php
	$logRequired = false;
    
	require_once("helpers/general.php");
	
	$notifier = new notifier("", "", "");
	
	
	if(isSubmit()) {
		$sendData = isAllPostSet($loginDetails);
		if($sendData) {
			$login = new loginInfo(post('username'), post('password'));
			if(loginValid($login)) {
				$notifier = new notifier(
					"success", 
					"Successfully logged in, redirecting you to main page.", 
					true);
				echo "<meta http-equiv='refresh' content='3;index.php'></meta>";
				$_SESSION['username'] = $login->username;
			} else {
				$notifier = new notifier("danger", "Invalid login details.", true);
			}
		} else {
			$notifier = new notifier("danger", "Some fields are missing.", true);
		}
	}
?>