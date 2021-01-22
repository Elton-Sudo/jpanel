<?php
	// Security
	include "./include/security.php";
	
	// Include config file
	require_once "./include/config.php";
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Tools</title>
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
		<header class="tools jumbotron my-4">
		  	<h1 style="color:#ffffff;" class="display-3">Tools</h1>
		  	<p  style="color:#ffffff;" class="lead"></p>
		</header>

		<!-- Page Features -->
		<div class="row">				
			<div class="col-lg-9 col-md-6 mb-4">
				 
				<section class="info-section">
					
					<div class="container">
						
						<div class="head-box text-center mb-5">
							<h2>Jpanel Useful Tools</h2>
							<hr>
							<h6 class="text-underline-primary"></h6>
						</div>
						
						<div class="">
							
							<div class="row w-100 mb-4">
								
								<div class="col-md-4">
									<div class="card border-info mx-sm-1 p-3">
										<a href="logins" class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-sign-in fa-lg" aria-hidden="true"></span></a>
										<div class="text-info text-center mt-3"><h4>Logins</h4></div>
										<div class="text-info text-center mt-2"><h1></h1></div>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="card border-danger mx-sm-1 p-3">
										<a href="#/" class="card border-danger shadow text-danger p-3 my-card" ><span class="fa fa-calendar fa-lg" aria-hidden="true"></span></a>
										<div class="text-danger text-center mt-3"><h4>Calendar</h4></div>
										<div class="text-danger text-center mt-2"><p>Comming Soon.</p><h1></h1></div>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="card border-success mx-sm-1 p-3">
										<a href="#/" class="card border-success shadow text-success p-3 my-card"><span class="fa fa-list fa-lg" aria-hidden="true"></span></a>
										<div class="text-success text-center mt-3"><h4>ToDoLi</h4></div>
										<div class="text-success text-center mt-2"><p>Comming Soon.</p><h1></h1></div>
									</div>
								</div>
								
							</div>
								
							<div class="row w-100 mb-4">
								
								<div class="col-md-4">
									<div class="card border-warning mx-sm-1 p-3">
										<a href="calculator" class="card border-warning shadow text-warning p-3 my-card" ><span class="fa fa-calculator fa-lg" aria-hidden="true"></span></a>
										<div class="text-warning text-center mt-3"><h4>Calculator</h4></div>
										<div class="text-warning text-center mt-2"><h1></h1></div>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="card border-success mx-sm-1 p-3">
										<a href="#/" class="card border-success shadow text-success p-3 my-card"><span class="fa fa-share-alt fa-lg" aria-hidden="true"></span></a>
										<div class="text-success text-center mt-3"><h4>Sharing</h4></div>
										<div class="text-success text-center mt-2"><p>Comming Soon.</p><h1></h1></div>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="card border-info mx-sm-1 p-3">
										<a href="#/" class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-gamepad fa-lg" aria-hidden="true"></span></a>
										<div class="text-info text-center mt-3"><h4>Games</h4></div>
										<div class="text-info text-center mt-2"><p>Comming Soon.</p><h1></h1></div>
									</div>
								</div>
								
							</div>
							
							<div class="row w-100  mb-4">
								
								<div class="col-md-4">
									<div class="card border-danger mx-sm-1 p-3">
										<a href="#/" class="card border-danger shadow text-danger p-3 my-card" ><span class="fa fa-puzzle-piece fa-lg" aria-hidden="true"></span></a>
										<div class="text-danger text-center mt-3"><h4>Processes</h4></div>
										<div class="text-danger text-center mt-2"><p>Comming Soon.</p><h1></h1></div>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="card border-warning mx-sm-1 p-3">
										<a href="document" class="card border-warning shadow text-warning p-3 my-card" ><span class="fa fa-folder-open fa-lg" aria-hidden="true"></span></a>
										<div class="text-warning text-center mt-3"><h4>Documents</h4></div>
										<div class="text-warning text-center mt-2"><p>Comming Soon.</p><h1></h1></div>
									</div>
								</div>
								
								<div class="col-md-4">
									
								</div>
								
							 </div>
							
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