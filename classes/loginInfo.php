<?php
	class loginInfo {
		public $username;
		public $password;
		
		function __construct($username, $password) {
			$this->username = $username;
			$this->password = $password;
		}
	}
?>