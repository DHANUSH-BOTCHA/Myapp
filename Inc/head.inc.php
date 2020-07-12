<?php
#	session_start();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

		<head>
		     <meta charset="utf-8">
   			 <meta http-equiv="X-UA-Compatible" content="IE=edge">
   			 <meta name="viewport" content="width=device-width, initial-scale=1">		    
   			 <title>AHP</title>
   			 					<!--CSS-->
   			 					<!--Bootstrap-->
   			 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   								 <!--FontAwesome-->
   			 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   			 					<!--Custom Css-->
   			 <link rel="stylesheet" href="AHP.css">
   			 
		</head>

		<body>
              <!--Header-->
			 
                      <header>
					    <div class='container-fluid'>
						      <div class='jumbotron text-center'>
									<h1>AHP</h1>
									<?php
										if(isset($_SESSION['username'])){
											echo "<p>Welcome back,".$_SESSION['username']." !<p>";
										}
										else{
											echo "<p>Shop from your known shop from<em> 'Elachi' to 'Eletronics' </em>on fingertips.</p>";
										}
									?>
								</div>
						</div>		
					  </header>
							<nav class='navbar navbar-inverse navbar-fixed-top'>
								<div class='container-fluid'>
									<header class='navbar-header'>
										<!--button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">	 
										<span class="navbar-toggler-icon"></span-->
										<a class='navbar-brand' href='Myapp2.php'>AHP | Home</a>
									</header>
                     		 
									<div class='collapse navbar-collapse' id="navbarResponsive">
											<ul class='nav navbar-nav'>
												<li><a href='#'>Products</a></li>
												<li><a href='#'>Deals</a></li>
											</ul>
											<ul class='nav navbar-nav navbar-right'>

												<?php
													if(isset($_SESSION['id'])){

														echo "<li><a href='signout.php'><span class='glyphicon glyphicon-user'>SignOut</a></li>";
													}
													else{
														echo "<li><a href='signin.php'><span class='glyphicon glyphicon-user'>Sign In</a></li>";
													}
												?>
												
												<li><a href='#'><span class='glyphicon glyphicon-shopping-cart'>Cart</a></li>
												<li>
													<form class='navbar-form' action='#' method='POST'>
														<input type='text' class='form-control' 
															placeholder='Search for an item'>
														<button type='submit' class='btn btn-primary'><span class='glyphicon glyphicon-search'></span></button>
													</form>	
												</li>
											</ul>
									</div>
								</div> 
							</nav>