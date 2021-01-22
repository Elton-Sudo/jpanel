<!doctype html>
<html lang="en">
	<head>
		<title>Page Template</title>
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
		<header class="jumbotron my-4">
		  	<h1 class="display-3">A Warm Welcome!</h1>
		  	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
		</header>

		<!-- Page Features -->
		<div class="container">
			<div onclick='count()'>
			<form name='myForm'>
			<input type='button' value='clickOnDiv'/>
			</form>
			</div>
			Clicks so far: <span id='cc'><?php echo $clicks; ?></span>
		</div>

<script language="javascript" type="text/javascript">
<!--
var clickerid = <?php echo $_GET['id'] ?>; //counter id allows easy implementation of other counters if desired
var clicks = <?php echo $clicks ?>;
var clickLock = false;
var maxClickRate = 1000; //maximum click rate in ms, so the server won't choke
//Browser Support Code
function count(){
 if (clickLock) { 
     alert('you\'re clicking too fast!'); 
     return;
 }
 clickLock=true;
 setTimeout('clickLock=false;',maxClickRate);
 var ajaxRequest;  // The variable that makes Ajax possible!

 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      document.getElementById('cc').innerHTML = ++clicks;
   }
 }
 // Now pass clicks value to the
 // server script.
 var queryString = "?id=" + clickerid + "&update=true";
 ajaxRequest.open("GET", "count.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}
//-->
</script>
		<!--<div class="row text-center">
			<div class="col-lg-3 col-md-6 mb-4">
				<div class="card h-100">
				  	<img class="card-img-top" src="http://placehold.it/500x325" alt="">
				  	<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
				  	</div>
					<div class="card-footer">
						<a href="#" class="btn btn-primary">Find Out More!</a>
					</div>
				</div>
		  	</div>

		  	<div class="col-lg-3 col-md-6 mb-4">
			  	<div class="card h-100">
				  	<img class="card-img-top" src="http://placehold.it/500x325" alt="">
				  	<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
				  	</div>
				  	<div class="card-footer">
						<a href="#" class="btn btn-primary">Find Out More!</a>
				  	</div>
			  	</div>
		  	</div>

			<div class="col-lg-3 col-md-6 mb-4">
				<div class="card h-100">
				  	<img class="card-img-top" src="http://placehold.it/500x325" alt="">
				  	<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
				  	</div>
					<div class="card-footer">
						<a href="#" class="btn btn-primary">Find Out More!</a>
					</div>
				</div>
		  	</div>

		  	<div class="col-lg-3 col-md-6 mb-4">
			  	<div class="card h-100">
				  	<img class="card-img-top" src="http://placehold.it/500x325" alt="">
				  	<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
				  	</div>
				  	<div class="card-footer">
						<a href="#" class="btn btn-primary">Find Out More!</a>
				  	</div>
			  	</div>
		  	</div>
			
		</div>-->
		
	</div>
	<!-- Page Content End -->
	
	<?php 
		// Footer
		include('./include/footer.php'); 
	?>
</body>
</html>