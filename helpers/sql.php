<?php
	function insertUser($regDetails) {
		mysql_query("INSERT INTO `user` (`id`, `username`, `password`, `email`, `name`) VALUES (NULL, '".$regDetails->username."', '".$regDetails->password."', '".$regDetails->email."', '".$regDetails->name."')");
	}
	
	function getUserDetails($username, $field) {
		$query = "SELECT * FROM user WHERE username = '".$username."'";
		$doQuery = mysql_query($query);
		$fetchQuery = mysql_fetch_array($doQuery);	
		return $fetchQuery[$field];
	}

	function getCurrentDetails($field) {
		$query = "SELECT * FROM user WHERE username = '".$_SESSION['username']."'";
		$doQuery = mysql_query($query);
		$fetchQuery = mysql_fetch_array($doQuery);
		return $fetchQuery[$field];
	}
?>