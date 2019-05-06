<div class="carousel" data-flickity='{ "autoPlay": true }'>

<?php

	$json = file_get_contents('http://localhost/festival/assets/json/events.json');
	$objEvents = json_decode($json);

	foreach($objEvents->events as $event)
	{
	?>

		<div class="carousel-cell">
			<span><?= $event->name; ?></span>
		</div>
	
	<?php
	}

?>

</div>