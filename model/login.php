<?php
	$logRequired = false;

	require_once("model-general.php");
	
	if(isLoggedIn()) {
		goToDashboard();
	}

	if(isSubmit()) {
		$loginDetails = new loginInfo(post('username'), post('password'));
		$sendData = isAllPostSet($loginDetails->requiredFields(), $loginDetails);
		if($sendData) {
			if(loginValid($loginDetails)) {
				$_SESSION['username'] = $loginDetails->username;
				gotoDashboard();
			} else {
				$notifier = new notifier("danger", "Invalid login details.", true);
			}
		} else {
			$notifier = new notifier("danger", "Some fields are missing.", true);
		}
	}
?>