<?php

function getEvents()
{
$events = [];

//Event 0
$events[0]['title'] = "2018 Shell Fall Festival/Schlumberger New Engineers Welcome";
$events[0]['start'] = "Friday August 24th @ 11AM";
$events[0]['end']   = "Friday August 24th @ 3PM";
$events[0]['city']  = "Norman, OK";
$events[0]['venue'] = "OU Engineering Quad";
$events[0]['link']  = "";

//Event 1
$events[1]['title'] = "SCR First General Meeting";
$events[1]['start'] = "Tuesday August 28th @ 5pm";
$events[1]['end']   = "Tuesday August 28th @ 7pm";
$events[1]['city']  = "Norman, OK";
$events[1]['venue'] = "Rawl Engineering Practice Facility";
$events[1]['link']  = "";

////Event 2
//$events[2]['title'] = "2021 OSU Mercury Competition";
//$events[2]['start'] = "TBA";
//$events[2]['end']   = "TBA";
//$events[2]['city']  = "Stillwater, OK";
//$events[2]['venue'] = "Oklahoma State University";
//$events[2]['link']  = "";

return $events;
}

function printEvents()
{
    $events = getEvents();

    if(count($events) > 0)
    {
    ?>
    <section class="event-details-area">
    	<div class="container">
    		<div class="row d-flex justify-content-center">
    <?php
        for($i = 0; $i < count($events); $i++)
        {
    ?>
    		    <div class="col-lg-4 event-details-right">
    		    	<div class="single-event-details">
                        <?php 
                        if(strcasecmp($events[$i]['link'],"") != 0)
                        {
                        ?>
                            <h4>
                                <a href="<?php echo $events[$i]['link'];?>">
                                    <?php echo $events[$i]['title']; ?>
                                </a>
                            </h4>
                        <?php
                        }
                        else
                        {
                        ?>
                            <h4><?php echo $events[$i]['title']; ?></h4>
                        <?php
                        }
                        ?>
    		    		<ul class="mt-10">
    		    			<li class="justify-content-between d-flex">
    		    				<span>Start date</span>
    		    				<span><?php echo $events[$i]['start']; ?></span>
    		    			</li>
    		    			<li class="justify-content-between d-flex">
    		    				<span>End date</span>
    		    				<span><?php echo $events[$i]['end']; ?></span>
    		    			</li>
    		    			<li class="justify-content-between d-flex">
    		    				<span>City</span>
    		    				<span><?php echo $events[$i]['city']; ?></span>
    		    			</li>
    		    			<li class="justify-content-between d-flex">
    		    				<span>Venue</span>
    		    				<span><?php echo $events[$i]['venue']; ?></span>
    		    			</li>											
    		    		</ul>
    		    	</div>
    		    </div>
    <?php
        }
    ?>
    		</div>
    	</div>
    </section>

    <?php
    }
    else
    {
    ?>
    <section class="gallery-area">
    	<div class="container">
    		<div class="row d-flex justify-content-center">
                <p>
                    No big events to show at the moment, but there are lots of things going on. Check out the calendar below for more information.
                </p>
    		</div>
    	</div>
    </section>
    <?php
    }
}
    ?>

<?php
function get_num_events()
{
    $events = getEvents();
    return count($events);
}
?>