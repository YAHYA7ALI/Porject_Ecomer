	<?php
		session_start();
		session_regenerate_id();
		if (isset($_SESSION['login_id'])) 
		{
			header('Location: Dashboard.php');
			exit;
		}
	?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<title>Shooping - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
</head>

<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form action="Database/login-check.php" method="POST" role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Name" name="name" type="text" >
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" >
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<input type="submit" name="submit" value="Login" class="btn btn-primary"></input>
						</fieldset>
						<div class="mt-5 text-muted text-center">
             				Don't have an account? <a href="register.php">Create One</a>
            			</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>