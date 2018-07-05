	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
		<?php include "scr-header.php"; ?>
		<body>	
		  <?php include "navbar.php";?>

			<!-- start banner Area -->
			<section class="banner-area banner-area-home relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								Our mission is to win			
							</h1>
							<br>
							<!--
							<p class="pt-10 pb-10">
								 
							</p> -->
							<a href="https://us5.list-manage.com/subscribe?u=f68fdc0659ff62b076b62cca0&id=461ddc48af" class="primary-btn text-uppercase">Join Us</a>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<?php include "feature.php"; ?>
			<!-- End feature Area -->

			<?php
				require_once("upcoming_events.php");
				if(get_num_events() > 0)
				{
			?>
				<section class="gallery-area section-half-gap">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="menu-content pb-70 col-lg-8">
								<div class="title text-center">
									<h1 class="mb-10">Upcoming Events</h1>
								</div>
							</div>
						</div>
					
			<?php
					printEvents();
			?>
					</div>
				</section>
			<?php
				}
			?>
						
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