<?php
	
	/** SITE DETAILS **/
	define("SITE", "localhost/");
	define("LOGINPAGE", "login.php");
	
	/** DATABASE DETAILS **/
	define("USER", "root");
	define("PASS", "root");
	define("HOST", "localhost");
	define("DB", "perishabletracker");
	
	/** PAGES CONSTANTS **/
	define("ADMINPAGE", "admin.php");
	define("CASHIERPAGE", "cashier.php");

	/** MESSAGES CONSTANTS **/
	define("LOGINSUCCESS", "Successfully logged in, redirecting you to main page.");

	/** DATABASE FIELDS CONSTANTS **/
	define("ADMIN", "admin");
	define("CASHIER", "user");

	$regDetails = [
		"username", "password", "email", "name"
	];
	
	$loginDetails = [
		"username", "password"
	];
	
?>