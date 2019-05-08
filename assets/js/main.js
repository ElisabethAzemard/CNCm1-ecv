const imagePath = '/festival/assets/img/';

document.addEventListener('DOMContentLoaded', () =>
{
	if($('.carousel').length > 0)
	{
		/*$.ajax({
            type: "GET",
            url: "/festival/assets/json/events.json",
            dataType: "json",            
            success: data => {
                $.each(data.events, function(i, val)
                {
					oneEvent = '<div class="carousel-cell">';
					oneEvent += '<span>' + val.name + '</span>';
					oneEvent += '</div>';
					
                    $('.flickity-slider').append(oneEvent);
				});
				
				$('.main-carousel').flickity({
					// options
					cellAlign: 'left',
					contain: true
				});
            },
            error: err => console.error(err),
            complete: () => console.log("End of async call") // Option
		});*/
	}

    if($('#list_movies').length > 0)
    {
        /*$.ajax({
            type: "GET",
            url: "/festival/assets/json/movies.json",
            dataType: "json",            
            success: data => {
                $.each(data.movies, function(i, val)
                {
					let class_name = "";
					let text_category = "";

					switch(val.category)
					{
						case 'court_metrage':
							class_name = 'court_metrage';
							text_category = 'Court Métrage';
							break;
						
						case 'long_metrage':
							class_name = 'long_metrage';
							text_category = 'Long Métrage';
							break;
							
						case 'film_TV':
							class_name = 'film_TV';
							text_category = 'Film TV';
							break;
					}

					oneMovie = '<div class="oneMovie ' + val.category + '">';
					oneMovie += '<a href="movies/' + val._id + '">';
					oneMovie += '<span class="category_movie ' + class_name +'">' + text_category + '</span>';
					oneMovie += '<span class="like_movie"><img src="' + imagePath + '/like.png" alt="Like"></span>';
					oneMovie += '<span class="title_movie">' + val.name + '</span>';
					oneMovie += '<div class="background_image" style="background:url(' + imagePath + val.image + ') center center no-repeat"></div>';
					oneMovie += '</a>';
					oneMovie += '</div>';
					
                    $('#list_movies').append(oneMovie);
                });
            },
            error: err => console.error(err),
            complete: () => console.log("End of async call") // Option
		});*/

		// init Isotope
		var grid = $('#list_movies').isotope({
			// options
		});

		// filter items on button click
		$('.filter-button-group').on( 'click', 'div', function()
		{
			var filterValue = $(this).attr('data-filter');
			grid.isotope({ filter: filterValue });

			/*$.each($('#list_movies .oneMovie'), function(i, val)
			{
				if(filterValue === '*')
				{
					$(this).css({'position':'unset','display':'inline-block'});
				}
				else
				{
					if(!$(this).hasClass(filterValue))
					{
						$(this).css({'position':'absolute','display':'none'});
					}
					else
					{
						$(this).css({'position':'unset','display':'inline-block'});
					}
				}
			});*/
		});
    }

    // if($('#movie_detail').length > 0)
    // {
    //     $.ajax({
    //         type: "GET",
    //         url: "/festival/assets/json/movies.json",
    //         dataType: "json",            
    //         success: data => {
    //             let id_movie = $('#movie_detail').attr('data-id-movie');
                
    //             $.each(data.movies, function(i, val)
    //             {
    //                 if(id_movie == val._id)
    //                 {
    //                     oneMovie = val;
    //                 }
    //             });

	// 			if(oneMovie !== undefined)
	// 			{
	// 				let titleMovie = '<p>Titre original : <b>' + oneMovie.name + '</b></p>';
	// 				let directors = "";

	// 				$.each(oneMovie.director, function(i, val)
	// 				{
	// 					directors += val.givenName + ' ' + val.familyName + ', ';
	// 				});

	// 				let realisationMovie = '<p>Réalisation : <b>' + directors.substring(0, directors.length - 2) + '</b></p>';

	// 				$('#movie_detail').append(titleMovie);
	// 				$('#movie_detail').append(realisationMovie);
					
	// 				document.title = oneMovie.name + ' - Festival d\'Annecy';
	// 			}
	// 		},
    //         error: err => console.error(err),
    //         complete: () => console.log("End of async call") // Option
    //     });
	// }
	
	// if($('#list_events').length > 0)
    // {
    //     $.ajax({
    //         type: "GET",
    //         url: "/festival/assets/json/events.json",
    //         dataType: "json",            
    //         success: data => {
    //             $.each(data.events, function(i, val)
    //             {
    //                 oneMovie = '<li><a href="events/' + val._id + '"><span>' + val.name + '</span></a></li>';
    //                 $('#list_events ul').append(oneMovie);
    //             });
    //         },
    //         error: err => console.error(err),
    //         complete: () => console.log("End of async call") // Option
    //     });
	// }
	
	if($('#event_detail').length > 0)
    {
        $.ajax({
            type: "GET",
            url: "/festival/assets/json/events.json",
            dataType: "json",            
            success: data => {
                let id_event = $('#event_detail').attr('data-id-event');

                $.each(data.events, function(i, val)
                {
                    if(id_event == val._id)
                    {
                        oneEvent = val;
                    }
                });

				if(oneEvent !== undefined)
				{
					let titleEvent = '<h2><b>' + oneEvent.name + '</b></h2>';
					let descriptionEvent = '<p>' + oneEvent.description + '</p>';

					$('#event_detail').append(titleEvent);
					$('#event_detail').append(descriptionEvent);
					
					document.title = oneEvent.name + ' - Festival d\'Annecy';
				}
			},
            error: err => console.error(err),
            complete: () => console.log("End of async call") // Option
        });
	}
});