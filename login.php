<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
	include("model/login.php")
?>
<?php
	$title = "Hello!";

	include("layout/header.php");
?>
		<div class="container">
			<br />
			<div style="display: <?php echo $notifier->isDisplay; ?>;" class="alert alert-<?php echo $notifier->status; ?>" role="alert"><?php echo $notifier->message; ?></div>
			<p><h1>Login!</h1></p>
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
					<input type="submit" name="submit" class="btn btn-default" value="Login">
					<a href="register.php"><button class="btn btn-default">Register</a>
				</div>
			</form>
		</div>
    </body>
</html>
