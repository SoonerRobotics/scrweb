	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<?php include "scr-header.php"; ?>
		<body>	
		  <?php include "navbar.php";?>
			  
			<!-- start banner Area -->
			<section class="banner-area-robomagellan banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex fullscreen align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Robomagellan Robotics Competition			
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="robomagellan.php"> Robomagellan</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start event-details Area -->
			<section class="event-details-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 event-details-left">
							<div class="main-img">
								<img class="img-fluid" src="img/event-details-img.jpg" alt="">
							</div>
							<div class="details-content">
								<h4>Robomagellan: A Grand Challenge</h4>
								<p>
									2018-19 will be the first time we compete in the Robomagellan competition, which takes place annually at RoboGames.
									This competition is a smaller scale version of the 
									<a href="https://www.youtube.com/watch?v=vCRrXQRvC_I">2005 DARPA Grand Challenge</a> in many ways.							
								</p>
								<p>
									The Robomagellan competition is held outdoors in a large area with natural and man made obstacles. 
									Teams are challenged to make an autonomous robot that can navigate the course from a start point to an end point.
									Along the way there are waypoints that can be used to reduce the score of a run (lower scores are better, as the 
									competition is time based).
									These waypoints are located off course and in rugged terrain but provide a huge boost to teams who can get them.
									Humans can program their robots to follow a course, but robots must be able to sense their environment and make 
									changes to their planned course in real time in order to be successful.
									Even if it's raining, the competiiton still continues! Therefore all electrical systems need to be protected.
									Overall, this competition is a confluence of some of the most fun and difficult problems to solve for mobile robots,
									and we believe our team is up to the task.
								</p>
								<p>
									Robomagellan is going to be an exciting and new challenge for our team! 
									The rest of our teams will be working hard too; you can find them on the <a href="teams.php">Teams</a> page!
								</p>
							</div>
							<?php 
								require_once("social.php");
								color_social();
							?>
							
						</div>
						<div class="col-lg-4 event-details-right">
							<div class="single-event-details">
								<h4>RoboGames 2019</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Start date</span>
										<span>TBA</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>End date</span>
										<span>TBA</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>City</span>
										<span>Pleasanton, CA</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Venue</span>
										<span>Alameda County Fairgrounds</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Result</span>
										<span>N/A</span>
									</li>											
								</ul>
							</div>												
						</div>
					</div>
				</div>	
			</section>
			<!-- End event-details Area -->	    			

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