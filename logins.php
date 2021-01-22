<?php
	// Security
	include "./include/security.php";
	
	// Include config file
	require_once "./include/config.php";
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Logins</title>
		<?php
			// Meta, Scrips and Styles
			include('./include/head.php');
		?>
		
		<script>
			//Delete
			function deleteItem(id) {
				if (confirm("Are you sure?")) {
					// your deletion code
					window.location.href='delete.php?id='+id;
				}
				return false;
			}
			
			// Popover
			$(function () {
			  $('.example-popover').popover({
				container: 'body'
			  })
			})
		</script>
		
	</head>
<body>
		
	<?php
		// Navigation
		include('./include/menu.php');
	?>
	
	<!-- Page Content -->
	<div class="container">
		
		<!-- Page Header -->
		<header class="logins jumbotron my-4">
		  	<h1 style="color:#ffffff;" class="display-3">Admin Logins</h1>
		  	<p  style="color:#ffffff;" class="lead"></p>
		</header>

		<!-- Page Features -->			
			<div class="row">
				
				<div class="col-lg-9 col-md-6 mb-4 text-left">
					
					<h2>Joren Root Logins</h2> 
					<hr>
					
					<div class="card-header">
						<input class="form-control" id="searchRootLogins" type="text" placeholder="Search..">
					</div>
					
					<table class="table table-striped table-bordered table-sm">

						<thead>

							<tr>
								<th>Resource</th>
								<th>Username</th>
								<th>Password</th>
							</tr>

						</thead>
						
						<tfoot>
							
							<tr>
								<th>Resource</th>
								<th>Username</th>
								<th>Password</th>
							</tr>
							
						</tfoot>

						<tbody id="rootLogins">

							<tr>
								<td>Joren Wi-Fi</td>
								<td>Joren 5G/Joren 2G</td>
								<td>*******</td>
							</tr>

							<tr>
								<td><a data-toggle="popover" title="Popover title" title="FTP Details" data-content="Host: jpanel.co.za, Port: 22, Type: SFTP, Directory: /var/www/html">Jpanel FTP <i class="fa fa-share-square"></i></a></td>
								<td>*******</td>
								<td>*******</td>
							</tr>

							<tr>
								<td>Jpanel MySQL</td>
								<td>*******</td>
								<td>*******</td>
							</tr>

							<tr>
								<td>Joren Router</td>
								<td>*******</td>
								<td>*******</td>
							</tr>

							<tr>
								<td>Joren Canon Printer</td>
								<td>*******</td>
								<td>*******</td>
							</tr>

							<tr>
								<td>Joren Samsung Xpress C1860FW Printer</td>
								<td>*******</td>
								<td>*******</td>
							</tr>
						</tbody>

					</table>
					
					<h2>Joren Admin Logins</h2>
					<hr>
					<div class="card-header"> 
						<a href="./add-new"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-user-lock"></i> Add New</button></a>
						<a href="csv-export"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-download"></i> Export</button></a>
							<hr>
						<div class="row">
						<div class="col-lg-1 col-md-6">
							<button class="btn btn-info" onclick="sortTable()">Sort</button>
						</div>
						<div class="col-lg-11 col-md-6">
							<input class="form-control" id="searchWebLogins" type="text" placeholder="Search..">
						</div>
						</div>
					</div>
					<table id="myTable" class="table table-striped table-bordered table-sm">

						<thead>
                               <tr>
                                   <th>Site Name</th>
                                   <th>Url</th>
                                   <th>User & Pass</th>
                                   <th>Update</th>
                               </tr>
                       </thead>
						
                       <tfoot>
                                <tr>
                                    <th>Site Name</th>
                                    <th>Url</th>
                                    <th>User & Pass</th>
                                 	<th>Update</th>
                        		</tr>
                        </tfoot>
						
						<tbody id="webLogins">
								<?php
									$sql = 'SELECT * FROM web_admin ORDER BY id ASC';
									$statement = $pdo->prepare($sql);
									$statement->execute();
									$site_logins = $statement->fetchAll(PDO::FETCH_OBJ);
								?>
							
								<?php foreach($site_logins as $site_logins): ?>
							
								<tr>
									<td><?= $site_logins->sitename; ?></td>
									<td><a target="_blank"href="<?= $site_logins->url; ?>"><i class="fa fa-link fa-lg"></i> Go to!</a></td>
									<td><a href="#/" data-toggle="popover" title="Username: <?= $site_logins->username; ?>" data-content="Password: <?= $site_logins->password; ?>"><i class="fa fa-lock fa-lg"></i> View Details</a></td>
									<td>
										<a href="edit?id=<?= $site_logins->id ?>" class="btn-inline btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
										<a onclick="return confirm('Are you sure you want to delete this entry?')" href="include/delete?id=<?= $site_logins->id ?>" class='btn-inline btn btn-danger btn-sm'><i class="fa fa-trash"></i></a>
									</td>
								</tr>
							<?php endforeach; ?>                                            
						</tbody>
						
					</table>
					
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
	
	<!-- Custom ScriptS -->
	<script>
		
		// Web Logins
		$(document).ready(function(){
		  $("#searchRootLogins").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#rootLogins tr").filter(function() {
			  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		  });
		});
		
		// Root Logins
		$(document).ready(function(){
		  $("#searchWebLogins").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#webLogins tr").filter(function() {
			  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		  });
		});
		
		$(document).ready(function(){
			$('[data-toggle="popover"]').popover();
		});
		
		// Sort Table 
			function sortTable() {

			  var table, rows, switching, i, x, y, shouldSwitch;
			  table = document.getElementById("myTable");
			  switching = true;

			  /*Make a loop that will continue until
			  no switching has been done:*/
			  while (switching) {

				//start by saying: no switching is done:
				switching = false;
				rows = table.rows;

				/*Loop through all table rows (except the
				first, which contains table headers):*/
				for (i = 1; i < (rows.length - 1); i++) {

				  //start by saying there should be no switching:
				  shouldSwitch = false;

				  /*Get the two elements you want to compare,
				  one from current row and one from the next:*/
				  x = rows[i].getElementsByTagName("TD")[0];
				  y = rows[i + 1].getElementsByTagName("TD")[0];

				  //check if the two rows should switch place:
				  if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {

					//if so, mark as a switch and break the loop:
					shouldSwitch = true;
					break;
				  }
				}

				if (shouldSwitch) {

				  /*If a switch has been marked, make the switch
				  and mark that a switch has been done:*/
				  rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
				  switching = true;
				}
			  }
			}	
		
	</script>
	
</body>