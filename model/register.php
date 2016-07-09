<?php
	$logRequired = false;
    
	require_once("model-general.php");
	
	if(isSubmit()) {
		$regDetails = new regInfo(post('username'), post('password'), post('name'), post('email'));
		$sendData = isAllPostSet($regDetails->requiredFields(), $regDetails);

		if($sendData) {
			if(isFieldUnique("user", "username", $regDetails->username) && isFieldUnique("user", "email", $regDetails->email)) {
				$notifier = new notifier("success", "Successfully registered, you may now login. Redirecting you in 3 seconds..", true);
				insertUser($regDetails);
				echo "<meta http-equiv='refresh' content='1;login.php'></meta>";
			} else {
				$notifier = new notifier("danger", "The username/email you entered is already registered.", "true");
			}
		} else {
			$notifier = new notifier("danger", "Some fields are missing.", true);
		}
	}
?>