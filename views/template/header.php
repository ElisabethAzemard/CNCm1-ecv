<header>
	<a href="/festival">
		<img src="<?php echo $GLOBALS['image'] . 'logo.gif'; ?>" alt="">
	</a>

	<nav>
		<ul>
			<li><a href="/festival/news" title="" class="<?php if($view === 'news' || $view === 'new_detail'){echo 'active';}?>">Actualités</a></li>
			<li><a href="/festival/events" title="" class="<?php if($view === 'events' || $view === 'event_detail'){echo 'active';}?>">Evenements</a></li>
			<li><a href="/festival/movies" title="" class="<?php if($view === 'movies' || $view === 'movie_detail'){echo 'active';}?>">Films</a></li>
			<li><a href="/festival/palmares" title="" class="<?php if($view === 'palmares'){echo 'active';}?>">Palmares</a></li>
		</ul>
	</nav>
</header>