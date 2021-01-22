<?php 

	// Security
	include "./include/security.php";
	
	// Include config file
	require_once "./include/config.php";
	$id = $_GET['id'];
	$sql = 'SELECT * FROM web_admin WHERE id=:id';
	$statement = $pdo->prepare($sql);
	$statement->execute([':id' => $id ]);
	$site_logins = $statement->fetch(PDO::FETCH_OBJ);
    
	// Update logins
	$message = '';

	if (isset ($_POST['sitename'])  && isset($_POST['url']) && isset($_POST['username']) && isset($_POST['password']) ) {
	  	$sitename = $_POST['sitename'];
	  	$url = $_POST['url'];
	  	$username = $_POST['username'];
	  	$password = $_POST['password'];
	  	$sql = 'UPDATE web_admin SET sitename=:sitename, url=:url, username=:username, password=:password WHERE id=:id';
	  	$statement = $pdo->prepare($sql);
		
	  if ($statement->execute([':sitename' => $sitename, ':url' => $url, ':username' => $username, ':password' => $password, ':id' => $id])) {
		  $message = 'Logins were updated successfully';
		header("refresh:3; ./logins.php");
	  }
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
			<h2>Update Logins Details</h2> 
			<hr>
			   <div class="row">
				   <div class="col-md-6">

						<div class="form-group">
							<label for="name">Sitename</label>
							<input value="<?= $site_logins->sitename; ?>" type="text" name="sitename" id="sitename" class="form-control">
						</div>

						<div class="form-group">
							<label for="name">Site Url</label>
							<input value="<?= $site_logins->url; ?>" type="text" name="url" id="url" class="form-control">
						</div>
				   </div>
				   
				   <div class="col-md-6">

						<div class="form-group">
							<label for="name">Username</label>
							<input value="<?= $site_logins->username; ?>" type="text" name="username" id="username" class="form-control">
						</div>

						<div class="form-group">
							<label for="name">Password</label>
							<input type="text" value="<?= $site_logins->password; ?>"  name="password" id="password" class="form-control">
						</div>

					</div>
				</div>
				
				<hr>
			
				<div class="form-group">
					 <button type="submit" class="btn btn-info">Update</button>
					 <a href="./logins.php" class="btn btn-warning">Cancel</a>
				</div>
				
		  </form>
		
	</div>
	
</body>
</html>