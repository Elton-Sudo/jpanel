<?php
	// Security
	require_once "./include/security.php";
	
	// Include config file
	require_once "./include/config.php";

	$settings = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_EMULATE_PREPARES => false,
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	);

	$connection = new PDO("mysql:host=localhost;dbname=db_login", 'root', '', $settings);

	$query = $connection->prepare('INSERT INTO `pageview` (`ip`, `created`) VALUES (?, NOW())');
	$parameters= array($_SERVER['REMOTE_ADDR']);
	$query->execute($parameters);

?> 

<!doctype html>
<html lang="en">
	<head>
		<title>Welcome</title>
		<?php
			// Meta, Scrips and Styles
			include('./include/head.php');
		?>
	</head>
<body>
	
	<?php
		// Navigation
		include('./include/menu.php');
	?>
	
	<!-- Page Content -->
	<div class="container">
		<!-- Page Header -->
		<div class="row my-5">
			<div class="col-lg-7">
				<iframe style="border-radius: 8px; width:100%; height:55vh; border:none; overflow: hidden;" src="include/slider.php"></iframe>
			</div>

			<div class="col-lg-5">
					<!--<iframe style="border-radius: 8px; width:100%; height:55vh; border:none; overflow: hidden;" src="include/zikiphani.php"></iframe>-->
					<img src="images/Joren-Logo-Icon.png" height="250" alt="logo">
					<br>
					<h1 class="font-weight-light">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to </h1>
					<img src="images/Jpanel-Logo-001.png" height="90" alt="logo">
			</div>
		</div>

		<div class="tab-bg my-5 text-center py-4">
			<div class="card-body">
				<p class="text-black m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
			</div>
		</div>

		<div class="row tab-bg my-5">
			
			<div class="col-md-4">
				<div class="card border-info mx-sm-1 p-3">
					<a href="#/" class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-cogs fa-lg" aria-hidden="true"></span></a>
					<div class="text-info text-center mt-3"><h4>Settings</h4></div>
					<div class="text-info text-center mt-2"><h1></h1></div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="card border-info mx-sm-1 p-3">
					<a href="tools" class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-th fa-lg" aria-hidden="true"></span></a>
					<div class="text-info text-center mt-3"><h4>Tools</h4></div>
					<div class="text-info text-center mt-2"><h1></h1></div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="card border-info mx-sm-1 p-3">
					<a href="#/" class="card border-info shadow text-info p-3 my-card"><span class="fa fa-server fa-lg" aria-hidden="true"></span></a>
					<div class="text-info text-center mt-3"><h4>Local-Server</h4></div>
					<div class="text-info text-center mt-2"><h1></h1></div>
				</div>
			</div>
			
		</div>
		
	</div>

  	<?php 
		// Footer
		include('./include/footer.php'); 
	?>
</body>
</html>
