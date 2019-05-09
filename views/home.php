<div id="home-page">
	<img src="./assets/img/annecy_home_1920x470px.jpg" alt="">
	<p>Le <b>FESTIVAL</b> international du film d’animation d’<b>ANNECY</b> :<br><span>Le rendez-vous mondial de plus de 11 000 professionnels</span></p>
</div>

<!--<div class="carousel" data-flickity='{ "autoPlay": true }'>

<?php

	$json = file_get_contents('../assets/json/share-events.json');
	$objEvents = json_decode($json);

	foreach($objEvents as $event)
	{
		if($event->image != '')
		{
	?>

		<div class="carousel-cell">
			<div class="background-image" style="background:url(<?php echo $event->image; ?>) center center no-repeat">
				<div class="title-event">
					<h2><?= $event->name; ?></h2>
				</div>
			</div>
		</div>
	
	<?php
		}
	}

?>

</div>-->

<div id="movies-most-like">
	<h3>Films les plus aimés</h3>

	<?php

		$json = file_get_contents('./assets/json/movies.json');
		$objMovies = json_decode($json);
		$countMovie = 0;

		foreach($objMovies->movies as $movie)
		{
			if($countMovie < 3)
			{
				$class_name = "";
				$text_category = "";

				if(strstr($movie->genre, 'court métrage'))
				{
					$class_name = 'court_metrage';
					$text_category = 'Court Métrage';
				}
				else if(strstr($movie->genre, 'long métrage'))
				{
					$class_name = 'long_metrage';
					$text_category = 'Long Métrage';
				}

				$directorsMovie = $movie->director;
				$stringDirectors = "";

				if(gettype($directorsMovie) === 'array')
				{
					foreach($directorsMovie as $director)
					{
						$stringDirectors .= $director->givenName . ' ' . $director->familyName . ', ';
					}
				}
				else
				{
					$stringDirectors .= $directorsMovie->name . ' ' . $directorsMovie->familyName . ', ';
				}

				?>
				<div class="oneMovie <?= $class_name; ?>">
					<div>
						<div class="background_image" style="background-image:url(<?= $movie->image; ?>)">
							<span class="like_movie"><img src="./assets/img/like.png" alt="Like"></span>
						</div><!--
						--><span class="category_movie <?= $class_name; ?>"><?= $text_category; ?></span><!--
						--><p>Titre :
								<span class="title_movie"><?= $movie->name; ?></span>
							</p><!--
						--><p>Réalisation :
								<span class="director_movie"><?= substr($stringDirectors, 0, -2); ?></span>
						</p><!--
						--><a class="<?= $class_name; ?>" href="movies/<?= $movie->name; ?>">Détail</a>
					</div>
				</div>
				<?php
				$countMovie++;
			}
			else
			{
				break;
			}
		}
	?>

</div>

<div id="list_events_home">
	<h3>Les prochains événements</h3>

	<?php
	    $json = file_get_contents('./assets/json/share-events.json');
        $objEvents = json_decode($json);

        function sortFunction( $a, $b ) {
            return strtotime(substr( $a->startDate, 0, 10)) - strtotime(substr( $b->startDate, 0, 10));
        }
        usort($objEvents, "sortFunction");

		$date = 0;
		$count = 0;

		foreach ($objEvents as $event)
		{
			if( strtotime($event->startDate) > strtotime('now') && $count < 3)
			{
				if ( substr( $event->startDate, 0, 10) != $date ) {
					$date = substr( $event->startDate, 0, 10);
					?>
					<h2> Evenement du <?= ucfirst(strftime('%A %d %B %Y', strtotime($event->startDate))); ?></h2>
					
					<?php
				}
				?>
					<ul>
						<li>
							<a href="events/<?= $event->name; ?>">
								<div>
									<span>date</span>
									<p><?= substr( $event->startDate, 0, 5) ?></p>
								</div>

								<div>
									<span>heure</span>
									<p><?= substr( $event->startDate, 10, 6) ?> - <?= substr( $event->endDate, 10, 6) ?></p>
								</div>

								<div>
									<span>titre de l'evenement</span>
									<p> <?= $event->name ?></p>
								</div>
							</a>
						</li>
					</ul>
				<?php

				$count++;
			}
            
        }

    ?>
</div>