<!DOCTYPE html>
<html lang="en" class="no-js">
	<?php include "header.php"; ?>
	<body>	
		<?php include "navbar.php";?>
			
		<!-- start banner Area -->
		<section class="banner-area relative banner-area-about" id="home">	
			<div class="overlay overlay-bg"></div>
			<div class="container">				
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
							About Us				
						</h1>	
						<br />
					</div>	
				</div>
			</div>
		</section>
		<!-- End banner Area -->
		
		<br/>

		<!-- Start info Area -->
		<section class="info-area pb-120">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 no-padding info-area-left">
						<img class="img-fluid" src="img/scr-featured-logo.png" alt="">
					</div>
					<div class="col-lg-6 info-area-right">
						<h1>Who we are</h1>
						<p>
							Founded in 2013, Sooner Competitive Robotics is the largest robotics organization and one of the
							largest competitive teams at the Univeristy of Oklahoma. We compete in robotics competitions across
							the nation encompassing a variety of unique challenges.
						</p>
						<br>
						<h1>Mission</h1>
						<p>
							The mission of Sooner Competitive Robotics is to represent the University of Oklahoma 
							Gallogly College of Engineering by winning robotics competitions.
						</p>
					</div>
				</div>
			</div>	
		</section>
		<!-- End info Area -->	

		<!-- Start mission Area -->
		<section class="mission-area pb-120">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-70 col-lg-8">
						<div class="title text-center">
							<h1 class="mb-10">Our Core Values and Goals</h1>
							<p>
								Each of the below tenets build upon each other 
								to form a good organization with strong members.
								Click through the menus to learn more.
							</p>
						</div>
					</div>
				</div>							
				<div class="row">
					<div class="col-md-6 accordion-left">
						<!-- accordion 2 start-->
						<dl class="accordion">
							<dt>
								<a href="">Success</a>
							</dt>
							<dd>
								At SCR, we want to build a reputation of victory through success at the competitions we attend.
								Each of our teams strives to perform their best in order to achieve this goal. 
							</dd>
							<dt>
								<a href="">Professionalism</a>
							</dt>
							<dd>
								As an organization, we know success is impossible to attain without professionalism.
								We believe that knowledge and teaching are core to achieving the best results at competitions,
								so as a team it is crucial to maintain good documentation of all our processes.
								As information is passed down to newer members, it is important to raise the awareness of robotics 
								for future members of SCR.
							</dd>
							<dt>
								<a href="">Learning</a>
							</dt>
							<dd>
								Sooner Competitive Robotics provides a project-based learning experience for all of its members.
								One goal of our organization is to make this learning as effective as possible.
								We believe that each member's learning experience at SCR is not only a positive feedback to the 
								team, but also for the student themselves.
							</dd>
							<dt>
								<a href="">Community</a>
							</dt>
							<dd>
								SCR strives to spread the knowledge of STEM and robotics to the surrounding community.
								Introducing pre-college students to robotics and empowering them to 
								pursue degrees in science, technology, engineering or mathematics is one 
								of our organization's goals.
							</dd> 
							<dt>
								<a href="">Growth</a>
							</dt>
							<dd>
								As a team, we want to branch out and challenge ourselves. 
								We want to be able to compete at increasingly higher levels, with more difficult challenges to face.
								By growing, we enhance the team's reputation while also learning more as students.
							</dd>                                  
						</dl>
						<!-- accordion 2 end-->
					</div>
					<div class="col-md-6 no-padding info-area-right">
						<img class="img-fluid" src="img/repf.jpg" alt="">
					</div>
					<!--
					<div class="col-md-6 video-right justify-content-center align-items-center d-flex relative">
						<div class="overlay overlay-bg"></div>
						<a class="play-btn" href="#"><img class="img-fluid mx-auto" src="img/play.png" alt=""></a>
					</div>
					-->
				</div>
			</div>	
		</section>
		<!-- End mission Area -->

		<br/>
		
		<!-- start footer Area -->		
		<?php include "footer.php"; ?>
		<!-- End footer Area -->	
		

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script>
			var allPanels = $(".accordion > dd").hide();
			allPanels.first().slideDown("easeOutExpo");
			$(".accordion").each(function() {
				$(this).find("dt > a").first().addClass("active").parent().next().css({
					display: "block"
				});
			});


			$(document).on('click', '.accordion > dt > a', function(e) {

				var current = $(this).parent().next("dd");
				$(this).parents(".accordion").find("dt > a").removeClass("active");
				$(this).addClass("active");
				$(this).parents(".accordion").find("dd").slideUp("easeInExpo");
				$(this).parent().next().slideDown("easeOutExpo");

				return false;

			});
		</script>
	</body>
</html>