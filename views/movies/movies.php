<div class="categories filter-button-group">
	<div data-filter="*">
		<div>
			<img src="<?php echo $GLOBALS['image'] . '/add.png'; ?>" alt="">
			<p>Tous</p>
		</div>
	</div><!--
	--><div data-filter=".court_metrage" class="court_metrage">
		<div>
			<img src="<?php echo $GLOBALS['image'] . '/film-roll.png'; ?>" alt="">
			<p>Courts métrages</p>
		</div>
	</div><!--
	--><div data-filter=".long_metrage" class="long_metrage">
		<div>
			<img src="<?php echo $GLOBALS['image'] . '/film.png'; ?>" alt="">
			<p>Longs métrages</p>
		</div>
	</div><!--
	--><!--<div data-filter=".film_TV" class="film_TV">
		<div>
			<img src="<?php echo $GLOBALS['image'] . '/television.png'; ?>" alt="">
			<p>Films TV et commande</p>
		</div>
	</div>-->
</div>

<div id="list_movies">

<?php

	$json = file_get_contents('./assets/json/movies.json');
	$objMovies = json_decode($json);

	foreach($objMovies->movies as $movie)
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

		?>

		<div class="oneMovie <?= $class_name; ?>">
			<a href="movies/<?= $movie->name; ?>">
				<span class="category_movie <?= $class_name; ?>"><?= $text_category; ?></span>
				<span class="like_movie"><img src="./assets/img/like.png" alt="Like"></span>
				<span class="title_movie"><?= $movie->name; ?></span>
				<div class="background_image" style="background:url(<?= $movie->image; ?>) center center no-repeat"></div>
			</a>
		</div>

		<?php
	}

?>

</div>