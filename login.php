<?php
	// Initialize the session
	session_start();

	// Check if the user is already logged in, if yes then redirect him to welcome page
	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
		header("location: index");
		exit;
	}

	// Include config file
	require_once "./include/config.php";

	// Define variables and initialize with empty values
	$username = $password = "";
	$username_err = $password_err = "";

	// Processing form data when form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		// Check if username is empty
		if(empty(trim($_POST["username"]))){
			$username_err = "Please enter username.";
		} else{
			$username = trim($_POST["username"]);
		}

		// Check if password is empty
		if(empty(trim($_POST["password"]))){
			$password_err = "Please enter your password.";
		} else{
			$password = trim($_POST["password"]);
		}

		// Validate credentials
		if(empty($username_err) && empty($password_err)){
			// Prepare a select statement
			$sql = "SELECT id, username, password FROM users WHERE username = :username";

			if($stmt = $pdo->prepare($sql)){
				// Bind variables to the prepared statement as parameters
				$stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

				// Set parameters
				$param_username = trim($_POST["username"]);

				// Attempt to execute the prepared statement
				if($stmt->execute()){
					// Check if username exists, if yes then verify password
					if($stmt->rowCount() == 1){
						if($row = $stmt->fetch()){
							$id = $row["id"];
							$username = $row["username"];
							$hashed_password = $row["password"];
							if(password_verify($password, $hashed_password)){
								// Password is correct, so start a new session
								session_start();

								// Store data in session variables
								$_SESSION["loggedin"] = true;
								$_SESSION["id"] = $id;
								$_SESSION["username"] = $username;                            

								// Redirect user to welcome page
								header("location: index");
							} else{
								// Display an error message if password is not valid
								$password_err = "The password you entered was not valid.";
							}
						}
					} else{
						// Display an error message if username doesn't exist
						$username_err = "No account found with that username.";
					}
				} else{
					echo "Oops! Something went wrong. Please try again later.";
				}

				// Close statement
				unset($stmt);
			}
		}

		// Close connection
		unset($pdo);
	}
?>
 
<!doctype html>
<html lang="en">
	<head>
		<title>Login</title>
		<?php
			// Meta, Scrips and Styles
			include('./include/head.php');
		?>
	</head>
<body class="bg-image">
	
	<!-- Page Content -->
	<div class="login-form">
		
		<!-- Login Form -->
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			
			<div class="avatar">
				<img src="images/Joren-Logo-Icon.png" alt="Avatar">
			</div>
			
			<h2 class="text-center">Welcome to Jpanel!</h2>   
			
			<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
				<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username; ?>" required="required">
				<span class="help-block"><?php echo $username_err; ?></span>
			</div>
			
			<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
				<input type="password" class="form-control" name="password" placeholder="Password" required="required">
					<span class="help-block"><?php echo $password_err; ?></span>
			</div>  
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-lg btn-block" value="Login">Sign in</button>
			</div>
			
			<div class="clearfix">
				<label class="pull-left checkbox-inline"><input type="checkbox"> Remember me <?php if(isset($_COOKIE["username"])) { ?> checked <?php } ?></label>
				<a href="reset-password" class="pull-right">Forgot Password?</a>
			</div>
			
		</form>
		
		<p class="text-center small">Don't have an account? <a href="register">Sign up here!</a></p>
		
	</div>
</body>
</html>