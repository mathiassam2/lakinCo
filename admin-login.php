<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="styleregister.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@500&display=swap" rel="stylesheet">
</head>
<body>

	<div class="navbar">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" width="125px"></a>
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="">Products</a></li>
				<li><a href="">About</a></li>
				<li><a href="indexfeedback.php">Feedback</a></li>
				<li><a href="">Account</a></li>
			</ul>
		</nav>
		<a href="cart.php"><img src="images/cart2.png" width="30px" height="30px"></a>
	</div>

	<div class="header">
		<h2>Admin Login</h2>
	</div>

	<form method="post" action="admin-login.php">
		<!-- display validation errors -->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="admin-login" class="btn">Login</button>
		</div>
	</form>

</body>
</html>
