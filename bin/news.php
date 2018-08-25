<?php
$title   = "First General Meeting";
$message = "Our first general meeting is Tuesday August 28th from 5pm to 7pm. If you are interested in robotics, you should come to this meeting as we will be joining with Robotics Club and Sooner Rover team to tell you all about robotics at OU. Follow us on social media to stay updated on SCR throughout the year as teams are about to start building their robots for competition. Also, <a href=\"https://orgsync.com/118484/chapter\">join our Orgsync page!</a>";

if(strlen($message) > 0 && strlen($title) > 0)
{
?>
<section class="gallery-area section-half-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10"><?php echo $title; ?></h1>
				</div>
			</div>
	    </div>
        <div class="row d-flex justify-content-center">
            <p>
                <?php echo $message; ?>
            </p>
        </div>
    </div>
</section>
<?php
}
?>