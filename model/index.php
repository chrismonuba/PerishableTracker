<?php
	$logRequired = true;
    
	require_once("model-general.php");
	
	if(ifPost("logout")) {
		logOut();
	}
	
?>