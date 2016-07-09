<?php
	function isValidEmail($email) {
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}

	function isFieldUnique($table, $field, $value) {
		$query = mysql_query("SELECT * FROM ".$table." WHERE ".$field." = '".$value."'");
		$numrows = mysql_num_rows($query);
		return ($numrows > 0)? false: true;
	}
?>