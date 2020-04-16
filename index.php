	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
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
							<br>
							<!--
							<p class="pt-10 pb-10">
								 
							</p> -->
							<a href="https://ou.us5.list-manage.com/subscribe?u=f68fdc0659ff62b076b62cca0&id=db1cf84278" class="primary-btn text-uppercase">Mailing List</a>
							<a href="teams.php" class="primary-btn text-uppercase">Join Us</a>
							<a href="https://giving.oufoundation.org/OnlineGivingWeb/Giving/OnlineGiving/SCR" class="primary-btn text-uppercase">Donate</a>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<?php include "feature.php"; ?>
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
							<a href="https://www.altium.com/" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="img/sponsors/altium.png" alt="Altium">		
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 scr-sponsor">
							<a href="https://assunmotor.com/" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="img/sponsors/assunmotor.png" alt="Assun Motors">		
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 scr-sponsor">
							<a href="http://www.ou.edu/coe" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="img/sponsors/gcoe.png" alt="OU GCoE">		
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 scr-sponsor">
							<a href="http://www.ou.edu/sga" class="img-gal">
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