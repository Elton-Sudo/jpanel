<?php
	// Security
	include "./include/security.php";
	
	// Include config file
	require_once "./include/config.php";
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Gallery</title>
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
		<header class="adventures jumbotron my-4">
		  	<h1 style="color:#ffffff;" class="display-3">Joren Adventures</h1>
		  	<p  style="color:#ffffff;" class="lead"></p>
		</header>

		<!-- Page Features -->
		<div class="row">				
			<div class="col-lg-9 col-md-6 mb-4">
				 
				<section class="info-section">
					
					<div class="container">
						
						<div class="head-box text-center mb-5">
							<h2>Our Awesome Adventures</h2>
							<hr>
							<h6 class="text-underline-primary"></h6>
						</div>
						
						<div class="tab-bg">
							<input type="button" value = "Refresh" onclick="history.go(0)" />
							<iframe style="border-radius: 8px; width:100%; height:100vh; border:none; overflow: hidden;" src=".gallery/all"></iframe>			         
						</div>
						
					</div>
					
				</section>
				
			</div>
			
			<?php
				// Navigation
				include('./include/quick -links.php');
			?>
			 
		</div>
	
	</div>
	<!-- Page Content End -->
	
	<?php 
		// Footer
		include('./include/footer.php'); 
	?>
</body>