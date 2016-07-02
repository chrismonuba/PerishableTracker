<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
	$logRequired = false;
    
	require_once("helpers/general.php");
	
	$notifier = new notifier("", "", "");
	
	
	if(isSubmit()) {
		$sendData = isAllPostSet($regDetails);
		if($sendData) {
			$notifier = new notifier("success", "Successfully registered, you may now login. Redirecting you in 3 seconds..", true);
			$regDetails = new regInfo(post('username'), post('password'), post('name'), post('email'));
			insertUser($regDetails);
			echo "<meta http-equiv='refresh' content='3;login.php'></meta>";
		} else {
			$notifier = new notifier("danger", "Some fields are missing.", true);
		}
	}
		
	
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/bootstrap.min.js"></script>
    </head>
    <body>
		<div class="container">
			<br />
			<div style="display: <?php echo $notifier->isDisplay; ?>;" class="alert alert-<?php echo $notifier->status; ?>" role="alert"><?php echo $notifier->message; ?></div>
			<p><h1>Register!</h1></p>
			<br />
			<br />
			<form method="POST">
				<div class="form-group">
					<label>Username: *</label>
					<input class="form-control" required type="text" placeholder="Username" name="username">
				</div>
				<div class="form-group">
					<label>Password: *</label>
					<input class="form-control" required type="password" name="password" placeholder="Enter password..">
				</div>
				<div class="form-group">
					<label>Name: *</label>
					<input class="form-control" required type="text" name="name" placeholder="Enter Name..">
				</div>
				<div class="form-group">
					<label>Email: *</label>
					<input class="form-control" required type="text" name="email" placeholder="Enter Email..">
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-default" value="Register">
					<input type="reset" class="btn btn-default" value="Reset">
				</div>
			</form>
		</div>
    </body>
</html>
