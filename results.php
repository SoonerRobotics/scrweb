<!DOCTYPE html>
<html lang="en" class="no-js">
	<?php include "header.php"; ?>
	<body>	
		<?php include "navbar.php";?>

		<!-- start banner Area -->
		<section class="banner-area relative banner-area-results" id="home">	
			<div class="overlay overlay-bg"></div>
			<div class="container">				
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
							Competition Results				
						</h1>	
						<br />
					</div>	
				</div>
			</div>
		</section>
		<!-- End banner Area -->	
		
		<br>

		<div class="row"  style="margin: 0 auto; display: flex;  justify-content: center;">
			<div class="col-md-6 accordion-left">
				<!-- accordion 2 start-->
				<dl class="accordion">
				<dt>
						<a href="">2020</a>
					</dt>
					<dd>
						<ul>
							<li>Mercury: Postponed Until Fall 2020</li>
							<li>NRC: Competition Cancelled</li>
							<li>IGVC: Competition Cancelled</li>
						</ul>
						<p style="margin-top: 10px">
							Context: <a href="https://en.wikipedia.org/wiki/2019%E2%80%9320_coronavirus_pandemic">2019–20 coronavirus pandemic</a>
						</p>
					</dd>
					<dt>
						<a href="">2019</a>
					</dt>
					<dd>
						<ul>
							<li>IEEE: T-6th place (out of ~30 teams)</li>
							<li>Mercury: 2nd place (by points scored)</li>
							<li>Sumobot: Competition Cancelled</li>
							<li>Robomagellan: Competition Cancelled</li>
						</ul>
					</dd>
					<dt>
						<a href="">2018</a>
					</dt>
					<dd>
						<ul>
							<li>Sumobot: 5th place</li>
							<li>IEEE: T-15th place (out of 60 teams)</li>
							<li>Mercury: 9th</li>
						</ul>
					</dd>
					<dt>
						<a href="">2017</a>
					</dt>
					<dd>
						<ul>
							<li>Sumobot: 4th place</li>
							<li>IEEE: 9th place (out of 30 teams)</li>
							<li>Mercury: 10th place (out of 16 teams)</li>
						</ul>
					</dd>
					<dt>
						<a href="">2016</a>
					</dt>
					<dd>
						<ul>
							<li>IEEE: 4th place</li>
							<li>Mercury: 7th place (out of 26 teams), Judges Choice Award</li>
						</ul>
					</dd>
					<dt>
						<a href="">2015</a>
					</dt>
					<dd>
						<ul>
							<li>ASEE: 4th place out of 15 teams</li>
							<li>KIPR Aerial: 5th place, Judges Choice for Best Technology</li>
						</ul>
					</dd>
					<dt>
						<a href="">2014</a>
					</dt>
					<dd>
						<ul>
							<li>KIPR Open: 1st place Double Elimination</li>
							<li>KIPR Aerial: Judges Choice</li>
							<li>Mercury: T-8th (out of 13 teams)</li>
						</ul>
					</dd>
					<dt>
						<a href="">2013</a>
					</dt>
					<dd>
						<ul>
							<li>Mercury: 1st place Overall</li>
							<li>KIPR Open: 2nd place Overall</li>
						</ul>
					</dd>
					<dt>
						<a href="">2012</a>
					</dt>
					<dd>
						<ul>
							<li>IEEE Robot: Top 10 (out of 40 teams)</li>
							<li>KIPR Open: 2nd place Double Elimination, Judges Choice</li>
						</ul>
					</dd>
					<dt>
						<a href="">2011</a>
					</dt>
					<dd>
						<ul>
							<li>KIPR Aerial 2011: 1st place Overall</li>
						</ul>
					</dd>
				</dl>
			</div>
		</div>

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