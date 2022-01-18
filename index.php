<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LAKIN.CO</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="header">
		<div class="container">
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

			<div class="row">
				<div class="col-2">
					<?php if(isset($_SESSION["username"])): ?>
						<h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
					<?php else: ?>
						<h1>Welcome Stranger!</h1>
					<?php endif ?>
					<p>Still in development we dont know what to put here</p>
					<a href="registration.php" class="button">Sign up NOW and spend money &#10139;</a>
				</div>
				<div class="col-2">
					<img src="images/burgerback.png">
				</div>
			</div>
		</div>
	</div>

<!------ FEATURES SECTION ------->
	
		<div class="small-container">
			<a href="#oreo"><h2 class="title">Available Products</h2></a>
			<div class="row">
				<div id="oreo" class="col-3">
					<a href="detail-oreo.php"><img src="images/oreo.jpg"></a>
					<h4>Supreme Oreo (1pcs)</h4>
					<p>RM 1400.00</p>
				</div>
				<div class="col-3">
					<a href="detail-bread.php"><img src="images/lv.png"></a>
					<h4>Louis Vuitton Bread (1pcs)</h4>
					<p>RM 6250.00</p>
				</div>
				<div class="col-3">
					<a href="detail-burger.php"><img src="images/goldburger.png"></a>
					<h4>Gold Coated Beef Burger (1pcs)</h4>
					<p>RM 5500.00</p>
				</div>
			</div>
		</div>
	

</body>
</html>