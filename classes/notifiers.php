<?php
	class notifier {
		public $status = "";
		public $message = "";
		public $isDisplay = "";
	
		function __construct($status, $message, $isDisplay) {
			$this->status = $status;
			$this->message = $message;
			$this->isDisplay = $isDisplay;
		}
	}
?>