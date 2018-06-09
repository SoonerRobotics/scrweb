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
			<a href="index"><img src="img/weblogo.png" alt="" title="" /></a>
		</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
				<li><a href="index">Home</a></li>
				<li><a href="about">About</a></li>
				<li class="menu-has-children"><a href="teams">Teams</a>
					<ul>
						<li><a href="ieee">IEEE</a></li>
						<li><a href="mercury">Mercury</a></li>
						<li><a href="sumobot">Sumobot</a></li>
					</ul>
				</li>
				<li><a href="results">Results</a></li>
				<li><a href="sponsors">Sponsors</a></li>			          					          		          
				<li><a href="contact">Contact</a></li>
				</ul>
			</nav><!-- #nav-menu-container -->	    		
		</div>
	</div>
</header><!-- #header -->