 <?php

	// Security
	include "./include/security.php";
	
	// Include config file
	require_once "./include/config.php";

	// Add new logins
	$message = '';
	if (isset ($_POST['sitename'])  && isset($_POST['url']) && isset($_POST['username']) && isset($_POST['password']) ) {
		$sitename = $_POST['sitename'];
		$url = $_POST['url'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = 'INSERT INTO web_admin(sitename, url, username, password) VALUES(:sitename, :url, :username, :password)';
		$statement = $pdo->prepare($sql);
			if ($statement->execute([':sitename' => $sitename, ':url' => $url, ':username' => $username, ':password' => $password])) {
			$message = 'Logins were added successfully';
			header("refresh:3; ./logins.php");
		}
	}

	// Auto Generate Password
	function generatePassword ($length = 16)
	{
	  $genpassword = "";
	  $possible = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()?";
	  $i = 0;
	  while ($i < $length) {
		$char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
		if (!strstr($genpassword, $char)) {
		  $genpassword .= $char;
		  $i++;
		}
	  }
	  return $genpassword;
	}

?>


<!doctype html>
<html lang="en">
	<head>
		<title>Edit</title>
		<?php
			// Meta, Scrips and Styles
			include('./include/head.php');
		?>
	</head>
<body>
	
	<!-- Page Content -->
	<div class="container logins-form">
		
		<!-- Alert -->
		<?php if(!empty($message)): ?>
			<div class="alert alert-success">
				<?= $message; ?>
			</div>
		<?php endif; ?>
		
		<form method="post">
			<h2>Add New Logins Details</h2> 
			<hr>
			   <div class="row">
				   
				   <div class="col-md-6">

						<div class="form-group">
							<label for="name">Sitename</label>
							<input type="text" name="sitename" id="sitename" placeholder="Sitename" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label for="name">Site Url</label>
							<input type="text" name="url" id="url" placeholder="Site Url" class="form-control" required="required">
						</div>
				   </div>
				   
				   <div class="col-md-6">

						<div class="form-group">
							<label for="name">Username</label>
							<input type="text" name="username" id="username" placeholder="Username" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label for="name">Password</label>
							<input value="<?php echo generatePassword(); ?>" type="text" name="password" id="password" placeholder="Password" class="form-control" required="required">
						</div>

					</div>
				   
				</div>
				
				<hr>
			
				<div class="form-group">
					 <button type="submit" class="btn btn-info">Add</button>
					 <a href="./logins.php" class="btn btn-warning">Cancel</a>
				</div>
				
		  </form>
	</div>
	
</body>
</html>