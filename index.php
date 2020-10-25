	<!DOCTYPE html>
	<html lang="en" class="no-js">
		<?php include "scr-header.php"; ?>
		<body>	
            <!-- Include JavaScript SDK for Facebook feed integration -->
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=814259118915161&autoLogAppEvents=1';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

		    <?php include "navbar.php";?>

			<!-- start banner Area -->
			<section class="banner-area relative banner-area-home" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-uppercase text-white">
								Our mission is to win			
							</h1>
							<br />
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<section class="p-40">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Create Winning Robots</h4>
								</div>
								<div class="desc-wrap">
									<p>
										The robots we make compete all around the United States against other college teams 
										and at open competitions, like RoboGames. 
										Whether it's building, wiring, or programming robots that interests you, 
										our teams need your skills in order to succeed.
									</p>
									<a href="teams.php">Our Teams</a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Challenge Yourself</h4>
								</div>
								<div class="desc-wrap">
									<p>
										If you are new to robotics or have been doing it for years, there's always more room to learn and grow.
										Every one of our teams has an opportunity for students to improve their technical 
										engineering skills, as well as their ability to manage projects and work in diverse teams.
									</p>
									<a href="contact.php">Contact Us</a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Improve the Team</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Every member of SCR contributes to our organization's achievents in a valuable way. 
										Students of all backgrounds join together to make our teams successful and most importantly, fun.
									</p>
									<a href="results.php">Past Results</a>									
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End feature Area -->

			<!-- Start gallery Area -->
			<section class="gallery-area">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Our Sponsors</h1>
								<p>
									These sponsors make it possible for our teams to build robots and go to competition.
									If you are interested in sponsoring our robotics teams, send us an email at&nbsp; <a href="mailto:scr@ou.edu">scr@ou.edu</a>
								</p>
								<b>You can also donate to the team by clicking the Donate button at the top!</b>
							</div>
						</div>
					</div>
					<div class="row justify-content-center" style="width:80%; margin: auto">
						<div class="col-md-6 scr-sponsor">
							<a href="https://www.altium.com/">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="img/sponsors/altium.png" alt="Altium">		
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 scr-sponsor">
							<a href="http://www.ou.edu/coe">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="img/sponsors/gcoe.png" alt="OU GCoE">		
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 scr-sponsor">
							<a href="http://www.ou.edu/sga">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="img/sponsors/sga.png" alt="OU SGA">		
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->	
			
			<!-- start footer Area -->		
			<?php include "footer.php"; ?>
			<!-- End footer Area -->	


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>