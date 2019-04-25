document.addEventListener('DOMContentLoaded', () =>
{
    if($('#list_movies').length > 0)
    {
        $.ajax({
            type: "GET",
            url: "../festival/assets/json/movies.json",
            dataType: "json",            
            success: data => {
                $.each(data.movies, function(i, val)
                {
                    oneMovie = '<li><a href="movies/' + val._id + '">' + val.name + '</a></li>';
                    $('#list_movies').append(oneMovie);
                });
            },
            error: err => console.error(err),
            complete: () => console.log("End of async call") // Option
        });
    }

    if($('#movie_detail').length > 0)
    {
        $.ajax({
            type: "GET",
            url: "../assets/json/movies.json",
            dataType: "json",            
            success: data => {
                let id_movie = $('#movie_detail').attr('data-id-movie');
                
                $.each(data.movies, function(i, val)
                {
                    if(id_movie == val._id)
                    {
                        oneMovie = val;
                    }
                });

                let titleMovie = '<p>Titre original : <b>' + oneMovie.name + '</b></p>';
                let realisationMovie = '<p>Réalisation : <b>' + oneMovie.director + '</b></p>';

                $('#movie_detail').append(titleMovie);
                $('#movie_detail').append(realisationMovie);
            },
            error: err => console.error(err),
            complete: () => console.log("End of async call") // Option
        });
    }
});