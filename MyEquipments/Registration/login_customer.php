<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
body  {
    background-image: url("login.jpg");
    background-color: #cccccc;
}
</style>
<body>

	<div class="header">
		<h2>Login Customer</h2>
	</div>
	
	<form method="post" action="login_customer.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="pass">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_customer">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register_customer.php">Sign up</a>
		</p>
	</form>


</body>
</html>