<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
</head>
<body>
	<div class="container" style="margin-top: 30px;">
		<div class="col-md-6 col-xs-offset-3">
			<div class="panel panel-primary">
			<div class="panel-heading">Login</div>
			<div class="panel-body">
				<form action="" method="post">
					
					<!-- row -->
							<div class="row" style="margin-top: 5px;">
								<div class="col-md-2">Username</div>
								<div class="col-md-9">
									<input type="text" name="c_username" class="form-control" required>
								</div>
							</div>
					<!-- end row  -->

					<!-- row -->
							<div class="row" style="margin-top: 5px;">
								<div class="col-md-2">Password</div>
								<div class="col-md-9">
									<input type="password" name="c_password" class="form-control" required>
								</div>
							</div>
					<!-- end row  -->

					<!-- row -->
							<div class="row" style="margin-top: 5px;">
								<div class="col-md-2"></div>
								<div class="col-md-9">
									<input type="submit"  value="Login" class="btn btn-primary" >

									<input type="reset"  value="Reset" class="btn btn-danger" >
								</div>
							</div>
					<!-- end row  -->
				</form>
			</div>
			</div>
		</div>
	</div>
</body>
</html>