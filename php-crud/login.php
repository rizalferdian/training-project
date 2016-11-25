<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="asset/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/style.css">
</head>
<body>
	<div class="container" id="containertwo">
		<div class="panel panel-default" id="paneltwo">
			<!-- Default panel contents -->
			<div class="panel-heading">
				Login
			</div>
			<div class="panel-body">
				
			</div>

			<!-- Table -->
			<form class="form-horizontal" action="proses-login.php" method="post" id="formLogin">
				<div class="form-group">
					<label class="control-label col-sm-2" for="username">Username:</label>
					<div class="col-sm-10">
						<input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Password:</label>
					<div class="col-sm-10"> 
						<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="asset\jquery.js"></script>
	<script type="text/javascript" src="asset\script.js"></script>
</body>
</html>