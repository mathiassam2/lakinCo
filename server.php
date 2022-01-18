<?php

	session_start();

	$username = "";
	$email = "";
	$errors = array();

	// connect to the database

	$db = mysqli_connect('localhost', 'root', '', 'registration');

	if(isset($_POST['register'])){
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password1 = mysqli_real_escape_string($db,$_POST['password1']);
		$password2 = mysqli_real_escape_string($db,$_POST['password2']);

		// to ensure that the form fields are filled correctly
		if(empty($username)){
			array_push($errors, "Username is required"); // add errors to errors array
		}
		if(empty($email)){
			array_push($errors, "Email is required"); // add errors to errors array
		}
		if(empty($password1)){
			array_push($errors, "Password is required"); // add errors to errors array
		}
		if($password1 != $password2){
			array_push($errors, "Passwords does not match");
		}

		//if there is no errors, proceed to save user to database
		if(count($errors) == 0){
			$password = md5($password1); // encrypt password before storing in the database (security measures)
			$sql = "INSERT INTO users (username, email, password)
						VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: login.php');
		}
	}


	//login user from login page
	if(isset($_POST['login'])){
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);

		// to ensure that the form fields are filled correctly
		if(empty($username)){
			array_push($errors, "Username is required"); // add errors to errors array
		}
		if(empty($password)){
			array_push($errors, "Password is required"); // add errors to errors array
		}

		if(count($errors) == 0){
			$password = md5($password); // encrypt the password before comparing to database
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1){
				// logs user in
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}
			else{
				array_push($errors, "The username or password is invalid");
			}
		}
	}
	//login admin from admin login page
	if(isset($_POST['admin-login'])){
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);

		// to ensure that the form fields are filled correctly
		if(empty($username)){
			array_push($errors, "Username is required"); // add errors to errors array
		}
		if(empty($password)){
			array_push($errors, "Password is required"); // add errors to errors array
		}

		if(count($errors) == 0){
			$password = md5($password); // encrypt the password before comparing to database
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='admin'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1){
				// logs user in
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: admin-panel-not-for-user.php');
			}
			else{
				array_push($errors, "The username or password is invalid");
			}
		}
	}
	if(isset($_POST['delete-user'])){
		$username = mysqli_real_escape_string($db,$_POST['username']);

		// to ensure that the form fields are filled correctly
		if(empty($username)){
			array_push($errors, "Username is required"); // add errors to errors array
		}

		if(count($errors) == 0){
			$query = "DELETE FROM users WHERE username='$username' AND role='user'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 0){
				// logs user in
				$_SESSION['success'] = "User deleted!";
				header('location: admin-panel-not-for-user.php');
			}
			else{
				array_push($errors, "The username or password is invalid");
			}
		}
	}

	//logout
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');
	}

?>
