	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<?php include "scr-header.php"; ?>
		<body>	
		  <?php include "navbar.php";?>
			  
			<!-- start banner Area -->
			<section class="banner-area-ieee banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex fullscreen align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								IEEE Robotics Competition			
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="ieee.php"> IEEE</a></p>
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
								<h4>IEEE: An Autonomous Robotics Team</h4>
								<p>
									Our IEEE robotics team competes annually at the IEEE Region 5 Conference. 
									Each year, this team is challenged to build an autonomous robot to complete a variety of tasks.									
								</p>
								<p>
									Each year, the IEEE robotics team faces different challenges, such as detecting and mapping underground tunnels and wires, 
									or finding and sorting small coins into piles based on color. 
									Since the robot must do these types of things autonomously, a lot of work goes into making sure the software is 
									perfect for this robot. 
									However, the electrical and mechanical aspects of the robot for IEEE are also very decisive in how well 
									the team does at competition. 
									With IEEE there is always something cool for a student of any major, and the team tends to be very interdisciplinary.
								</p>
								<p>
									IEEE is only one of our many exciting teams at Sooner Competitive Robotics. 
									Check out the rest of them on the <a href="teams.php">Teams</a> page!
								</p>
							</div>
							<?php 
								require_once("social.php");
								color_social();
							?>
							
						</div>
						<div class="col-lg-4 event-details-right">
							<div class="single-event-details">
								<h4>2019 IEEE Region 5 Conference and Student Robotics Competition</h4>
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
										<span>Lafayette, LA</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Venue</span>
										<span>TBA</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Result</span>
										<span>N/A</span>
									</li>											
								</ul>
							</div>
							<div class="single-event-details">
								<h4>2018 IEEE Region 5 Conference and Student Robotics Competition</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Start date</span>
										<span>6th April, 2018</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>End date</span>
										<span>8th April, 2018</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>City</span>
										<span>Austin, TX</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Venue</span>
										<span>AT&T EECC</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Result</span>
										<span>T-15th</span>
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