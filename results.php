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
						<a href="">2021</a>
					</dt>
					<dd>
						<ul>
							<li><b>Mercury</b>: Competition Cancelled due to COVID-19</li>
							<li>
								<b>IGVC</b>: 1st in Auto-Nav, T-2nd in Grand Prize, and Rookie of the Year
								<br />
								&emsp;<a class="email" href="files/docs/IGVC21_Design_Report.pdf">Design Report</a>
							</li>
						</ul>
					</dd>
					<dt>
						<a href="">2020</a>
					</dt>
					<dd>
						<ul>
							<li>
								<b>Mercury</b>: Competition Cancelled due to COVID-19
								<br />
								&emsp;<a class="email" href="files/docs/Mercury20_Tech_Document.pdf">Tech Document</a>
								</li>
							<li><b>NRC</b>: Competition Cancelled due to COVID-19</li>
							<li><b>IGVC</b>: Competition Cancelled due to COVID-19</li>
						</ul>
					</dd>
					<dt>
						<a href="">2019</a>
					</dt>
					<dd>
						<ul>
							<li><b>IEEE</b>: T-6th place (out of ~30 teams)</li>
							<li>
								<b>Mercury</b>: 2nd place (by points scored)
								<br />
								&emsp;<a class="email" href="files/docs/Mercury19_Tech_Document.pdf">Tech Document</a>
							</li>
							<li><b>Sumobot</b>: Competition Cancelled</li>
							<li><b>Robomagellan</b>: Competition Cancelled</li>
						</ul>
					</dd>
					<dt>
						<a href="">2018</a>
					</dt>
					<dd>
						<ul>
							<li><b>Sumobot</b>: 5th place</li>
							<li><b>IEEE</b>: T-15th place (out of 60 teams)</li>
							<li><b>Mercury</b>: 9th</li>
						</ul>
					</dd>
					<dt>
						<a href="">2017</a>
					</dt>
					<dd>
						<ul>
							<li><b>Sumobot</b>: 4th place</li>
							<li><b>IEEE</b>: 9th place (out of 30 teams)</li>
							<li><b>Mercury</b>: 10th place (out of 16 teams)</li>
						</ul>
					</dd>
					<dt>
						<a href="">2016</a>
					</dt>
					<dd>
						<ul>
							<li><b>IEEE</b>: 4th place</li>
							<li><b>Mercury</b>: 7th place (out of 26 teams), Judges Choice Award</li>
						</ul>
					</dd>
					<dt>
						<a href="">2015</a>
					</dt>
					<dd>
						<ul>
							<li><b>ASEE</b>: 4th place out of 15 teams</li>
							<li><b>KIPR Aerial</b>: 5th place, Judges Choice for Best Technology</li>
						</ul>
					</dd>
					<dt>
						<a href="">2014</a>
					</dt>
					<dd>
						<ul>
							<li><b>KIPR Open</b>: 1st place Double Elimination</li>
							<li><b>KIPR Aerial</b>: Judges Choice</li>
							<li><b>Mercury</b>: T-8th (out of 13 teams)</li>
						</ul>
					</dd>
					<dt>
						<a href="">2013</a>
					</dt>
					<dd>
						<ul>
							<li><b>Mercury</b>: 1st place Overall</li>
							<li><b>KIPR Open</b>: 2nd place Overall</li>
						</ul>
					</dd>
					<dt>
						<a href="">2012</a>
					</dt>
					<dd>
						<ul>
							<li><b>IEEE Robot</b>: Top 10 (out of 40 teams)</li>
							<li><b>KIPR Open</b>: 2nd place Double Elimination, Judges Choice</li>
						</ul>
					</dd>
					<dt>
						<a href="">2011</a>
					</dt>
					<dd>
						<ul>
							<li><b>KIPR Aerial 2011</b>: 1st place Overall</li>
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