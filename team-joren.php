<?php
	// Security
	include "./include/security.php";
	
	// Include config file
	require_once "./include/config.php";
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Team Joren</title>
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
		<header class="joren jumbotron my-4">
		  	<h1 style="color:#ffffff;" class="display-3">Team Joren</h1>
		  	<p  style="color:#ffffff;" class="lead"></p>
		</header>

		<!-- Page Features -->
		<div class="row">				
			<div class="col-lg-9 col-md-6 mb-4">
				 
				<section class="info-section">
					
					<div class="container">
						
						<div class="head-box text-center mb-5">
							<h2>Our Experienced & Professional Team</h2>
							<hr>
							<h6 class="text-underline-primary"></h6>
						</div>
						
						<div class="tab-bg">
							
							<div class="py-5 team3">
									
									<div class="row justify-content-center mb-4">
										<div class="col-md-7 text-center">
											<h3 class="subtitle font-weight-normal">"Alone we can do so little; together we can do so much." – Helen Keller</h3>
									  	</div>
									</div>
								
									<div class="row">
										
										  <div class="col-lg-4 mb-4">

												<div class="row">
													<div class="col-md-12">
														<img src="images/joren-team/rendani.jpg" alt="wrapkit" class="img-fluid">
													</div>
													<div class="col-md-12">
														<div class="pt-2">
															<h5 class="mt-4 font-weight-medium mb-0">Rendani Nevhulaudzi</h5>
															<h6 class="subtitle">Creative Director • Executive</h6>
															<p>Always inspiring the team to be their best selves. And identifies everyone's best qualities and bring them out.</p>
															
															<!-- Large modal -->
															<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".rendani-modal-lg">Read more</button>

															<div class="modal fade rendani-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
															  <div class="modal-dialog modal-lg">
																<div style="padding-top: 0;" class="modal-content">
																  <div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">More About ...</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	  <span aria-hidden="true">&times;</span>
																	</button>
																  </div>
																  <div class="modal-body">
																	<div class="raw">
																		<div class="col-sm-4">
																			<p style="float: left;"><img src="images/joren-team/rendani.jpg" class="img-fluid rounded">	
																		</div>
																		<div class="col-sm-8 ml-auto">
																			<ul class="text-left list-inline">
																				<li><strong>First Name</strong><br> </li>
																				<li><strong>Last Name</strong><br> </li>
																				<li><strong>Email</strong><br> </li>
																				<li><strong>Mobile Number</strong><br> </li>
																				<li><strong>Address</strong><br> </li>
																				<li><strong>About Me</strong> <br> </li>
																			</ul>
																		</div>
																	</div>
																  </div>
																</div>
															  </div>
															</div>
															<ul class="list-inline">
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-facebook"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-twitter"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-instagram"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-linkedin"></i></a></li>
															</ul>
														</div>
													</div>
												</div>

										  </div>
										
										  <div class="col-lg-4 mb-4">

												<div class="row">
													<div class="col-md-12">
														<img src="images/joren-team/lerato.jpg" alt="wrapkit" class="img-fluid" />
													</div>
													<div class="col-md-12">
														<div class="pt-2">
															<h5 class="mt-4 font-weight-medium mb-0">Lerato Nevhulaudzi</h5>
															<h6 class="subtitle">Digital Marketing • Manager</h6>
															<p>Always showing genuine concern for each employee - the whole person, including his or her life outside of work.</p>
															
															<!-- Large modal -->
															<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".lerato-modal-lg">Read more</button>

															<div class="modal fade lerato-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
															  <div class="modal-dialog modal-lg">
																<div style="padding-top: 0;" class="modal-content">
																  <div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">More About ...</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	  <span aria-hidden="true">&times;</span>
																	</button>
																  </div>
																  <div class="modal-body">
																	<div class="raw">
																		<div class="col-sm-4">
																			<p style="float: left;"><img src="images/joren-team/lerato.jpg" class="img-fluid rounded">	
																		</div>
																		<div class="col-sm-8 ml-auto">
																			<ul class="text-left list-inline">
																				<li><strong>First Name</strong><br> </li>
																				<li><strong>Last Name</strong><br> </li>
																				<li><strong>Email</strong><br> </li>
																				<li><strong>Mobile Number</strong><br> </li>
																				<li><strong>Address</strong><br> </li>
																				<li><strong>About Me</strong> <br> </li>
																			</ul>
																		</div>
																	</div>
																  </div>
																</div>
															  </div>
															</div>
															<ul class="list-inline">
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-facebook"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-twitter"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-instagram"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-linkedin"></i></a></li>
															</ul>
														</div>
													</div>
												</div>

										  </div>
										
										  <div class="col-lg-4 mb-4">

												<div class="row">
													<div class="col-md-12">
														<img src="images/joren-team/phuti.jpg" alt="wrapkit" class="img-fluid" />
													</div>
													<div class="col-md-12">
														<div class="pt-2">
															<h5 class="mt-4 font-weight-medium mb-0">Phutiane Kganyago</h5>
															<h6 class="subtitle">Digital Marketing • Specialist</h6>
															<p>A time keeper who's available to help at any time and always has a funny story to tell. AKA the bread winner.</p>
															
															<!-- Large modal -->
															<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".phutiane-modal-lg">Read more</button>

															<div class="modal fade phutiane-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
															  <div class="modal-dialog modal-lg">
																<div style="padding-top: 0;" class="modal-content">
																  <div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">More About ...</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	  <span aria-hidden="true">&times;</span>
																	</button>
																  </div>
																  <div class="modal-body">
																	<div class="raw">
																		<div class="col-sm-4">
																			<p style="float: left;"><img src="images/joren-team/phuti.jpg" class="img-fluid rounded">	
																		</div>
																		<div class="col-sm-8 ml-auto">
																			<ul class="text-left list-inline">
																				<li><strong>First Name</strong><br> </li>
																				<li><strong>Last Name</strong><br> </li>
																				<li><strong>Email</strong><br> </li>
																				<li><strong>Mobile Number</strong><br> </li>
																				<li><strong>Address</strong><br> </li>
																				<li><strong>About Me</strong> <br> </li>
																			</ul>
																		</div>
																	</div>
																  </div>
																</div>
															  </div>
															</div>
															<ul class="list-inline">
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-facebook"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-twitter"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-instagram"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-linkedin"></i></a></li>
															</ul>
														</div>
													</div>
												</div>

										  </div>
									</div>
								
									<div class="row">
										
										  <div class="col-lg-4 mb-4">

												<div class="row">
													<div class="col-md-12">
														<img src="images/joren-team/ndamu.jpg" alt="wrapkit" class="img-fluid" />
													</div>
													<div class="col-md-12">
														<div class="pt-2">
															<h5 class="mt-4 font-weight-medium mb-0">Ndamulelo Nevhulaudzi</h5>
															<h6 class="subtitle">Business Development • Specialist</h6>
															<p>Her good interpersonal skills go beyond basic communication abilities. She always finds new adventures for Joren.</p>
															
															<!-- Large modal -->
															<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".ndamulelo-modal-lg">Read more</button>

															<div class="modal fade ndamulelo-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
															  <div class="modal-dialog modal-lg">
																<div style="padding-top: 0;" class="modal-content">
																  <div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">More About ...</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	  <span aria-hidden="true">&times;</span>
																	</button>
																  </div>
																  <div class="modal-body">
																	<div class="raw">
																		<div class="col-sm-4">
																			<p style="float: left;"><img src="images/joren-team/ndamu.jpg" class="img-fluid rounded">	
																		</div>
																		<div class="col-sm-8 ml-auto">
																			<ul class="text-left list-inline">
																				<li><strong>First Name</strong><br> </li>
																				<li><strong>Last Name</strong><br> </li>
																				<li><strong>Email</strong><br> </li>
																				<li><strong>Mobile Number</strong><br> </li>
																				<li><strong>Address</strong><br> </li>
																				<li><strong>About Me</strong> <br> </li>
																			</ul>
																		</div>
																	</div>
																  </div>
																</div>
															  </div>
															</div>
															<ul class="list-inline">
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-facebook"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-twitter"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-instagram"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-linkedin"></i></a></li>
															</ul>
														</div>
													</div>
												</div>

										  </div>
										
										  <div class="col-lg-4 mb-4">

												<div class="row">
													<div class="col-md-12">
														<img src="images/joren-team/elton.jpg" alt="wrapkit" class="img-fluid" />
													</div>
													<div class="col-md-12">
														<div class="pt-2">
															<h5 class="mt-4 font-weight-medium mb-0">Elton Brown</h5>
															<h6 class="subtitle">Digital Marketing • Specialist</h6>
															<p>A problem solver with a passion for creating logical and innovative solutions to complex problems. Always available to help the team at any time.</p>
															
															<!-- Large modal -->
															<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".elton-modal-lg">Read more</button>

															<div class="modal fade elton-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
															  <div class="modal-dialog modal-lg">
																<div style="padding-top: 0;" class="modal-content">
																  <div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">More About ...</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	  <span aria-hidden="true">&times;</span>
																	</button>
																  </div>
																  <div class="modal-body">
																	<div class="raw">
																		<div class="col-sm-4">
																			<p style="float: left;"><img src="images/joren-team/elton.jpg" class="img-fluid rounded">	
																		</div>
																		<div class="col-sm-8 ml-auto">
																			<ul class="text-left list-inline">
																				<li><strong>First Name</strong><br> </li>
																				<li><strong>Last Name</strong><br> </li>
																				<li><strong>Email</strong><br> </li>
																				<li><strong>Mobile Number</strong><br> </li>
																				<li><strong>Address</strong><br> </li>
																				<li><strong>About Me</strong> <br> </li>
																			</ul>
																		</div>
																	</div>
																  </div>
																</div>
															  </div>
															</div>
															<ul class="list-inline">
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-facebook"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-twitter"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-instagram"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-linkedin"></i></a></li>
															</ul>
														</div>
													</div>
												</div>

										  </div>
										
										  <div class="col-lg-4 mb-4">

												<div class="row">
													<div class="col-md-12">
														<img src="images/joren-team/phali.jpg" alt="wrapkit" class="img-fluid" />
													</div>
													<div class="col-md-12">
														<div class="pt-2">
															<h5 class="mt-4 font-weight-medium mb-0">Mmaphala Mothwa</h5>
															<h6 class="subtitle">Digital Creative • Designer</h6>
															<p>Always has great dedication and offers a diverse selection of design ideas which she keeps refining throughout every project.</p>
															
															<!-- Large modal -->
															<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".mmaphala-modal-lg">Read more</button>

															<div class="modal fade mmaphala-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
															  <div class="modal-dialog modal-lg">
																<div style="padding-top: 0;" class="modal-content">
																  <div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">More About ...</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	  <span aria-hidden="true">&times;</span>
																	</button>
																  </div>
																  <div class="modal-body">
																	<div class="raw">
																		<div class="col-sm-4">
																			<p style="float: left;"><img src="images/joren-team/phali.jpg" class="img-fluid rounded">	
																		</div>
																		<div class="col-sm-8 ml-auto">
																			<ul class="text-left list-inline">
																				<li><strong>First Name</strong><br> </li>
																				<li><strong>Last Name</strong><br> </li>
																				<li><strong>Email</strong><br> </li>
																				<li><strong>Mobile Number</strong><br> </li>
																				<li><strong>Address</strong><br> </li>
																				<li><strong>About Me</strong> <br> </li>
																			</ul>
																		</div>
																	</div>
																  </div>
																</div>
															  </div>
															</div>
															<ul class="list-inline">
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-facebook"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-twitter"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-instagram"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-linkedin"></i></a></li>
															</ul>
														</div>
													</div>
												</div>

										  </div>
									</div>
								
									<div class="row">
										
										  <div class="col-lg-4 mb-4">
										  </div>
										
										  <!--<div class="col-lg-4 mb-4">

												<div class="row">
													<div class="col-md-12">
														<img src="images/joren-team/lufuno.jpg" alt="wrapkit" class="img-fluid" />
													</div>
													<div class="col-md-12">
														<div class="pt-2">
															<h5 class="mt-4 font-weight-medium mb-0">Lufuno Sikhwari</h5>
															<h6 class="subtitle">Accounts & Billing • Specialist</h6>
															<p>She keeps up with all figures, data, and paperwork daily. She loves sharing her food with the team. AKA JorenBank Keeper.</p>
															
															
															<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".lufuno-modal-lg">Read more</button>

															<div class="modal fade lufuno-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
															  <div class="modal-dialog modal-lg">
																<div style="padding-top: 0;" class="modal-content">
																  <div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">More About ...</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	  <span aria-hidden="true">&times;</span>
																	</button>
																  </div>
																  <div class="modal-body">
																	<div class="raw">
																		<div class="col-sm-4">
																			<p style="float: left;"><img src="images/joren-team/lufuno.jpg" class="img-fluid rounded">	
																		</div>
																		<div class="col-sm-8 ml-auto">
																			<ul class="text-left list-inline">
																				<li><strong>First Name</strong><br> </li>
																				<li><strong>Last Name</strong><br> </li>
																				<li><strong>Email</strong><br> </li>
																				<li><strong>Mobile Number</strong><br> </li>
																				<li><strong>Address</strong><br> </li>
																				<li><strong>About Me</strong> <br> </li>
																			</ul>
																		</div>
																	</div>
																  </div>
																</div>
															  </div>
															</div>
															<ul class="list-inline">
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-facebook"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-twitter"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-instagram"></i></a></li>
																<li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="fa fa-linkedin"></i></a></li>
															</ul>
														</div>
													</div>
												</div>

										  </div>-->
										
										  <div class="col-lg-4 mb-4">
										  </div>
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