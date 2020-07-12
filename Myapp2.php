<?php
	session_start();
    include "Inc/head.inc.php";

?>
              <!--Main-->
    <main>
		    <div class='container'>
				<div class='row'>
					<div class='col-md-3'>
								<p class='lead'>Product's Range</p>
								<p>Food Products</p>
						<div class='list-group'>
							<a href='#' class='list-group-item'>Category 1</a>
							<a href='#' class='list-group-item'>Category 2</a>
							<a href='#' class='list-group-item'>Category 3</a>
							<a href='#' class='list-group-item'>Category 4</a>
						</div>
								<p>Groceries</p>
						<div class='list-group'>
							<a href='#' class='list-group-item'>Category 1</a>
							<a href='#' class='list-group-item'>Category 2</a>
							<a href='#' class='list-group-item'>Category 3</a>
							<a href='#' class='list-group-item'>Category 4</a>
						</div>
						         <p>Eletronics</p>
						<div class='list-group'>
							<a href='#' class='list-group-item'>Category 1</a>
							<a href='#' class='list-group-item'>Category 2</a>
							<a href='#' class='list-group-item'>Category 3</a>
							<a href='#' class='list-group-item'>Category 4</a>
						</div>
						          <p>Others</p>
						<div class='list-group'>
							<a href='#' class='list-group-item'>Category 1</a>
							<a href='#' class='list-group-item'>Category 2</a>
							<a href='#' class='list-group-item'>Category 3</a>
							<a href='#' class='list-group-item'>Category 4</a>
						</div>
					</div>
						<div class='col-md-9'>
							<div class='row carousel-holder'>
								<div class='col-md-12'>
									<div id="carousel" class="carousel-slide" data-ride="carousel">
         								<ol class="carousel-indicators">
            								 <li data-target="#carousel" data-slide-to="0" class="active"></li>
            								 <li data-target="#carousel" data-slide-to="1"></li>
            								 <li data-target="#carousel" data-slide-to="2"></li>
											 <li data-target="#carousel" data-slide-to="3"></li>
											 <li data-target="#carousel" data-slide-to="4"></li>
											 <li data-target="#carousel" data-slide-to="5"></li>
										</ol>
											<div class="carousel-inner" role="listbox">
												<div class="item active">
              										<img class="slide-image" src="http://placehold.it/900x350" alt="First slide">
            									</div>
												
												<div class="item">
              										<img class="slide-image" src="" alt="2 slide">
            									</div>

												
												<div class="item ">
              										<img class="slide-image" src="" alt="3 slide">
            									</div>

												
												<div class="item ">
              										<img class="slide-image" src="" alt="4 slide">
            									</div>

												
												<div class="item ">
              										<img class="slide-image" src="" alt="5 slide">
            									</div>

												
												<div class="item ">
              										<img class="slide-image" src="" alt="6 slide">
            									</div>

											</div>
											
											<a class="left carousel-control" href="#carousel" data-slide="prev">
            									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            									
          									</a>
											
											<a class="right carousel-control" href="#carousel"  data-slide="next">
            									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            									
          									</a>
									</div>
								</div>
							</div>
							
								  
					     <div class='row'>
						 <?php
						 	//create connection to the data base
						 	include_once "Inc/config.php";
						 	$conn = new mysqli(SERVER_NAME,USERNAME,PASSWORD,DATABASE);
						 	if($conn->connect_error){
						 		die("Server connection error");
						 	} 
						 	$result = $conn->query("SELECT `name`,`price`,`description` FROM `products` LIMIT 6 OFFSET 0");
						 	// load the results into a 2d array
						 	$content = array();
						 	while($row = $result -> fetch_assoc()){
						 		$content[] = $row;
						 	}
						 	$conn->close();
						 	//echo json_encode($content);
						 	

						 	include_once "Inc/template.php";
						 	$thumbnail = new Template("product_thumbnail.html",$content);
						 	for($i=0;$i<PRODUCT_ROWS*PRODUCT_COLUMNS;$i++){
						 		if($i%PRODUCT_COLUMNS==0){
						 			if($i!=0){
						 				echo "</div><div class='row'>";
						 			}
						 		}
						 		echo "<div class='col-md-4'>";
						 		echo $thumbnail->output();
						 		echo "</div>";
						 	}
						 ?>





							<!--<div class='col-md-4'>
									<div class='thumbnail'>
										<img src='http://placehold.it/320x150' alt='Thumbnail Image'>
										<div class='caption'>
											<h4 class='pull-right'>1500/-RS</h4>
											<h4><a href='#'>AHP special</a></h4>
											<p>A full Set Of Groceries</p>
										</div> 
										<div class='ratings'>
											<p class='pull-right'>21 reviews</p>
											<p>
											   <span class='glyphicon glyphicon-star'></span>
											   <span class='glyphicon glyphicon-star'></span>
											   <span class='glyphicon glyphicon-star'></span>
											   <span class='glyphicon glyphicon-star'></span>
											   <span class='glyphicon glyphicon-star-empty'></span>
											</p>
										</div>
									</div>
								</div>
							
						
								<div class='col-md-4'>
									<div class='thumbnail'>
										<img src='http://placehold.it/320x150' alt='Thumbnail Image'>
										<div class='caption'>
											<h4 class='pull-right'>1500/-RS</h4>
											<h4><a href='#'>AHP special</a></h4>
											<p>A full Set Of Groceries</p>
										</div>
										<div class='ratings'>
											<p class='pull-right'>21 reviews</p>
											<p>
											   <span class='glyphicon glyphicon-star'></span>
											   <span class='glyphicon glyphicon-star'></span>
											   <span class='glyphicon glyphicon-star'></span>
											   <span class='glyphicon glyphicon-star'></span>
											   <span class='glyphicon glyphicon-star-empty'></span>
											</p>
										</div>
									</div>
								</div>
							</div>-->	
						</div>
				</div>
		    </div>
	</main>
              <!--Footer-->
                <?php	  
         
		 include "Inc/foot.inc.php";

	             ?>	        	                             



