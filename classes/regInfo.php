<?php
	class regInfo {
		public $username;
		public $password;
		public $name;
		public $email;
		
		function __construct($username, $password, $name, $email) {
			$this->username = $username;
			$this->password = md5($password);
			$this->name = $name;
			$this->email = $email;
		}

		function requiredFields() {
			return array(
					"username",
					"password",
					"name",
					"email"
				);
		}
	}
?>