<?php
	// Security
	include "./include/security.php";
	
	// Include config file
	require_once "./include/config.php";

?>

<!doctype html>
<html lang="en">
	<head>
		<title>About Us</title>
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
		<header class="about jumbotron my-4">
		  	<h1 style="color:#ffffff;" class="display-3">About Us</h1>
		  	<p  style="color:#ffffff;" class="lead"></p>
		</header>

		<!-- Page Features -->
		<div class="row">				
			<div class="col-lg-9 col-md-6 mb-4">
				 
				<section class="info-section">
					
					<div class="container">
						
						<div class="head-box text-center mb-5">
							<h2>JOREN is a digital marketing agency adding value to businesses in South Africa!</h2>
							<hr>
							<h6 class="text-underline-primary"></h6>
						</div>
						
						<div class="row tab-bg my-5">
			
							<div class="text-left col-md-12">
								<p>JOREN was founded in 2013 as a freelancing website development company. In 2015 our firm incorporated into a digital marketing agency to broaden our service offering to our growing number of happy clients.</p>
								<p>We believe in adding measurable value to all our clients and dedicating our creative passion to offer quality digital marketing solutions ranging from creative development, design, strategy and technical support of digital platforms.</p>
								<p>We pride ourselves in adding value to all our clients through creative marketing solutions, reliable digital infrastructure and a dedicated technical and creative team.</p>
								<p>We Provide the following services:</p>
							</div>

						</div>
						
						<div class="row tab-bg my-5">
			
							 <div class="col-md-4 text-left">
								<h3>ADVERTISING</h3>
								<ul>
									<li class="nav-item">Digital Platforms</li>
									<li class="nav-item">Billboards</li>
									<li class="nav-item">Publications</li>
								</ul>
							</div>
			
							 <div class="col-md-4 text-left">
								<h3>ANALYTICS</h3>
								<ul>
									<li class="nav-item">Google Analytics</li>
									<li class="nav-item">Bing SEO Analyzer</li>
									<li class="nav-item">Yandex  Tools</li>
									<li class="nav-item">Baidu  Tools</li>
								</ul>
							</div>
			
							 <div class="col-md-4 text-left">
								<h3>BRAND</h3>
								<ul>
									<li class="nav-item">Brand Strategy</li>
									<li class="nav-item">Brand Proposition</li>
									<li class="nav-item">Brand Development</li>
								</ul>
							</div>

						</div>
						
						<div class="row tab-bg my-5">
			
							 <div class="col-md-4 text-left">
								<h3>CLOUD</h3>
								<ul>
									<li class="nav-item">Software as a Service</li>
									<li class="nav-item">Platform as a service</li>
									<li class="nav-item">Amazon AWS</li>
									<li class="nav-item">Microsoft Azure</li>
								</ul>
							</div>
			
							 <div class="col-md-4 text-left">
								<h3>EMAIL</h3>
								<ul>
									<li class="nav-item">Email Marketing</li>
									<li class="nav-item">Google GSuite</li>
									<li class="nav-item">Office 365</li>
									<li class="nav-item">RocketSeed</li>
								</ul>
							</div>
			
							 <div class="col-md-4 text-left">
								<h3>HOSTING</h3>
								<ul>
									<li class="nav-item">Shared Hosting</li>
									<li class="nav-item">Self Managed Server</li>
									<li class="nav-item">Dedicated Server</li>
									<li class="nav-item">Co-location</li>
								</ul>
							</div>

						</div>
						
						<div class="row tab-bg my-5">
			
							 <div class="col-md-4 text-left">
								<h3>INTRANET</h3>
								<ul>
									<li class="nav-item">Microsoft SharePoint</li>
									<li class="nav-item">Google Intranet Sites</li>
									<li class="nav-item">Oxwall CMS</li>
									<li class="nav-item">WordPress CMS</li>
									<li class="nav-item">Drupal CMS</li>
								</ul>
							</div>
			
							 <div class="col-md-4 text-left">
								<h3>SOCIAL MEDIA</h3>
								<ul>
									<li class="nav-item">Strategy</li>
									<li class="nav-item">Management</li>
									<li class="nav-item">Daily Support</li>
								</ul>
							</div>
			
							 <div class="col-md-4 text-left">
								<h3>SEO</h3>
								<ul>
									<li class="nav-item">On-Page Optimise</li>
									<li class="nav-item">Off-Page Optimise</li>
									<li class="nav-item">SEO Audits</li>
								</ul>
							</div>

						</div>
						
						<div class="row tab-bg my-5">
			
							 <div class="col-md-4 text-left">
								<h3>SECURITY</h3>
								<ul>
									<li class="nav-item">Webiste Security</li>
									<li class="nav-item">Intranet Security</li>
								</ul>
							</div>
			
							 <div class="col-md-4 text-left">
								<h3>STRATEGIES</h3>
								<ul>
									<li class="nav-item">Digital Marketing</li>
									<li class="nav-item">Communications</li>
									<li class="nav-item">Public Relations</li>
								</ul>
							</div>
			
							 <div class="col-md-4 text-left">
								<h3>WEBSITE & APPS</h3>
								<ul>
									<li class="nav-item">Assessment</li>
									<li class="nav-item">Design</li>
									<li class="nav-item">Development</li>
								</ul>
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
</html>	

		