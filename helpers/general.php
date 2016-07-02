<?php
	session_start();

	require_once("helpers/core.php");
	require_once("helpers/database.php");
	require_once("classes/notifiers.php");
	require_once("classes/regInfo.php");
	require_once("classes/loginInfo.php");
	
	
    if($logRequired == true) {
		if(!isLogged()) {
			header("Location:login.php");
		}
	}
	
	function isLogged() {
		return isset($_SESSION['username']);
		
		
	}
	
	function isPost($identifier) {
		$var = $_POST[$identifier];
		return (isset($var) && !empty($var));
	}
	
	function isValidEmail($email) {
		
	}
	
	function isAllPostSet($regDetails) {
		if(isset($_POST['submit'])) {
			$isDetails = true;
			foreach($regDetails as $x) {
				if(!isPost($x)) {
					$isDetails = false;
				}
			}
		} else {
			$isDetails = false;
		}
		return $isDetails;
	}
	
	function isSubmit() {
		return isset($_POST['submit']);
	}
	
	function insertUser($regDetails) {
		mysql_query("INSERT INTO `user` (`id`, `username`, `password`, `email`, `name`) VALUES (NULL, '".$regDetails->username."', '".$regDetails->password."', '".$regDetails->email."', '".$regDetails->name."')");
	}
	
	function post($identifier) {
		$var = $_POST[$identifier];
		return mysql_real_escape_string($var);
	}
	
	function loginValid($loginInfo) {
		$query = "SELECT * FROM user WHERE username = '".$loginInfo->username."' AND password = '".$loginInfo->password."'";
		$doQuery = mysql_query($query);
		$num = mysql_num_rows($doQuery);
		
		if($num > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function getUserDetails($username, $field) {
		$query = "SELECT * FROM user WHERE username = '".$username."'";
		$doQuery = mysql_query($query);
		$fetchQuery = mysql_fetch_array($doQuery);
		
		return $fetchQuery[$field];
	}
?>