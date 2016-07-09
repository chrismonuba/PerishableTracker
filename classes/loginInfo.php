<?php
	class loginInfo {
		public $username;
		public $password;
		
		function __construct($username, $password) {
			$this->username = $username;
			$this->password = md5($password);
		}

		function requiredFields() {
			return array(
					"username",
					"password"
				);
		}
	}
?>