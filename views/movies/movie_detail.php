<!-- <div id="movie_detail" data-id-movie=<?php if(isset($_GET['id'])) echo $_GET['id'] ;?>></div> -->
<div id="movie_detail">

<?php

	$json = file_get_contents('http://localhost/festival/assets/json/movies.json');
    $objMovies = json_decode($json);

	foreach($objMovies->movies as $movie)
	{
		if( isset($_GET['name']) && $movie->name == str_replace('_', ' ', $_GET['name']) )
		{
            $class_name = "";
            $text_category = "";

            switch($movie->genre)
            {
                case 'court métrage court':
                    $class_name = 'court_metrage';
                    $text_category = 'Court Métrage';
                    break;
                
                case 'long_metrage':
                    $class_name = 'long_metrage';
                    $text_category = 'Long Métrage';
                    break;
                    
                case 'film_TV':
                    $class_name = 'film_TV';
                    $text_category = 'Film TV';
                    break;
            }
            ?>
            <a href="/festival/movies">< retour à la liste des films</a>

            <div class="header">
                <div>
                    <h1><?= $movie->name; ?></h1>
                    <span class="category_movie <?= $class_name; ?>"><?= $text_category; ?></span>
                </div>
                <img src="<?= $movie->image; ?>" alt="">
            </div>

            <div class="info_principale">
                <p><span>Titre : </span><?= $movie->name; ?></p>
                <p><span>Réalisation : </span>
                <?= $movie->director->name; ?> <?= $movie->director->familyName; ?>
                </p>
                <p><span>Année de production : </span><?= $movie->dateCreated;?></p>
                <p><span>Durée : </span><?= $movie->duration;?></p>
            </div>


            <div class="description">
                <h2>Résumé</h2>
                <!-- TODO : afficher le résumé -->
            </div>

            <div class="acteurs">
                <h2>Acteurs</h2>
                <!-- TODO : afficher les acteurs -->
            </div>

            <?php
        }

    }
?>

</div>