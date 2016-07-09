<?php
	include("model/index.php");	

	/** 
		The main role of the index is simply to not do anything. It only redirects
		the user to the right page he must be. If he/she is a cashier, then redirect him/her to the cashier page, if he/she is an admin, then redirect him/her to the admin page. 
	**/

	$title = "Home"; 
	include("layout/header.php");
	include("views/index.php");
	include("layout/footer.php");
?>