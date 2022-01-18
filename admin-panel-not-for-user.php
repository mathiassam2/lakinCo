<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LAKIN.CO</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="panel.css">
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
			<a href="cart.php"><img src="images/cart2.png" width="30px" height="30px"></a>
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
			<a href="#oreo"><h2 class="title">User List</h2></a>
			<div class="row">
				<table>
					<tr>
						<th>Id</th>
						<th>Username</th>
						<th>Email</th>
					</tr>
					<?php
					$conn = mysqli_connect("localhost", "root", "", "registration");
					if($conn-> connect_error) {
						die("Connection failed: ". $conn-> connect_error);
					}

					$sql = "SELECT id, username, email FROM users WHERE role='user'";
					$result = $conn-> query($sql);

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()){
							echo "<tr><td>". $row["id"]. "</td><td>". $row["username"] . "</td><td>". $row["email"]. "</td></tr>";
						}
						echo "</table>";
					}
					else {
						echo "0 result";
					}
					$conn-> close();
					?>
				</table>
			</div>
		</div>

		<form method="post" action="login.php">
			<!-- display validation errors -->
			<?php include('errors.php'); ?>
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username">
			</div>
			<div class="input-group">
				<button type="submit" name="delete-user" class="btn">Delete User</button>
			</div>
			<p>
				<a href="registration.php">Add User</a>
			</p>
		</form>


</body>
</html>
