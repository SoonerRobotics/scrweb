<header id="header" id="home">
	<div class="header-top">
		<div class="container">
			<div class="row">
				<?php 
					require_once("social.php"); 
					header_social();
				?>
				<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
					<a href="mailto:scr@ou.edu"><span class="lnr lnr-envelope"></span> <span class="text">scr@ou.edu</span></a>			
				</div>
			</div>			  					
		</div>
	</div>
	<div class="container main-menu">
		<div class="row align-items-center justify-content-between d-flex">
		<div id="logo">
			<a href="index.php"><img src="img/weblogo.png" alt="" title="" /></a>
		</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="pluto.php">Pluto</a></li>
					<li><a href="teams.php">Teams</a></li>
					<li><a href="results.php">Results</a></li>
					<li><a href="media.php">Social</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav><!-- #nav-menu-container -->	    		
		</div>
	</div>
</header><!-- #header -->