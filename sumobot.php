	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<?php include "scr-header.php"; ?>
		<body>	
		  <?php include "navbar.php";?>
			<!-- start banner Area -->
			<section class="banner-area banner-area-sumo relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Sumobot Robotics Team			
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="sumobot.php"> Sumobot</a></p>
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
								<h4>Sumobot: A Fighting Robotics Team</h4>
								<p>
									The Sumobot team (formerly known as ASEE) creates an autonomous sumo robot each year. 
									The mission: push other robots out of the ring without being pushed out. 
									For the past two years, this team has competed in the 3 kg weight class at RoboGames.									
								</p>
								<p>
									This team focuses on choosing a good mechanical design, 
									including material selection and strategic structural support elements, 
									in order to build the strongest robot. 
									Additionally, programmers on this team design tactics for their robot to execute 
									in order to outsmart the other teams at competition. 
									Finally, members of this team’s electrical sub-team work to make sure the electronics can survive a sumo bot battle.
								</p>
								<p>
									This team is great for members with different levels of experience and backgrounds in robotics. 
									It is definitely a fun competition team to be a part of! 
									To see more of these teams, take a look at the <a href="teams.php">Teams</a> page!
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
							<div class="single-event-details">
								<h4>RoboGames 2018: 3kg Sumo</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Start date</span>
										<span>27th April, 2018</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>End date</span>
										<span>29th April, 2018</span>
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
										<span>5th</span>
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