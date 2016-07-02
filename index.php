<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
	$logRequired = true;
    
	require_once("helpers/general.php");
	
	$notifier = new notifier("", "", "");
	
	if(isset($_POST['submit'])) {
		mysql_query("INSERT INTO `status` (`id`, `userId`, `message`) VALUES (NULL, ".getUserDetails($_SESSION['username'], "id").", '".$_POST['status']."')");
	}
	
	if(isset($_POST['logout'])) {
		session_destroy();
		header("Location:login.php");
	}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome to the Dashboard</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/bootstrap.min.js"></script>
    </head>
    <body>
		<div class="container">
			<br />
			<div style="display: <?php echo $notifier->isDisplay; ?>;" class="alert alert-<?php echo $notifier->status; ?>" role="alert"><?php echo $notifier->message; ?></div>
			<p><h2>Welcome back to your homepage, <?php echo getUserDetails($_SESSION['username'], "name"); ?></h2></p>
			<p>
				<form method="POST">
					<div class="form-group">
						<input type="submit" name="logout" class="btn btn-success" value="Logout">
					</div>
				</form>
			</p>
			<br />
			<br />
			<form method="POST">
				<div class="form-group">
					<label>Post a status:</label>
					<textarea class="form-control" name="status" placeholder="What are you thinking?" rows="3"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-default" value="Post it!">
				</div>
			</form>
			<br /><br />
			<div data-example-id="contextual-panels">
			<?php
				$query = mysql_query("SELECT * FROM status WHERE userid = ".getUserDetails($_SESSION['username'], "id")." ORDER by `id` DESC");
				
				while($fetch = mysql_fetch_array($query)) {
					echo "You said: ".$fetch['message']." <br /><hr />";
				}
			?>
			</div>
		</div>
    </body>
</html>
