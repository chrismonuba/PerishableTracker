<?php
	class regInfo {
		public $username;
		public $password;
		public $name;
		public $email;
		
		function __construct($username, $password, $name, $email) {
			$this->username = $username;
			$this->password = $password;
			$this->name = $name;
			$this->email = $email;
		}
	}
?>