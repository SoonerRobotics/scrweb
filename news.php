<?php
$title   = "Visit SCR at Fall Fest!";
$message = "Come visit our booth at fall fest to learn more about SCR! Fall Fest will be from 11am to 3pm on Friday August 24th, and there will be free food and activities. Make sure to arrive early so you can meet some members of the SCR student leadership team, talk about robotics, and get in line for the food. Also, <a href=\"https://orgsync.com/118484/chapter\">join our Orgsync page!</a>";

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