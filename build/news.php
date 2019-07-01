<?php
$title   = "";
$message = "";

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