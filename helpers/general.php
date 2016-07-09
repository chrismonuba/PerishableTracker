<?php
	session_start();
	date_default_timezone_set('Asia/Manila');

	require_once("helpers/core.php");
	require_once("helpers/database.php");
	require_once("classes/notifiers.php");
	require_once("classes/regInfo.php");
	require_once("classes/loginInfo.php");
	
	/** All methods related to login **/
	require_once("helpers/login.php");
	/** ALl methods of logger aside from login **/
	require_once("helpers/loguser.php");
	/** All post-related methods **/
    require_once("helpers/post.php");
	/** All generic-redirection rules **/
	require_once("helpers/directors.php");
	/** All validator methods **/
	require_once("helpers/validators.php");
	/** All common mysql-related methods **/
	require_once("helpers/sql.php");

	function breakPage() {
		die("The page you are requesting is broken. Please contact the administrator.");
	}

?>