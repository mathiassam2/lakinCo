<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Supreme Oreo</title>
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
					<h1>SUPREME OREO</h1>
					<h4>You buy it and not eat it</h4>
					<p>RM 1400</p>
					<?php if(isset($_SESSION["username"])): ?>
						<a href="cart.php" class="button">Order Item(s) &#10139;</a>
					<?php else: ?>
						<a href="login.php" class="button">Order Item(s) &#10139;</a>
					<?php endif ?>
				</div>
				<div class="col-2">
					<img src="images/oreo.jpg">
				</div>
			</div>
		</div>
	</div>


	<div class="small-container">
			<h2 class="title">More Products</h2>
			<div class="row">
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