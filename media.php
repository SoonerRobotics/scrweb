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
			<section class="banner-area relative banner-area-media" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Social Media
                            </h1>
                            <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="media.php"> Social Media</a></p>
						</div>										
                    </div>
				</div>					
			</section>
			<!-- End banner Area -->


            <!-- Start social feeds -->
            <section class="gallery-area section-qtr-gap">
					<div class="container">
						<br />

                        
                        <section class="social-feed-area">
    	                    <div class="container">
                                <div class="row d-flex justify-content-center">
                                    <!-- Facebook -->
                                    <div class="col-lg-4 social-feed-right">
                                        <div class="title">
                                          <h4>Facebook</h4>
                                        </div>
    		    	                    <!--<div class="social-feed-details">-->
                                        <div class="fb-page" data-href="https://www.facebook.com/OURobots/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                            <blockquote cite="https://www.facebook.com/OURobots/" class="fb-xfbml-parse-ignore">
                                                <a href="https://www.facebook.com/OURobots/">Sooner Competitive Robotics</a>
                                            </blockquote>
                                        </div>
                                        <!--</div>-->
                                    </div>
                                    <!-- Instagram -->
                                    <div class="col-lg-4 social-feed-right">
                                        <div class="title">
                                          <h4>Instagram</h4>
                                        </div>
    		    	                    <div class="social-feed-details">
                                            <div id="pixlee_container"></div>
                                            <script type="text/javascript">
                                                window.PixleeAsyncInit = function() {Pixlee.init({apiKey:'ony2iod3Z1YFa9hS0b8A'});Pixlee.addSimpleWidget({widgetId:'13765'});};
                                            </script>
                                            <script src="//instafeed.assets.pixlee.com/assets/pixlee_widget_1_0_0.js"></script>
                                        </div>
                                    </div>
                                    <!-- Twitter -->
                                    <div class="col-lg-4 social-feed-right">
                                        <div class="title">
                                          <h4>Twitter</h4>
                                        </div>
    		    	                    <div class="social-feed-details">
                                            <a class="twitter-timeline" href="https://twitter.com/OU_SCR?ref_src=twsrc%5Etfw">Tweets by OU_SCR</a> 
                                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>    
                    </div>
				</section>
            <!-- End social feeds -->
						
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