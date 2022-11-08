
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<title> Register - Shooping </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
</head>

<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading"> Regi ster </div>
				<div class="panel-body">
					<form action="Database/register.php" method="POST" role="form" enctype="multipart/form-data">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Name" name="name" type="text" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Email" name="email" type="text" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Address" name="address" type="text" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password-Confirmation" name="password-confirmation" type="password" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Image" accept="image/jpg, image/png, image/jpeg" type="file" name="img" required>
							</div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"></label>
                                <select name="dir" class="form-control" id="exampleFormControlSelect1" required>
                                    <option value="1">Admin</option>
                                    <option value="0">User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"></label>
                                <select name="gender" class="form-control" id="exampleFormControlSelect1" required>
                                    <option value="1">Male</option>
                                    <option value="0">Female</option>
                                </select>
                            </div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<input type="submit" name="submit" value="register" class="btn btn-primary"></input>
						</fieldset>
						<div class="mb-4 text-muted text-center">
                            Already Registered? <a href="index.php">Login</a>
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