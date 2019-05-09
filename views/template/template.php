<!DOCTYPE html>
<html lang="FR-fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title><?php echo $title . ' - Festival d\'Annecy'; ?></title>
		<link rel="stylesheet" href="./assets/css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	</head>

	<body>
		
		<?php
			
			include_once('header.php');

			include_once('views/' . $directory . '/' . $view . '.php');

			include_once('footer.php');

		?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		<script src="./assets/js/main.js"></script>
	</body>
</html>