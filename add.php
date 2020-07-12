<?php
	session_start();
    include "Inc/head.inc.php";

?>


              <!--Header-->
			 
                      <header>
					    <div class='container'>
						      <h1 style="color: black">Create an Account </h1>
						</div>		
					  </header>
	<main>
		    <div class='container'>
			   <form action='Inc/insert.inc.php' method='POST'>
					<div class="form-group">
						<label for="username">Username</label>
						<input class="form-control" id="username" name="username" type="text"/>
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input class="form-control" id="e-mail" name="email" type="varchar"/>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input class="form-control" id="password" name="password" type="password"/>
					</div>
					<button class="btn btn-success" type="submit">Create Account</button>
			   </form>
			   
			</div>
	</main>
             
	<?php	  
         
		 include "Inc/foot.inc.php";

	?>			 
