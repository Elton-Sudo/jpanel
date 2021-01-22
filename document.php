<?php
	// Security
	include "./include/security.php";
	
	// Include config file
	require_once "./include/config.php";


    include "./include/record_submit.php";
							
	try {
		$query = $pdo->prepare("SELECT *FROM documents ORDER BY id ASC");
		$query->execute();
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$data = $query->fetchAll();

	} catch (PDOException $e) {
		echo $e->getMessage();
	}

	if($data > 0):
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"]) && empty($_POST["author"]) && empty($_POST["type"])){
            echo "<p class='error'>Please fill up the required field!</p>";
        } else {
            header("Location:documents");
        }
    }
        
      if($_SERVER["REQUEST_METHOD"] == "POST"){
         if(empty($_POST["name"]) && empty($_POST["author"]) && empty($_POST["type"])){
              echo "<p class='error'>Please fill up the required field!</p>";
          } else {
                echo "<p class='success'>Record has added successfully</p>";
            }
    }
    
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Documents</title>
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
		<header class="documents jumbotron my-4">
		  	<h1 style="color:#ffffff;" class="display-3">Documents</h1>
		  	<p  style="color:#ffffff;" class="lead"></p>
		</header>

		<!-- Page Features -->
		<div class="row">				
			<div class="col-lg-9 col-md-6 mb-4">
				 
				<section class="info-section">
					
					<div class="container">
						
						<div class="head-box text-center mb-5">
							<h2>Jpanel Useful Documents</h2>
							<hr>
							<h6 class="text-underline-primary"></h6>
						</div>
						
						<div class="tab-bg">
							
							<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
							<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
							
							<div class="card-header mb-4">
								<input class="form-control" id="searchDocuments" type="text" placeholder="Search..">
							</div>
							
							<?php
    
								include "./include/record_submit.php";

								if($_SERVER["REQUEST_METHOD"] == "POST"){
									if(empty($_POST["name"]) && empty($_POST["author"]) && empty($_POST["type"])){
										echo "<p class='error'>Please fill up the required field!</p>";
									} else {
										echo "<p class='success'>Record has added successfully</p>";
									}
								}
							?>

							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
								
								<div class="row">
									
									<div class="col-md-5">
										 
										 <div class="form-group">

											 <select name="type" placeholder="Type" class="form-control" style="height: 45px; font-family:Arial, FontAwesome;">
												 <option value="type" class="type">&#xf039; Document Type</option>
												 <option value="plus" class="pdf">&#xf1c1; PDF</option>
												 <option value="minus" class="word">&#xf1c2; MS-Word</option>
												 <option value="minus" class="excel">&#xf1c3; MS-Excel</option>
												 <option value="multiply" class="power-point">&#xf1c4; MS-PowerPoint</option>
												 <option value="divided by" class="other">&#xf15b; Other</option>
											 </select>

										 </div>
										 
									</div>
									
									<div class="col-md-5">
										
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Name" name="name">
										 </div>
										 
									</div>
									
									<div class="col-md-2">
										 
										 <div class="form-group">
											 <input type="text" class="form-control" placeholder="Size" name="type">
										 </div>
										 
									</div>
									 
								</div>
								
								<div class="row mb-4">
									 
									<div class="col-md-10">
										 
										<div class="form-group">
											<input type="file" class="form-control" name="file" id="InputFile" placeholder="Document" required="required">
										 </div>
										 
									</div>
									
									<div class="col-md-2">
										 
										<div class="form-group">
											<a href="create"><button type="submit" class="float-right btn btn-info" name="upload">Upload</button></a>
										</div>
										 
									</div>
									 
								</div>
							
							
								<div>
									<label for="name">Name</label>
									<input type="text" name="name" id="name">
									<p class="error"><?php echo $name_error; ?></p>
								</div>
								<div>
									<label for="author">author</label>
									<input type="text" name="author" id="author">
									<p class="error"><?php echo $author_error; ?></p>
								</div>
								<div>
									<label for="type">type</label>
									<input type="type" name="type" id="type">
									<p class="error"><?php echo $type_error; ?></p>
								</div>
								<div>
									<label for="category">Category</label>
									<textarea name="category" id="category"></textarea>
								</div>
								<div class="bottom-margin">
									<label for="fileToUpload">Upload Image</label>
									<input type="file" name="fileToUpload" id="fileToUpload">
								</div>
								<div>
									<button type="submit" name="submit">Submit</button>
								</div>
							</form>
							
							<div class="form-group">
								<a href="include/create"><button type="submit" class="float-right btn btn-info" name="upload">Upload</button></a>
							</div>
							
							<table id="myTable" class="table table-striped table-bordered table-sm">

								<thead>
									   <tr>
											<th>Document</th>
											<th>Name</th>
											<th>Author</th>
											<th>Type</th>
											<th>Category</th>
											<th>Edit Delete</th>
									   </tr>
							   </thead>

							   <tfoot>
										<tr>
											<th>Document</th>
											<th>Name</th>
											<th>Author</th>
											<th>Type</th>
											<th>Category</th>
											<th>Edit Delete</th>
									   </tr>
								</tfoot>

								<tbody id="webLogins">
										<?php foreach($data as $data) : ?>    
										<tr>
											<td>
												<a href="<?php echo $data['document_path']; ?>"><img src="./images/document-icon.png" height"30px" width="30px" alt="doc" class="index-image"></a>
											</td>
											<td><?php echo ucwords($data['name']); ?></td>
											<td><?php echo $data['author']; ?></td>
											<td><?php echo $data['type']; ?></td>
											<td>
												<?php echo $data['category']; ?>
											</td>

											<td>
												<a href="include/edit-doc?id=<?php echo $data['id']; ?>" class="btn-inline btn btn-info btn-sm"><i class="fa fa-edit"></i> edit</a> 
												<a href="include/delete-doc?id=<?php echo $data['id']; ?>" onClick="return confirm('Are you sure you want to delete?')" class='btn-inline btn btn-danger btn-sm'><i class="fa fa-trash"></i> delete</a>
											</td>
										</tr>

									<?php endforeach; ?>

									<?php

										else:
											echo "<h2>There is no record!</h2>";
										endif;

										?>

								</tbody>

							</table>
							
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

		