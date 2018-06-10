	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<?php include "scr-header.php"; ?>
		<body>	
		  <?php include "navbar.php";?>

			<!-- start banner Area -->
			<section class="banner-area-mercury banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex fullscreen align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Mercury Robotics Competition			
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="mercury.php"> Mercury</a></p>
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
								<h4>Mercury: A Long-Distance Teleoperated Robotics Team</h4>
								<p>
									Mercury is our tele-operated robotics competition, 
									but the catch is that the robot is over 50 miles away when being operated! 
									Each year, this robotics team designs a robot to navigate an obstacle course in Stillwater, OK 
									while the driver operates the robot from Norman, OK.									
								</p>
								<p>
									Mercury spends their time building rugged robots, as the obstacle course tends to have some tricky terrain 
									elements to navigate. 
									Additionally, this robot normally needs to pick up a small item along its journey through the course, 
									so a robotic arm is important to the success of the team. 
									Besides the obvious mechanical challenges they face, 
									Mercury needs programmers to create the controls and automation of the robot, 
									along with the networking required for long distance communications. 
									The electrical team works hard to make sure the robot’s internal systems can handle 
									large voltage and current spikes often caused by the obstacles on the course, while also making the electronics compact, 
									yet accessible.
								</p>
								<p>
									Mercury is a team composed of students from many different majors, 
									as interdisciplinary work is needed in order to engineer the success of the robot. 
									To check out more teams like Mercury, visit the <a href="teams.php">Teams</a> page!
								</p>
							</div>
							<?php 
								require_once("social.php");
								color_social();
							?>
							
						</div>
						<div class="col-lg-4 event-details-right">
							<div class="single-event-details">
								<h4>2019 OSU Mercury Competition</h4>
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
										<span>Stillwater, OK</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Venue</span>
										<span>Oklahoma State University</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Result</span>
										<span>N/A</span>
									</li>											
								</ul>
							</div>
							<div class="single-event-details">
								<h4>2018 OSU Mercury Competition</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Start date</span>
										<span>21st April, 2018</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>End date</span>
										<span>21st April, 2018</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>City</span>
										<span>Stillwater, OK</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Venue</span>
										<span>Oklahoma State University</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Result</span>
										<span>9th</span>
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