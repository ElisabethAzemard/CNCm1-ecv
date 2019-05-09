const imagePath = './assets/img/';

document.addEventListener('DOMContentLoaded', () =>
{
	console.log('Loaded');

	if($('.carousel').length > 0)
	{
		
	}

    if($('#list_movies').length > 0)
    {
		// init Isotope
		var grid = $('#list_movies').isotope({
			// options
		});

		// filter items on button click
		$('.filter-button-group').on( 'click', 'div', function()
		{
			var filterValue = $(this).attr('data-filter');
			grid.isotope({ filter: filterValue });
		});
    }

    if($('#movie_detail').length > 0)
    {

	}
	
	if($('#list_events').length > 0)
    {
     
	}
	
	if($('#event_detail').length > 0)
    {
        
	}
});