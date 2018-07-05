	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<?php include "scr-header.php"; ?>
		<body>	
		  <?php include "navbar.php";?>
			  
			<!-- start banner Area -->
			<section class="banner-area relative banner-area-events" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex fullscreen align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Events				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="events.php"> Events</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start gallery Area -->
			<section class="gallery-area section-top-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Upcoming Events</h1>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<?php 
				require_once("upcoming_events.php"); 
				printEvents();
			?>

			<section class="gallery-area section-half-gap">
				<div class="container">
					<div class="row justify-content-center">
						<iframe src="https://calendar.google.com/calendar/b/1/embed?title=SCR%20Events%20Calendar&amp;
							height=500&amp;wkst=1&amp;bgcolor=%23ffffff&amp;
							src=ouscr10%40gmail.com&amp;color=%23333333&amp;
							src=dgc8fj97af86rsrbg2vfbe1kis%40group.calendar.google.com&amp;color=%23875509&amp;
							src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%230F4B38&amp;
							src=jsu88g72kj92klcj8k96vkfokc%40group.calendar.google.com&amp;color=%231B887A&amp;
							src=4ho734lki6g4j9hs2j7u0klj20%40group.calendar.google.com&amp;color=%23B1440E&amp;
							src=l6ibdedijoelppna5n75dd3vmg%40group.calendar.google.com&amp;color=%232F6309&amp;
							src=mj8sodh235rfj7u9eig1t9sq5o%40group.calendar.google.com&amp;color=%2323164E&amp;
							src=odqucegf2mqa91fkocqu8bjbj8%40group.calendar.google.com&amp;color=%23711616&amp;
							ctz=America%2FChicago"
							style="border-width:0" 
							width="1200" 
							height="500" 
							frameborder="0" 
							scrolling="no">
						</iframe>
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