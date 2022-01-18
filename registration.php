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

					<?php if(isset($_SESSION["username"])): ?>
						<li><a href="index.php?logout='1'">Logout</a></li>
					<?php else: ?>
						<li><a href="login.php">Login</a></li>
					<?php endif ?>

				</ul>
			</nav>
			<?php if(isset($_SESSION["username"])): ?>
				<a href="cart.php"><img src="images/cart2.png" width="30px" height="30px"></a>
			<?php else: ?>
				<a href="login.php"><img src="images/cart2.png" width="30px" height="30px"></a>
			<?php endif ?>
			</div>

	<div class="header">
		<h2>Registration</h2>
	</div>

	<form method="post" action="registration.php">
		<!-- display validation errors -->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email"value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password1">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password2">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Log in</a>
		</p>
	</form>

</body>
</html>