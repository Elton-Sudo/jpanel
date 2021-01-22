 <?php

	// Security
	require_once "./include/security.php";
		
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
		
	    <form method="post">
	 
			<h2>Calculate</h2> 
			<hr>
			
			   <div class="row">
				   <div class="col-md-4">
						<div class="form-group">
							<input type="text" name="entry1" class="form-control">
						</div>
				   </div>
				   
				   <div class="col-md-4">

						<div class="form-group">
							<select name="sign" class="form-control">
								<option value="plus">Plus</option>
								<option value="minus">Minus</option>
								<option value="multiply">Multiply</option>
								<option value="divided by">Devide</option>
							</select>
						</div>

					</div>
				   
				   <div class="col-md-4">

						<div class="form-group">
							<input type="text" name="entry2" class="form-control">
						</div>

					</div>
				</div>
				<?php			
					// Calculator	
					if(isset($_POST['submit']))
						{

						if(is_numeric($_POST['entry1']) && is_numeric($_POST['entry2']))
						{

							if($_POST['sign'] == 'plus')
								{
									$total = $_POST['entry1'] + $_POST['entry2'];	
								}

							if($_POST['sign'] == 'minus')
								{
									$total = $_POST['entry1'] - $_POST['entry2'];	
								}

							if($_POST['sign'] == 'multiply')
								{
									$total = $_POST['entry1'] * $_POST['entry2'];	
								}

							if($_POST['sign'] == 'divided by')
								{
									$total = $_POST['entry1'] / $_POST['entry2'];	
								}

							echo "<h1>{$_POST['entry1']} {$_POST['sign']} {$_POST['entry2']} equals {$total}</h1>"; 
						} 

							else {

								echo '<span style="color: #ff0000;">Please enter numeric values</span>';

						}
					}
				?>
				<hr>
			
				<div class="form-group">
					 <button  name="submit" type="submit" value="Calculate" class="btn btn-info">Calculate</button>
					 <a href="tools" class="btn btn-warning">Back</a>
				</div>
		</form>

	</div>
	
</body>
</html>