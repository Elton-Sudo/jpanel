<?php
	// Security
	include "./include/security.php";
	
	// Include config file
	require_once "./include/config.php";

	$sql = 'SELECT * FROM users WHERE id = ' . $_SESSION['id'];
	$statement = $pdo->prepare($sql);
	$stmt = $pdo->query($sql); 
	$row = $stmt->fetch(PDO::FETCH_ASSOC);

	// Define variables and initialize with empty values
	$first_name = $last_name = $job = $number = $facebook = $twitter = $instagram = $linkedin = $address = $about = $email = $username = $password = $confirm_password = "";
	$first_name_err = $last_name_err = $job_err = $number_err = $facebook_err = $twitter_err = $instagram_err = $linkedin_err = $address_err = $about_err = $email_err = $username_err = $password_err = $confirm_password_err = "";

	// Processing form data when form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST"){

			// Check input errors before inserting in database
		if(empty($email_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)){

			// Prepare an insert statement
			$sql = "INSERT INTO users (first_name, last_name, job, number, facebook, twitter, instagram, linkedin, address, about, email, username, password) VALUES (:first_name, :last_name, :job, :number, :facebook, :twitter, :instagram, :linkedin, :address, :about, :email, :username, :password)";

			if($stmt = $pdo->prepare($sql)){
				// Bind variables to the prepared statement as parameters
				$stmt->bindParam(":first_name", $param_first_name, PDO::PARAM_STR);
				$stmt->bindParam(":last_name", $param_last_name, PDO::PARAM_STR);
				$stmt->bindParam(":job", $param_job, PDO::PARAM_STR);
				$stmt->bindParam(":number", $param_number, PDO::PARAM_STR);
				$stmt->bindParam(":facebook", $param_facebook, PDO::PARAM_STR);
				$stmt->bindParam(":twitter", $param_twitter, PDO::PARAM_STR);
				$stmt->bindParam(":instagram", $param_instagram, PDO::PARAM_STR);
				$stmt->bindParam(":linkedin", $param_linkedin, PDO::PARAM_STR);
				$stmt->bindParam(":address", $param_address, PDO::PARAM_STR);
				$stmt->bindParam(":about", $param_about, PDO::PARAM_STR);
				$stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
				$stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
				$stmt->bindParam(":password", $param_password, PDO::PARAM_STR);

				// Set parameters
				$param_first_name = $first_name;
				$param_last_name = $last_name;
				$param_job = $job;
				$param_number = $number;
				$param_facebook = $facebook;
				$param_twitter = $twitter;
				$param_instagram = $instagram;
				$param_linkedin = $linkedin;
				$param_address = $address;
				$param_about = $about;
				$param_email = $email;
				$param_username = $username;
				$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

				// Attempt to execute the prepared statement
				if($stmt->execute()){
					// Redirect to login page
					header("location:profile");
				} else{
					echo "Something went wrong. Please try again later.";
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
		<title><?php echo htmlspecialchars($_SESSION["username"]); ?>'s Profile</title>
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
		<header class="profile jumbotron my-4">
		  	<h1 style="color:#ffffff;" class="display-3"><?php echo htmlspecialchars($_SESSION["username"]); ?>'s Profile</h1>
		  	<p  style="color:#ffffff;" class="lead"></p>
		</header>

		<!-- Page Features -->
		<div class="">				
			<div class="mb-4">
				 
				<section class="info-section">
					
					<div class="container">
						
						<div class="row tab-bg my-5">
			
							<div class="text-left container">
								<div class="row my-2">
									<div class="col-lg-8 order-lg-2">
										<ul class="nav nav-tabs">
											<li class="nav-item">
												<a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
											</li>
											<!--<li class="nav-item">
												<a href="" data-target="#messages" data-toggle="tab" class="nav-link">Contact info</a>
											</li>-->
											<li class="nav-item">
												<a href="" data-target="#edit" data-toggle="tab" class="nav-link">other info</a>
											</li>
										</ul>
										<div class="tab-content py-4">
											<div class="tab-pane active" id="profile">
												<h5 class="mb-3"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></h5>
												<div class="row">
													<div class="col-md-6">
														<span><?php echo $row['job']; ?></span>
														<hr>
														
														<h5>About</h5>
														<p>
															<?php echo $row['about']; ?>
														</p>
														
														<h5>Email</h5>
														<p>
															<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
														</p>
														
														<h5>Mobile Number</h5>
														<p>
															<a href="tel:<?php echo $row['number']; ?>"><?php echo $row['number']; ?></a>
														</p>
														
														<h5>Address</h5>
														<p>
															<?php echo $row['address']; ?>
														</p>
														
														<h5>Created At</h5>
														<p>
															<?php echo $row['created_at']; ?>
														</p>
													</div>
													<div class="col-md-6">
														<h6>Social Media</h6>
														<ul class="list-inline">
															<li class="list-inline-item"><a href="<?php echo $row['facebook']; ?>" target="_blank" class="text-decoration-none d-block px-1"><i class="fa fa-facebook"></i></a></li>
															<li class="list-inline-item"><a href="<?php echo $row['twitter']; ?>" target="_blank" class="text-decoration-none d-block px-1"><i class="fa fa-twitter"></i></a></li>
															<li class="list-inline-item"><a href="<?php echo $row['instagram']; ?>" target="_blank" class="text-decoration-none d-block px-1"><i class="fa fa-instagram"></i></a></li>
															<li class="list-inline-item"><a href="<?php echo $row['linkedin']; ?>" target="_blank" class="text-decoration-none d-block px-1"><i class="fa fa-linkedin"></i></a></li>
														</ul>
													</div>
													<!--<div class="col-md-12">
														<h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
														<table class="table table-sm table-hover table-striped">
															<tbody>                                    
																<tr>
																	<td>
																		<strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
																	</td>
																</tr>
																<tr>
																	<td>
																		<strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
																	</td>
																</tr>
																<tr>
																	<td>
																		<strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
																	</td>
																</tr>
																<tr>
																	<td>
																		<strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
																	</td>
																</tr>
																<tr>
																	<td>
																		<strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												/row-->
												</div>
											</div>
											<!--<div class="tab-pane" id="messages">
												<div class="alert alert-info alert-dismissable">
													<a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
												</div>
												<table class="table table-hover table-striped">
													<tbody>                                    
														<tr>
															<td>
															   <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
															</td>
														</tr>
														<tr>
															<td>
															   <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
															</td>
														</tr>
														<tr>
															<td>
															   <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus. 
															</td>
														</tr>
														<tr>
															<td>
															   <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
															</td>
														</tr>
														<tr>
															<td>
															   <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros. 
															</td>
														</tr>
													</tbody> 
												</table>
											</div>-->
											
											<div class="tab-pane" id="edit">
												<form role="form">
													<div class="form-group row">
														<label class="col-lg-3 col-form-label form-control-label">Username</label>
														<div class="col-lg-9">
															<input name="username" class="form-control" type="text" value="">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label form-control-label">First name</label>
														<div class="col-lg-9">
															<input name="first_name" class="form-control" type="text" value="">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label form-control-label">Last name</label>
														<div class="col-lg-9">
															<input name="last_name" class="form-control" type="text" value="">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label form-control-label">Email</label>
														<div class="col-lg-9">
															<input name="email" class="form-control" type="email" value="">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label form-control-label">Mobile Number</label>
														<div class="col-lg-9">
															<input name="number" class="form-control" type="text" value="">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label form-control-label">Job Title</label>
														<div class="col-lg-9">
															<input name="job" class="form-control" type="text" value="">
														</div>
													</div>
													
													<div class="form-group row">
														<label class="col-lg-3 col-form-label form-control-label">Facebook</label>
														<div class="col-lg-9">
															<input name="facebook" class="form-control" type="url" value="">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label form-control-label">Twitter</label>
														<div class="col-lg-9">
															<input name="twitter" class="form-control" type="text" value="">
														</div>
													</div>
													
													<div class="form-group row">
														<label class="col-lg-3 col-form-label form-control-label">Instagram</label>
														<div class="col-lg-9">
															<input name="instagram" class="form-control" type="text" value="">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label form-control-label">Linkedin</label>
														<div class="col-lg-9">
															<input name="linkedin" class="form-control" type="text" value="">
														</div>
													</div>
													
													<div class="form-group row">
														<label class="col-lg-3 col-form-label form-control-label">Address</label>
														<div class="col-lg-9">
															<input name="address" class="form-control" type="text" value="">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label form-control-label">About</label>
														<div class="col-lg-9">
															<input name="about" class="form-control" type="text" value="">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label form-control-label"></label>
														<div class="col-lg-9">
															<input type="reset" class="btn btn-secondary" value="Cancel">
															<input type="button" class="btn btn-primary" value="Save Changes">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="col-lg-4 order-lg-1 text-center">
										<img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
										<h6 class="mt-2">Upload a different photo</h6>
										<label class="custom-file">
											<input type="file" id="file" class="custom-file-input">
											<span class="custom-file-control">Choose file</span>
										</label>
									</div>
								</div>
							</div>

						</div>
						
					</div>
						
				</section>
				
			</div>
			 
		</div>
	
	</div>
	<!-- Page Content End -->
	
	<?php 
		// Footer
		include('./include/footer.php'); 
	?>
</body>
</html>	

		