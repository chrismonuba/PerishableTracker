<div class="container">
	<div class="col-md-2"></div>
	<div class="col-md-8">
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
			<a href="login.php" class="btn btn-info">Already registered?</a>
		</div>
	</form>
	</div>
	<div class="col-md-2"></div>
</div>