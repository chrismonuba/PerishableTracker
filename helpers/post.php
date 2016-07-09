<?php
	function isPost($identifier) {
		return isset($_POST[$identifier]);
	}
	
	function isAllPostSet($fields, $fieldsObj) {
		if(isPost('submit')) {
			$isDetails = true;
			foreach($fields as $x) {
				if(!isPost($x)) {
					$isDetails = false;
					break;
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

	function post($identifier) {
		$var = $_POST[$identifier];
		return mysql_real_escape_string($var);
	}

	function ifPost($identifier) {
		return isset($_POST[$identifier]);
	}
?>