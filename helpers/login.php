<?php
		
	function loginValid($loginInfo) {
		$query = "SELECT * FROM user WHERE username = '".$loginInfo->username."' AND password = '".$loginInfo->password."'";
		$doQuery = mysql_query($query);
		$num = mysql_num_rows($doQuery);
		return ($num > 0)? true: false;
	}
?>