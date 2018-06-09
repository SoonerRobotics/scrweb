<?php

$facebook_link  = "https://www.facebook.com/OURobots/";
$twitter_link   = "https://twitter.com/OU_SCR";
$youtube_link   = "https://www.youtube.com/channel/UCBBtOvgnLrfVAYTP1tSAGrw?view_as=subscriber";
$instagram_link = "https://www.instagram.com/ou_scr/";

function footer_social()
{
	global $facebook_link;
	global $twitter_link;
	global $youtube_link;
	global $instagram_link;
?>
    <div class="col-lg-6 col-sm-12 footer-social">
        <ul>
    		<li><a href="<?php echo $facebook_link; ?>"><i class="fa fa-facebook"></i></a></li>
    		<li><a href="<?php echo $twitter_link; ?>"><i class="fa fa-twitter"></i></a></li>
    		<li><a href="<?php echo $youtube_link; ?>"><i class="fa fa-youtube"></i></a></li>
    		<li><a href="<?php echo $instagram_link; ?>"><i class="fa fa-instagram"></i></a></li>
    	</ul>			
    </div>
<?php
}
?>

<?php
function header_social()
{
	global $facebook_link;
	global $twitter_link;
	global $youtube_link;
	global $instagram_link;
?>
    <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
    	<ul>
    		<li><a href="<?php echo $facebook_link; ?>"><i class="fa fa-facebook"></i></a></li>
    		<li><a href="<?php echo $twitter_link; ?>"><i class="fa fa-twitter"></i></a></li>
    		<li><a href="<?php echo $youtube_link; ?>"><i class="fa fa-youtube"></i></a></li>
    		<li><a href="<?php echo $instagram_link; ?>"><i class="fa fa-instagram"></i></a></li>
    	</ul>			
    </div>
<?php
    }
?>