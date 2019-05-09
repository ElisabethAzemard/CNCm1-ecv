<div id="home-page">
	<img src="./assets/img/annecy_home_1920x470px.jpg" alt="">
	<p>Le <b>FESTIVAL</b> international du film d’animation d’<b>ANNECY</b> :<br><span>Le rendez-vous mondial de plus de 11 000 professionnels</span></p>
</div>

<!--<div class="carousel" data-flickity='{ "autoPlay": true }'>

<?php

	$json = file_get_contents('http://localhost/festival/assets/json/share-events.json');
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

		$json = file_get_contents('http://localhost/festival/assets/json/movies.json');
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
							<span class="like_movie"><img src="/festival/assets/img/like.png" alt="Like"></span>
						</div><!--
						--><span class="category_movie <?= $class_name; ?>"><?= $text_category; ?></span><!--
						--><p>Titre :
								<span class="title_movie"><?= $movie->name; ?></span>
							</p><!--
						--><p>Réalisation :
								<span class="director_movie"><?= substr($stringDirectors, 0, -2); ?></span>
						</p><!--
						--><a class="<?= $class_name; ?>" href="movies/<?= str_replace(' ', '_', $movie->name); ?>">Détail</a>
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

<div id="next-events">
	<h3>Les prochains événements</h3>

	<?php

		$json = file_get_contents('http://localhost/festival/assets/json/share-events.json');
		$objEvents = json_decode($json);
		$countEvent = 0;

		foreach($objEvents as $event)
		{
			if($countEvent < 3)
			{
		?>

			<div class="oneEvent">
				<div>
					1
				</div><!--

				--><div>
					2
				</div><!--

				--><div>
					3
				</div>
			</div>

		<?php

				$countEvent++;
			}
		}

	?>
</div>